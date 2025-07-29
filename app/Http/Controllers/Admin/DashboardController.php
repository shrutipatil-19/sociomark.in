<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\outboundLead;
use Illuminate\Support\Facades\Log;
// use App\Models\Visit;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        // $contact_leads = Contact::get();
        // $out_bound_lead = outboundLead::get();
        // $now = Carbon::now();

        // // ----- INBOUND (Contact) LEADS -----
        // $currentMonthLeadCount = Contact::whereMonth('created_at', $now->month)
        //     ->whereYear('created_at', $now->year)
        //     ->count();

        // $lastMonth = $now->copy()->subMonth();
        // $lastMonthLeadCount = Contact::whereMonth('created_at', $lastMonth->month)
        //     ->whereYear('created_at', $lastMonth->year)
        //     ->count();

        // $change = 0;
        // if ($lastMonthLeadCount > 0) {
        //     $change = (($currentMonthLeadCount - $lastMonthLeadCount) / $lastMonthLeadCount) * 100;
        // }

        // // ----- OUTBOUND LEADS -----
        // $currentMonthInLeadCount = outboundLead::whereMonth('created_at', $now->month)
        //     ->whereYear('created_at', $now->year)
        //     ->count();

        // $lastMonthOutbound = $now->copy()->subMonth(); // different variable to avoid confusion
        // $lastMonthinLeadCount = outboundLead::whereMonth('created_at', $lastMonthOutbound->month)
        //     ->whereYear('created_at', $lastMonthOutbound->year)
        //     ->count();

        // $inchange = 0;
        // if ($lastMonthinLeadCount > 0) {
        //     $inchange = (($currentMonthInLeadCount - $lastMonthinLeadCount) / $lastMonthinLeadCount) * 100;
        // }

        // // // ----- VISITS -----
        // // $visitsToday = Visit::whereDate('visited_at', Carbon::today())->count();


        // $selectedMonth = $request->input('month', now()->format('Y-m'));
        // $startOfMonth = Carbon::parse($selectedMonth)->startOfMonth();
        // $endOfMonth = Carbon::parse($selectedMonth)->endOfMonth();

        // // Get Inbound Leads from Contact table graph
        // $inbound = Contact::selectRaw("DATE(created_at) as date, COUNT(*) as total")
        //     ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
        //     ->groupBy('date')
        //     ->pluck('total', 'date')
        //     ->toArray();

        // // Get Outbound Leads from OutboundLead table graph
        // $outbound = OutboundLead::selectRaw("DATE(created_at) as date, COUNT(*) as total")
        //     ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
        //     ->groupBy('date')
        //     ->pluck('total', 'date')
        //     ->toArray();

        // // Merge all dates
        // $allDates = collect(array_merge(array_keys($inbound), array_keys($outbound)))
        //     ->unique()
        //     ->sort()
        //     ->values();

        // // Prepare unified lead data
        // $leads = $allDates->map(function ($date) use ($inbound, $outbound) {
        //     return [
        //         'date' => $date,
        //         'inbound_leads' => $inbound[$date] ?? 0,
        //         'outbound_leads' => $outbound[$date] ?? 0,
        //     ];
        // });

        // // convertion of inbound leads 
        // $convertedInBound = Contact::where('status', 'Converted')->count();
        // // $count = $convertedInBound->count();  

        // // convertion of outbound leads 
        // $convertedOutBound = OutboundLead::where('status', 'Converted')->count();
        // // $count = $convertedOutBound->count(); 

        // // only hot lead from inbound & outbound 

        // $hotOutboundLeads = OutboundLead::where('status', 'hot')
        //     ->get()
        //     ->map(function ($lead) {
        //         $lead->type = 'outbound';
        //         return $lead;
        //     });

        // $hotContactLeads = Contact::where('status', 'hot')
        //     ->get()
        //     ->map(function ($lead) {
        //         $lead->type = 'contact';
        //         return $lead;
        //     });

        // $hotLeads = $hotOutboundLeads->merge($hotContactLeads);
        // // blog count
        // $blogs = Blog::COUNT();
        // $display_on_home = Blog::where('display_on_home', "1")->count();
        // $active = Blog::where('status', "active")->count();

        return view("admin/Pages/Home/Dashboard");
    }

    public function show($type, $id)
    {
        $hotOutboundLeads = OutboundLead::where('status', 'hot')
            ->get()
            ->map(function ($lead) {
                $lead->type = 'outbound';
                return $lead;
            });

        $hotContactLeads = Contact::where('status', 'hot')
            ->get()
            ->map(function ($lead) {
                $lead->type = 'contact';
                return $lead;
            });

        $hotLeads = $hotOutboundLeads->merge($hotContactLeads);

        if ($type === 'outbound') {
            $outlead = OutboundLead::findOrFail($id);
            return view('admin/Pages/Home/show', compact('outlead', 'type'));
        } elseif ($type === 'contact') {
            $conlead = Contact::findOrFail($id);
            return view('admin/Pages/Home/Contactshow', compact('conlead', 'type'));
        } else {
            abort(404);
        }
    }

    public function edit($type, $id)
    {
        if ($type === 'outbound') {
            $lead = OutboundLead::findOrFail($id);
            return view('admin/Pages/Home/outEdit', compact('lead', 'type'));
        } elseif ($type === 'contact') {
            $lead = Contact::findOrFail($id);
            return view('admin/Pages/Home/ContactEdit', compact('lead', 'type'));
        } else {
            abort(404);
        }
    }
}
