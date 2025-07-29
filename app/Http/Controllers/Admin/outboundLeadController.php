<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\outboundLead;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use League\Uri\Exceptions\ConversionFailed;

class outboundLeadController extends Controller
{
    public function addLead()
    {
        return view('admin/Pages/outBoundLead/addLead');
    }

    public function StoreLead(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'linkedin_url' => 'nullable|url',
            'website_url' => 'nullable|url',
            'designation' => 'nullable|string',
            'status' => 'required|in:New,Hot,Warm,Cold,Qualified,Converted',
            'service' => 'nullable|string',
            'industry' => 'nullable|string',
            'source' => 'nullable|string',
            'first_contact_date' => 'nullable|date',
            'second_followup_date' => 'nullable|date',
            'third_follow_up_date' => 'nullable|date',
            'assigned_to' => 'nullable',
            'notes' => 'nullable|string',
            'notes2' => 'nullable|string',
            'notes3' => 'nullable|string',
            'budget' => 'nullable',
        ]);

        outboundLead::create($validated);

        return redirect()->route('listLead')->with('success', 'Lead created successfully!');
    }
    public function listLead(Request $request)
    {
        $month = $request->get('month', now()->format('Y-m'));
        $startOfMonth = Carbon::parse($month)->startOfMonth();
        $endOfMonth = Carbon::parse($month)->endOfMonth();

        // Graph data (daily)

        $leads = outboundLead::selectRaw("DATE(created_at) as date, COUNT(*) as total_leads")
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // all and month count of $leads
        $month = $request->get('month', now()->format('Y-m'));
        $startOfMonth = Carbon::parse($month)->startOfMonth();
        $endOfMonth = Carbon::parse($month)->endOfMonth();
        $listLeads = outboundLead::orderBy('created_at', 'desc')->get();

        $totalOutboundThisMonth = outboundLead::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->count();

        // Conversion
        $convertedOutBound = OutboundLead::where('status', 'Converted')->count();

        // Service-wise leads in selected month
        $serviceCounts = outboundLead::selectRaw('service, COUNT(*) as count')
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->whereNotNull('service')
            ->groupBy('service')
            ->pluck('count', 'service');

        // status-wise leads in selected month    
        $knownStatuses = ['New', 'Hot', 'Warm', 'Cold', 'Lost', 'Converted'];
        $allStatuses = ['New', 'Hot', 'Warm', 'Cold', 'Lost', 'Converted'];
        $statusWiseLeads = [];

        foreach ($allStatuses as $status) {
            if ($status === 'Unknown') {
                // Leads with NULL, empty, or unrecognized status
                $statusData = outboundLead::selectRaw("DATE(created_at) as date, COUNT(*) as count")
                    ->whereNotIn('status', $knownStatuses)
                    ->orWhereNull('status')
                    ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                    ->groupBy('date')
                    ->orderBy('date')
                    ->get()
                    ->pluck('count', 'date');
            } else {
                $statusData = outboundLead::selectRaw("DATE(created_at) as date, COUNT(*) as count")
                    ->where('status', $status)
                    ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                    ->groupBy('date')
                    ->orderBy('date')
                    ->get()
                    ->pluck('count', 'date');
            }

            // Fill missing dates with 0
            $allDates = collect();
            $current = $startOfMonth->copy();
            while ($current <= $endOfMonth) {
                $allDates->put($current->format('Y-m-d'), $statusData->get($current->format('Y-m-d'), 0));
                $current->addDay();
            }

            $statusWiseLeads[] = [
                'name' => ucfirst($status),
                'data' => array_values($allDates->toArray())
            ];
        }

        // Generate chart x-axis labels (e.g. 'May 01', 'May 02', etc.)
        $chartDates = [];
        $current = $startOfMonth->copy();
        while ($current <= $endOfMonth) {
            $chartDates[] = $current->format('M d');
            $current->addDay();
        }

        return view('admin/Pages/outBoundLead/listLead', compact(
            'listLeads',
            'leads',
            'serviceCounts',
            'statusWiseLeads',
            'chartDates',
            'totalOutboundThisMonth',
            'convertedOutBound'
        ));
    }
    public function editLead($id)
    {
        $lead = outboundLead::findOrFail($id);
        return view('admin/Pages/outBoundLead/EditLead', compact('lead'));
    }
    public function updateLead(Request $request, $id)
    {
        $lead = outboundLead::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'linkedin_url' => 'nullable|url',
            'website_url' => 'nullable|url',
            'designation' => 'nullable|string',
            'status' => 'required|in:New,Hot,Warm,Cold,Lost,Converted',
            'service' => 'nullable|string',
            'industry' => 'nullable|string',
            'source' => 'nullable|string',
            'first_contact_date' => 'nullable|date',
            'second_followup_date' => 'nullable|date',
            'third_follow_up_date' => 'nullable|date',
            'assigned_to' => 'nullable',
            'notes' => 'nullable|string',
            'notes2' => 'nullable|string',
            'notes3' => 'nullable|string',
            'budget' => 'nullable'
        ]);

        $lead->update($request->only([
            'name',
            'company_name',
            'email',
            'phone',
            'linkedin_url',
            'website_url',
            'designation',
            'status',
            'service',
            'industry',
            'source',
            'first_contact_date',
            'second_followup_date',
            'third_follow_up_date',
            'assigned_to',
            'notes',
            'notes2',
            'notes3',
            'budget'
        ]));

        return redirect()->route('listLead')->with('success', 'Lead updated successfully.');
    }
    // Delete blog
    public function deleteLead(outboundLead $lead)
    {
        $lead->delete();
        return redirect()->route('listLead')->with('success', 'Lead deleted successfully!');
    }
    public function getLeadsChartData(Request $request)
    {
        try {
            $type = $request->input('type', 'month'); // 'day', 'week', 'month', 'year'

            switch ($type) {
                case 'day':
                    $leads = DB::table('outbound_leads')
                        ->select(DB::raw('DATE(created_at) as period'), DB::raw('COUNT(*) as total'))
                        ->groupBy(DB::raw('DATE(created_at)'))
                        ->orderBy('period')
                        ->get();
                    break;

                case 'week':
                    $leads = DB::table('outbound_leads')
                        ->select(DB::raw('YEARWEEK(created_at, 1) as period'), DB::raw('COUNT(*) as total'))
                        ->groupBy(DB::raw('YEARWEEK(created_at, 1)'))
                        ->orderBy('period')
                        ->get();
                    break;

                case 'year':
                    $leads = DB::table('outbound_leads')
                        ->select(DB::raw('YEAR(created_at) as period'), DB::raw('COUNT(*) as total'))
                        ->groupBy(DB::raw('YEAR(created_at)'))
                        ->orderBy('period')
                        ->get();
                    break;

                case 'month':
                default:
                    $leads = DB::table('outbound_leads')
                        ->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m') as period"), DB::raw('COUNT(*) as total'))
                        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"))
                        ->orderBy('period')
                        ->get();
                    break;
            }

            // Prepare chart data
            $categories = $leads->pluck('period');
            $totals = $leads->pluck('total');

            return response()->json([
                'series' => [[
                    'name' => 'Outbound Leads',
                    'data' => $totals
                ]],
                'categories' => $categories
            ]);
        } catch (\Exception $e) {
            \Log::error("Error in getLeadsChartData: " . $e->getMessage());
            return response()->json([
                'error' => 'Failed to fetch data',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function seclistLead()
    {
        // $listLeads = outboundLead::orderBy('created_at', 'desc')->get();
        $listLeads = OutboundLead::whereNotNull('first_contact_date')
            ->whereNull('second_followup_date')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin/Pages/outBoundLead/secFollowUp', compact('listLeads'));
    }
}
