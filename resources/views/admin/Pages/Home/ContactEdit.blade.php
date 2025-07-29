@extends('admin.layout.app')
@section("customCSSAndJS")
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


@endsection

@section('page-content')
<div class="page-content">

    <!-- <h6 class="card-title">Add Blog</h6> -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('inupdateLead', $lead->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Leads</h6>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $lead->name) }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ old('email', $lead->email) }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $lead->phone) }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label>Service</label>
                                <!-- <input type="text" name="industry" class="form-control" > -->
                                @php
                                $service = old('service', $lead->service);
                                @endphp
                                <select class="js-example-basic-single form-select" data-width="100%" name="industry" disabled>
                                    <option value="">Choose An service</option>
                                    @foreach(['Search Engine Optimization', 'Website Development', 'Social Media', 'Digital Marketing', 'Content Marketing', 'Performance Marketing', 'Photography & Video Production'] as $option)
                                    <option value="{{ $option }}" {{ $service == $option ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Budget</label>
                                <!-- <input type="text" name="industry" class="form-control" > -->
                                @php
                                $budget = old('service', $lead->budget);
                                @endphp
                                <select class="js-example-basic-single form-select" data-width="100%" name="industry" disabled>
                                    <option value="">Choose An budget</option>
                                    @foreach(['Under ₹ 25000', '₹ 25,000 - ₹ 1,00,000', 'Above ₹ 1,00,000', 'Have not Estimated Yet'] as $option)
                                    <option value="{{ $option }}" {{ $budget == $option ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Hoe did you here about us</label>
                                <!-- <input type="text" name="industry" class="form-control" > -->
                                @php
                                $aboutUs = old('service', $lead->aboutUs);
                                @endphp
                                <select class="js-example-basic-single form-select" data-width="100%" name="industry" disabled>
                                    <option value="">Choose</option>
                                    @foreach(['Through Search
                                    Engines(Google, Bing etc.)', 'Social Media(Facebook,
                                    Instagram etc.)', 'Word of Mouth/ Referral', 'Other'] as $option)
                                    <option value="{{ $option }}" {{ $aboutUs == $option ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="messageforus">Your Message</label>
                                <textarea class="form-control" id="messageforus" placeholder="Enter your message" rows="4" name="messageforus" disabled>{{ old('messageforus', $lead->messageforus) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="row">
                                @php
                                $status = old('status', $lead->status);
                                @endphp
                                <div class="form-check col-6">
                                    <input type="radio" class="form-check-input" name="status" id="New" value="New" {{ $status == 'New' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="New">New</label>
                                </div>
                                <div class="form-check col-6">
                                    <input type="radio" class="form-check-input" name="status" id="Hot" value="Hot" {{ $status == 'Hot' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="Hot">Hot</label>
                                </div>
                                <div class="form-check col-6 mt-2">
                                    <input type="radio" class="form-check-input" name="status" id="Warm" value="Warm" {{ $status == 'Warm' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="Warm">Warm</label>
                                </div>
                                <div class="form-check col-6 mt-2">
                                    <input type="radio" class="form-check-input" name="status" id="Cold" value="Cold" {{ $status == 'Cold' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="Cold">Cold</label>
                                </div>
                                <div class="form-check col-6 mt-2">
                                    <input type="radio" class="form-check-input" name="status" id="Lost" value="Lost" {{ $status == 'Lost' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="Lost">Lost</label>
                                </div>
                                <div class="form-check col-6 mt-2">
                                    <input type="radio" class="form-check-input" name="status" id="Converted" value="Converted" {{ $status == 'Converted' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="Converted">Converted</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

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

    // slug
    function slugify(text) {
        return text
            .toString()
            .trim() // Trim leading and trailing whitespace first
            .replace(/^['"]+|['"]+$/g, "") // Trim quotes
            .replace(/,/g, '-') // Replace commas with hyphens
            .toLowerCase()
            .replace(/&/g, "and")
            .replace(/\s+/g, "-") // Replace spaces with hyphens
            .replace(/--+/g, "-") // Remove multiple hyphens
            .replace(/^-+/, "") // Remove leading hyphens
            .replace(/-+$/, ""); // Remove trailing hyphens
    }

    function updateSlug() {
        let categoryName = document.getElementById("title").value;
        let slugField = document.getElementById("slug");

        // If user hasn't manually changed the slug, auto-update it
        if (!slugField.dataset.edited) {
            slugField.value = slugify(categoryName);
        }
    }

    document.getElementById("slug").addEventListener("input", function() {
        // Mark slug field as manually edited when the user types in it
        this.dataset.edited = true;
    });
</script>
@endsection