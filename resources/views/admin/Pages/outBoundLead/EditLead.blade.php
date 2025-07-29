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
    <form action="{{ route('updateLead', $lead->id)}}" method="post" enctype="multipart/form-data">
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
                                <input type="text" name="name" class="form-control" value="{{ old('name', $lead->name) }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $lead->company_name) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ old('email', $lead->email) }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $lead->phone) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">LinkeDin</label>
                                <input type="text" name="linkedin_url" class="form-control" value="{{ old('linkdin', $lead->linkdin) }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Website URL</label>
                                <input type="text" name="website_url" class="form-control" value="{{ old('website_url', $lead->wesite_url) }}">
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

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <!-- <h6 class="card-title">Add Lead</h6> -->
                        <div class="row mb-3">
                            <div class="col">
                                <label>Industry</label>
                                <!-- <input type="text" name="industry" class="form-control" > -->
                                @php
                                $industry = old('industry', $lead->industry);
                                @endphp
                                <select class="js-example-basic-single form-select" data-width="100%" name="industry">
                                    <option value="">Choose An Industry</option>
                                    @foreach(['Educaion', 'Healthcare', 'FMCG', 'New & Media', 'Real Estate', 'Logistics', 'Fashion & Lifestyle', 'Gaming', 'Home & Interior', 'Automobile', 'Government Bodies'] as $option)
                                    <option value="{{ $option }}" {{ $industry == $option ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-6">
                            <label>Service</label>
                            @php
                                $service = old('service', $lead->service);
                                @endphp
                                <select class="js-example-basic-single form-select" data-width="100%" name="service">
                                    <option value="">Choose An service</option>
                                    @foreach(['Search Engine Optimization', 'Website Development', 'Social Media', 'Digital Marketing', 'Content Marketing', 'Performance Marketing', 'Photography & Video Production'] as $option)
                                    <option value="{{ $option }}" {{ $service == $option ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control" value="{{ old('location', $lead->location) }}">
                            </div>
                            <div class="col-md-6">
                                <label>Source</label>
                                <input type="text" name="source" class="form-control" value="{{ old('source', $lead->source) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h6 class="card-title">Inputs</h6> -->

                        <div class="row mb-3">
                            <div class="col">
                                <label for="first_contact_date">First FollowUp Date</label>
                                <input type="date" name="first_contact_date" id="first_contact_date" class="form-control" value="{{ old('first_contact_date', $lead->first_contact_date) }}">
                            </div>
                            <div class="col-6">
                                <label>Notes</label>
                                <!-- <input type="text" name="notes" class="form-control" > -->
                                <input class="form-control" maxlength="100" rows="8" name="notes" id="defaultconfig-3" type="text" placeholder="Type Something.." value="{{ old('notes', $lead->notes) }}">
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="second_followup_date">Second FollowUp Date</label>
                                <input type="date" name="second_followup_date" id="second_followup_date" class="form-control" value="{{ old('second_followup_date', $lead->second_followup_date) }}">
                            </div>
                            <div class="col-6">
                                <label>Notes</label>
                                <input class="form-control" maxlength="100" name="notes2" id="defaultconfig-2" type="text" placeholder="Type Something.." value="{{ old('notes2', $lead->notes2) }}">
                            </div>

                        </div>
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="col">
                                    <label>Third FollowUp Date</label>
                                    <input type="date" name="third_follow_up_date" id="third_follow_up_date" class="form-control" value="{{ old('third_follow_up_date', $lead->third_follow_up_date) }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <label>Notes</label>
                                <input class="form-control" maxlength="100" name="notes3" id="defaultconfig-2" type="text" placeholder="Type Something.." value="{{ old('notes3', $lead->notes3) }}">

                                </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Assigned To</label>
                                <input type="text" name="assigned_to" class="form-control" value="{{ old('assigned_to', $lead->assigned_to) }}">

                            </div>

                            <div class="col-6">
                                <label class="form-label" for="budget">Marketing Budget</label>
                                <input type="text" name="budget" class="form-control" value="{{ old('budget', $lead->budget) }}">

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