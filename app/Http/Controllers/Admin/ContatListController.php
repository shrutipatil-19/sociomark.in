<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PopUpContact;
use Carbon\Carbon;

class ContatListController extends Controller
{
    public function graph(Request $request)
    {
        $month = $request->get('month', now()->format('Y-m'));
        $startOfMonth = Carbon::parse($month)->startOfMonth();
        $endOfMonth = Carbon::parse($month)->endOfMonth();

        // Graph data (daily ads vs organic)
        $leads = Contact::selectRaw("DATE(created_at) as date")
            ->selectRaw("SUM(CASE WHEN utm_source IN ('google','facebook','instagram','newsletter') THEN 1 ELSE 0 END) as ad_leads")
            ->selectRaw("SUM(CASE WHEN utm_source IS NULL OR utm_source NOT IN ('google','facebook','instagram','newsletter') THEN 1 ELSE 0 END) as organic_leads")
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // All Leads
        $contactLists = Contact::latest()->get();

        // Total counts
        $adSources = ['google', 'facebook', 'instagram', 'newsletter'];

        $totalAdLeads = Contact::whereIn('utm_source', $adSources)->count();

        $totalOrganicLeads = Contact::where(function ($q) use ($adSources) {
            $q->whereNull('utm_source')
                ->orWhereNotIn('utm_source', $adSources);
        })->count();

        $totalAdLeadsThisMonth = Contact::whereIn('utm_source', $adSources)
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->count();

        $totalOrganicLeadsThisMonth = Contact::where(function ($q) use ($adSources) {
            $q->whereNull('utm_source')
                ->orWhereNotIn('utm_source', $adSources);
        })->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->count();

        // Pie chart data: service-wise leads
        $services = Contact::pluck('service');
        // $serviceCounts = Contact::selectRaw('service, COUNT(*) as count')
        //     ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
        //     ->whereNotNull('service')
        //     ->groupBy('service')
        //     ->pluck('count', 'service');

        // Status-wise leads chart
        $knownStatuses = ['New', 'Hot', 'Warm', 'Cold', 'Lost', 'Converted'];
        $statusWiseLeads = [];

        // Prepare all dates in the selected month
        $allDatesRange = collect();
        $current = $startOfMonth->copy();
        while ($current <= $endOfMonth) {
            $allDatesRange->put($current->format('Y-m-d'), 0);
            $current->addDay();
        }

        // Handle "New" (unrecognized or NULL status)
        $newStatusData = Contact::selectRaw("DATE(created_at) as date, COUNT(*) as count")
            ->where(function ($q) use ($knownStatuses) {
                $q->whereNotIn('status', $knownStatuses)
                    ->orWhereNull('status');
            })
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->pluck('count', 'date');

        $statusWiseLeads[] = [
            'name' => 'New',
            'data' => array_values($allDatesRange->map(fn($_, $date) => $newStatusData->get($date, 0))->toArray())
        ];

        // Loop for known statuses (excluding "New")
        foreach (array_diff($knownStatuses, ['New']) as $status) {
            $statusData = Contact::selectRaw("DATE(created_at) as date, COUNT(*) as count")
                ->where('status', $status)
                ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->groupBy('date')
                ->orderBy('date')
                ->get()
                ->pluck('count', 'date');

            $statusWiseLeads[] = [
                'name' => ucfirst($status),
                'data' => array_values($allDatesRange->map(fn($_, $date) => $statusData->get($date, 0))->toArray())
            ];
        }

        // Chart x-axis labels
        $chartDates = $allDatesRange->keys()->map(fn($date) => Carbon::parse($date)->format('M d'))->toArray();

        return view('admin/Pages/Contact/ContactList', compact(
            'contactLists',
            'leads',
            'totalOrganicLeads',
            'totalOrganicLeadsThisMonth',
            'totalAdLeads',
            'totalAdLeadsThisMonth',
            'statusWiseLeads',
            'chartDates',
            'services'
        ));
    }


    public function editLead($id)
    {
        $lead = Contact::findOrFail($id);
        return view('admin/Pages/Contact/EditContactLead', compact('lead'));
    }
    public function updateLead(Request $request, $id)
    {
        $lead = Contact::findOrFail($id);

        $request->validate([
            'status' => 'required|in:New,Hot,Warm,Cold,Lost,Converted',
        ]);

        $lead->update($request->only([
            'status',
        ]));

        return redirect()->route('contactList')->with('success', 'Lead updated successfully.');
    }
    // Delete blog
    public function deleteLead(Contact $lead)
    {
        $lead->delete();
        return redirect()->route('listLead')->with('success', 'Lead deleted successfully!');
    }
}
