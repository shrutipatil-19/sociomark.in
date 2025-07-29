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
                                    <th>Blog Title</th>
                                    <th>Display On Home</th>
                                    <th>Status</th>
                                    <th>Category Id</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->display_on_home }}</td>
                                    <td>{{ $blog->status == 's_act' ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ $blog->category->name ?? 'No Category' }}</td>
                                    <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                                    <td>
                                    <a href="{{ route('editBlog', $blog->id) }}" class="btn btn-primary"><i data-feather="edit"></i></a>
                                        <form action="{{ route('deleteBlog', $blog->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i data-feather="trash-2"></i></button>
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
<!-- 
@foreach($blogs as $blog)
    @if($blog->display_on_home == 'yes')
        <div class="blog-post">
            <h2>{{ $blog->title }}</h2>
            <p>{{ Str::limit($blog->content, 100) }}</p>
        </div>
    @endif
@endforeach -->