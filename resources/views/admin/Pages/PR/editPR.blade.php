@extends('admin.layout.app')

@section('page-content')
<div class="page-content">

    <!-- <h6 class="card-title">Add PR</h6> -->
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
    <form action="{{ route('prs.update', $pr->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Add PR</h6>

                        <div class="mb-3">
                            <label>PR Card Name</label>
                            <input type="text" name="card_title" class="form-control" required value="{{ old('card_title', $pr->card_title) }}">
                        </div>

                        <div class="mb-3">
                            <label>PR Name</label>
                            <input type="text" name="pr_title" class="form-control" required value="{{ old('pr_title', $pr->pr_title) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea id="summernote" name="description">{{ old('description', $pr->description) }}</textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Horizontal Form</h6>
                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="url" name="link" class="form-control" required value="{{ old('link', $pr->link) }}">
                        </div>
                        <h6 class="card-title">Image</h6>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="img" class="form-control">

                            @if (!empty($pr->img))
                            <div class="mt-2">
                                <p>Current Image:</p>
                                <img src="{{ asset('storage/' . $pr->img) }}" width="100" height="100" style="object-fit: cover;" alt="PR Image">
                            </div>
                            @endif
                        </div>


                        <div class="mb-3">
                            <label for="post_date" class="form-label">Date</label>
                            <input name="post_date" type="date" value="{{ old('date', $pr->post_date) }}">
                        </div>
                        <!-- <div class="mb-3">
                            <label class="form-label">Display On Home</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="display_on_home" class="form-check-input" id="display_on_home" value="1">
                                    <label class="form-check-label" for="display_on_home">
                                        Display on Home
                                </div>
                                </label>
                            </div> -->
                        <!-- </div> -->
                    </div>
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

@push('scripts')
<!-- Load Summernote -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

<!-- Load Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!-- Dropzone CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
<!-- Dropzone JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<script>
    // $(document).ready(function() {
    //     $('#summernote').summernote({
    //         height: 100
    //     });

    //     $('.select2').select2({
    //         tags: true,
    //         tokenSeparators: [',']
    //     });
    // });

    $(document).ready(function() {
        $('#summernote').summernote({
            height: 100
        });

        $('.select2').select2({
            tags: true,
            tokenSeparators: [',']
        });

        // $('.dropify').dropify(); // Initialize Dropify
    });

    Dropzone.autoDiscover = false;

    new Dropzone("#imageDropzone", {
        paramName: "images[]", // Name of the input field
        maxFilesize: 2, // Max file size in MB
        maxFiles: 5, // Maximum number of images
        acceptedFiles: "image/*",
        addRemoveLinks: true
    });
</script>
@endpush
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

@endsection