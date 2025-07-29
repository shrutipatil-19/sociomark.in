@extends('admin.layout.app')

@section('page-content')
<div class="page-content">

    {{-- Success Message --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Job</h6>

                        <div class="mb-3">
                            <label>Job Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Job Description</label>
                            <input type="text" name="description" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Compensation</label>
                            <textarea name="compensation" class="form-control" rows="2" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Responsibilities (one per line)</label>
                            <textarea name="responsibilities" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Requirements (one per line)</label>
                            <textarea name="requirements" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Target Services (one per line)</label>
                            <textarea name="target_services" class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Small Details</h6>

                        <div class="mb-3">
                            <label>Role Overview</label>
                            <textarea name="role_overview" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Location</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Industry</label>
                            <input type="text" name="industry" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Experience</label>
                            <input type="text" name="experience" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
