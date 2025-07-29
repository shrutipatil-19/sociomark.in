@extends('admin/layout/app')
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
            <li class="breadcrumb-item active" aria-current="page">Second FollowUp OutBound Lead Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-title">Second FollowUp OutBound Lead Table</h6>
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
                                        @elseif ($listLead->status == 'Qualified')
                                        <span class="badge bg-info">Qualified</span>
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

    @endsection