@extends('admin.layout.app')

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
                    <h6 class="card-title">Blog Table</h6>
                    <!-- <p class="text-secondary mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> -->
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Blog Card Title</th>
                                    <th>Blog Title</th>
                                    <th>Display On Home</th>
                                    <th>Status</th>
                                   
                                    <th>image</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{{ $blog->card_title }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @if ($blog->display_on_home == 1 )
                                        <i data-feather="check" style="color: green;"></i>
                                        @else
                                        <i data-feather="x" style="color: red;"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($blog->status == 'active')
                                        <i data-feather="zap" style="color: grey;"></i>
                                        @else
                                        <i data-feather="zap-off" style="color: grey;"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @php
                                        $imagefile1 = is_array($blog->imagefile1) ? $blog->imagefile1 : json_decode($blog->imagefile1, true);
                                        @endphp

                                        @if (!empty($imagefile1))
                                        @foreach ($imagefile1 as $image)
                                        <img src="{{ url('storage/app/public/' . $image) }}" width="50" height="50" style="object-fit: cover; margin-right: 5px;" alt="Blog Image">
                                        @endforeach
                                        @else
                                        No Image
                                        @endif

                                    </td>
                                    <td>{{ $blog->created_at }}</td>
                                    <td>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('blogs.edit', $blog->id) }}" style="margin-right: 8px;">
                                            <i data-feather="edit"></i>
                                        </a>

                                        <!-- Delete Icon as a Form -->
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
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

</div>


@endsection