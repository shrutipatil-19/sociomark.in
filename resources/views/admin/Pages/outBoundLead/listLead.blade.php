@extends('admin.layout.app')
@section('custom-style')
<style>
    .bg-orange {
        background-color: orange !important;
    }
</style>
@endsection
@section('page-content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-title">OutBound Lead Table</h6>
                        </div>
                        <div class="col-6 d-flex justify-content-end"> <a href="{{ route('addlead') }}" class="btn btn-success">Add Lead</a></div>
                    </div>


                    <!-- <p class="text-secondary mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> -->
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Designation</th>
                                    <th>Status</th>
                                    <th>Service</th>
                                    <th>Industry</th>
                                    <th>First Followup Date</th>
                                    <th>Notes</th>
                                    <th>Second Followup Date</th>
                                    <th>Notes</th>
                                    <th>Third Follow Up Date</th>
                                    <th>Notes</th>
                                    <th>Assign To</th> <!-- Changed from <td> to <th> -->
                                    <th>Budget</th> <!-- Changed from <td> to <th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($listLeads as $listLead)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $listLead->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $listLead->name }}</td>
                                    <td>{{ $listLead->company_name }}</td>
                                    <td>{{ $listLead->email }}</td>
                                    <td>{{ $listLead->phone }}</td>
                                    <td>{{ $listLead->designation }}</td>
                                    <td>
                                        @if ($listLead->status == 'New')
                                        <span class="badge bg-warning text-white">New</span>
                                        @elseif ($listLead->status == 'Hot')
                                        <span class="badge bg-danger">Hot</span>
                                        @elseif ($listLead->status == 'Warm')
                                        <span class="badge bg-orange text-white">Warm</span>
                                        @elseif ($listLead->status == 'Cold')
                                        <span class="badge bg-primary">Cold</span>
                                        @elseif ($listLead->status == 'Lost')
                                        <span class="badge bg-info">Lost</span>
                                        @elseif ($listLead->status == 'Converted')
                                        <span class="badge bg-success">Converted</span>
                                        @else
                                        <span class="badge bg-secondary">Unknown</span>
                                        @endif
                                    </td>
                                    <td>{{ $listLead->service }}</td>
                                    <td>{{ $listLead->industry }}</td>
                                    <td>{{ $listLead->first_contact_date }}</td>
                                    <td>{{ $listLead->notes }}</td>
                                    <td>{{ $listLead->second_followup_date }}</td>
                                    <td>{{ $listLead->notes2 }}</td>
                                    <td>{{ $listLead->third_follow_up_date }}</td>
                                    <td>{{ $listLead->notes3 }}</td>
                                    <td>{{ $listLead->assigned_to }}</td>
                                    <td>{{ $listLead->budget }}</td>
                                    <td>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('editLead', $listLead->id) }}" style="margin-right: 8px;">
                                            <i data-feather="edit"></i>
                                        </a>

                                        <!-- Delete Icon as a Form -->
                                        <form action="{{ route('deleteLead', $listLead->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this blog?')) this.closest('form').submit();">
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

    <div class="row mt-4">
        <form method="GET" action="{{ route('listLead') }}" class="mb-3">
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
                    <h6 class="card-title">Lead Trend</h6>
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
                                <h6 class="card-title mb-0">Total OutBound Leads</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $listLeads->count() }}</h3>
                                    <div class="d-flex align-items-baseline">
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
                                <h6 class="card-title mb-0">Total Outbound in This Month</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $totalOutboundThisMonth }}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Conversion</h6>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">{{ $convertedOutBound }}</h3>
                                    <div class="d-flex align-items-baseline">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

@section('custom-js')
    <!-- Load ApexCharts library FIRST -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Pass leads to JS -->
    <script>
        const leadsData = @json($leads);
    </script>

    <!-- Then initialize the chart -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dates = leadsData.map(item => item.date);
            const totalLeads = leadsData.map(item => parseInt(item.total_leads));

            var options = {
                chart: {
                    type: 'area',
                    height: 350,
                    toolbar: {
                        show: false
                    }
                },
                series: [{
                    name: 'Leads',
                    data: totalLeads
                }],
                xaxis: {
                    categories: dates,
                    labels: {
                        rotate: -45
                    }
                },
                colors: ['#008ffb'],
                stroke: {
                    curve: 'smooth'
                },
                tooltip: {
                    x: {
                        format: 'yyyy-MM-dd'
                    }
                }
            };

            new ApexCharts(document.querySelector("#apexArea"), options).render();
        });

          // pie service
          const serviceCounts = @json($serviceCounts);
        const serviceLabels = Object.keys(serviceCounts);
        const serviceData = Object.values(serviceCounts);

        document.addEventListener("DOMContentLoaded", function() {
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
            colors: ['#ffc107', '#ff4c51', '#ff9800', '#03a9f4','#66d1d1','#00c292'], // Custom line colors per series
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
@endsection
