@extends('admin.layout.app')

@section('page-content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Job Application</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Job Application</h6>
                    <!-- <p class="text-secondary mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> -->
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>CV</th>
                                    <th>Profile Links</th>
                                     <th>Profile</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobLeads as $job)
                                <tr>
                                    <td>{{ $job->id }}</td>
                                    <td>{{ $job->name }}</td>
                                    <td>{{ $job->email }}</td>
                                    <td>{{ $job->phone }}</td>
                                    <td>
                                        <a href="{{ url('storage/app/public/' . ($job->cv)) }}" target="_blank" class="btn btn-sm btn-primary">
                                            View CV
                                        </a>
                                    </td>

                                    <td>{{ $job->plinks }}</td>
                                    <td>{{ $job->page_url }}</td>
                                    <td>{{ $job->created_at->format('Y-m-d') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection