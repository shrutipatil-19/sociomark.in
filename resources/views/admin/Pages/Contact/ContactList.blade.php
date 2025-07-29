@extends('admin.layout.app')

@section('custom-style')
<style>
    .bg-orange {
        background-color: orangered;
    }
</style>
@endsection

@section('page-content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inbound Lead Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Inbound Lead Table</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Service</th>
                                    <th>Budget</th>
                                    <th>About Us</th>
                                    <th>Message</th>
                                    <th>UTM Source</th>
                                    <th>UTM Medium</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactLists as $contactList)
                                <tr>
                                    <td>{{ $contactList->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        @if ($contactList->status == 'New')
                                        <span class="badge bg-warning text-white">New</span>
                                        @elseif ($contactList->status == 'Hot')
                                        <span class="badge bg-danger">Hot</span>
                                        @elseif ($contactList->status == 'Warm')
                                        <span class="badge bg-orange text-white">Warm</span>
                                        @elseif ($contactList->status == 'Cold')
                                        <span class="badge bg-primary">Cold</span>
                                        @elseif ($contactList->status == 'Lost')
                                        <span class="badge bg-info">Lost</span>
                                        @elseif ($contactList->status == 'Converted')
                                        <span class="badge bg-success">Converted</span>
                                        @else
                                        <span class="badge bg-warning text-white">New</span>
                                        @endif
                                    </td>
                                    <td>{{ $contactList->name }}</td>
                                    <td>{{ $contactList->email }}</td>
                                    <td>{{ $contactList->phone }}</td>
                                    <td>{{ $contactList->service }}</td>
                                    <td>{{ $contactList->budget }}</td>
                                    <td>{{ $contactList->aboutUs }}</td>
                                    <td>{{ $contactList->messageforus }}</td>
                                    <td>{{ $contactList->utm_source }}</td>
                                    <td>{{ $contactList->utm_medium }}</td>

                                    <td>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('ineditLead', $contactList->id) }}" style="margin-right: 8px;">
                                            <i data-feather="edit"></i>
                                        </a>

                                        <!-- Delete Icon as a Form -->
                                        <form action="{{ route('indeleteLead', $contactList->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this Lead?')) this.closest('form').submit();">
                                                <i data-feather="trash-2" style="color: red;"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Area Chart -->
    <div class="row mt-4">
        <form method="GET" action="{{ route('contactList') }}" class="mb-3">
            <div class="row g-2 align-items-center">
                <div class="col-auto">
                    <label for="month" class="col-form-label">Select Month:</label>
                </div>
                <div class="col-auto">
                    <input type="month" id="month" name="month" class="form-control"
                        value="{{ request('month', now()->format('Y-m')) }}">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <div class="col-xl-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Lead Trend - Organic vs Ad</h6>
                    <div id="apexArea"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Leads by Service</h6>
                    <div id="apexPie"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Line Chart by Status</h6>
                    <div id="apexLine"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Total Organic Leads</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $totalOrganicLeads }}</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Total Organic Leads in This Month</h6>
                            </div>
                            <div class="row">

                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $totalOrganicLeadsThisMonth }}</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Total Ads Leads</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $totalAdLeads }}</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+2.8%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Total Ads Leads in This Month</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $totalAdLeadsThisMonth }}</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+2.8%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Total Ads Leads</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">24</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Total Ads Leads in This Month</h6>
                            </div>
                            <div class="row">

                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">25</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Visiter This Day</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">56</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+2.8%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

    <!-- Pass leads to JS -->
    <script>
        const leadsData = @json($leads);
    </script>

    <!-- ApexChart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dates = leadsData.map(item => item.date);
            const adLeads = leadsData.map(item => parseInt(item.ad_leads));
            const organicLeads = leadsData.map(item => parseInt(item.organic_leads));

            var options = {
                chart: {
                    type: 'area',
                    height: 350,
                    toolbar: {
                        show: false
                    }
                },
                series: [{
                        name: 'Ad Leads',
                        data: adLeads
                    },
                    {
                        name: 'Organic Leads',
                        data: organicLeads
                    }
                ],
                xaxis: {
                    categories: dates
                },
                colors: ['#ff4c51', '#00c292'],
                stroke: {
                    curve: 'smooth'
                }
            };

            new ApexCharts(document.querySelector("#apexArea"), options).render();
        });
        // pie service
        const rawServiceStrings = @json($services); // e.g., ["SEO, Web Dev", "SEO", "Social Media, SEO"]

    // Step 1: Flatten the service selections
    const allServices = [];
    rawServiceStrings.forEach(entry => {
        const services = entry.split(',');
        services.forEach(service => {
            const cleaned = service.trim();
            if (cleaned) allServices.push(cleaned);
        });
    });

    // Step 2: Count occurrences
    const serviceCounts = {};
    allServices.forEach(service => {
        serviceCounts[service] = (serviceCounts[service] || 0) + 1;
    });

    const serviceLabels = Object.keys(serviceCounts);
    const serviceData = Object.values(serviceCounts);

    document.addEventListener("DOMContentLoaded", function () {
        var pieOptions = {
            chart: {
                type: 'pie',
                height: 350
            },
            labels: serviceLabels,
            series: serviceData,
            colors: ['#ff4c51', '#00c292', '#ff9800', '#03a9f4', '#9c27b0', '#607d8b', '#ffc107']
        };

        new ApexCharts(document.querySelector("#apexPie"), pieOptions).render();
    });
        // chart status
        var options = {
            chart: {
                type: 'line', // Specifies a line chart
                height: 350 // Height of the chart in pixels
            },
            series: @json($statusWiseLeads), // Dynamic series data from Laravel (e.g. ['New', 'Hot', 'Unknown'])
            xaxis: {
                categories: @json($chartDates) // Dynamic x-axis labels (e.g. ['2025-05-01', '2025-05-02'])
            },
            colors: ['#ffc107', '#dc3545', '#fd7e14', '#0d6efd', '#9e9e9e','#00c292'], // Custom line colors per series
            stroke: {
                width: 2 // Line width
            },
            markers: {
                size: 4 // Size of points on the lines
            }
        };

        var chart = new ApexCharts(document.querySelector("#apexLine"), options);
        chart.render(); // Renders the chart in the element with ID 'apexLine'
    </script>

</div>
@endsection