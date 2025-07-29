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

    <form action="{{ route('storeLead') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Leads</h6>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company_name" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">LinkeDin</label>
                                <input type="text" name="linkedin_url" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Website URL</label>
                                <input type="text" name="website_url" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" class="form-control">
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
                            <div>
                                <div class="row">
                                    <div class="form-check col-6">
                                        <input type="radio" class="form-check-input" name="status" id="New" value="New" checked>
                                        <label class="form-check-label" for="New">
                                            New
                                        </label>
                                    </div>
                                    <div class="form-check col-6">
                                        <input type="radio" class="form-check-input" name="status" id="Hot" value="Hot">
                                        <label class="form-check-label" for="Hot">
                                            Hot
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-check  col-6">
                                        <input type="radio" class="form-check-input" name="status" id="Warm" value="Warm">
                                        <label class="form-check-label" for="Warm">
                                            Warm
                                        </label>
                                    </div>
                                    <div class="form-check  col-6">
                                        <input type="radio" class="form-check-input" name="status" id="Cold" value="Cold">
                                        <label class="form-check-label" for="Cold">
                                            Cold
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-check  col-6">
                                        <input type="radio" class="form-check-input" name="status" id="Lost" value="Lost">
                                        <label class="form-check-label" for="Lost">
                                        Lost
                                        </label>
                                    </div>
                                    <div class="form-check  col-6">
                                        <input type="radio" class="form-check-input" name="status" id="Converted" value="Converted">
                                        <label class="form-check-label" for="Converted">
                                        Converted
                                        </label>
                                    </div>
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
                                <select class="js-example-basic-single form-select" data-width="100%" name="industry">
                                    <option value="">Choose An Industry</option>
                                    <option value="Educaion">Educaion</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="FMCG">FMCG</option>
                                    <option value="New & Media">New & Media</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Logistics">Logistics</option>
                                    <option value="Fashion & Lifestyle">Fashion & Lifestyle</option>
                                    <option value="Gaming">Gaming</option>
                                    <option value="Home & Interior">Home & Interior</option>
                                    <option value="Automobile">Automobile</option>
                                    <option value="Government Bodies">Government Bodies</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="service">Service you want?</label>
                                <select class="form-select" id="service" name="service" required>
                                    <option selected disabled>Choose an option</option>
                                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                                    <option value="Website Development">Website Development</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Content Marketing">Content Marketing</option>
                                    <option value="Performance Marketing">Performance Marketing</option>
                                    <option value="Photography & Video Production">Photography & Video Production</option>
                                </select>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Source</label>
                                <input type="text" name="source" class="form-control">
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
                                <input type="date" name="first_contact_date" id="first_contact_date" class="form-control">
                            </div>
                            <div class="col-6">
                                <label>Notes</label>
                                <!-- <input type="text" name="notes" class="form-control" > -->
                                <input class="form-control" maxlength="100" rows="8" name="notes" id="defaultconfig-3" type="text" placeholder="Type Something..">
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="second_followup_date">Second FollowUp Date</label>
                                <input type="date" name="second_followup_date" id="second_followup_date" class="form-control">
                            </div>
                            <div class="col-6">
                                <label>Notes</label>
                                <input class="form-control" maxlength="100" name="notes2" id="defaultconfig-2" type="text" placeholder="Type Something..">
                            </div>

                        </div>
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="col">
                                    <label>Third FollowUp Date</label>
                                    <input type="date" name="third_follow_up_date" id="third_follow_up_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <label>Notes</label>
                                <input class="form-control" maxlength="100" name="notes3" id="defaultconfig-2" type="text" placeholder="Type Something..">

                                </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Assigned To</label>
                                <input type="text" name="assigned_to" class="form-control">
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="budget">Marketing Budget</label>
                                <input type="text" name="budget" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-success">Submit</button>
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
    $(document).ready(function() {
        $('#notes2').summernote({
            height: 100
        });

        $('.select2').select2({
            tags: true,
            tokenSeparators: [',']
        });

        // $('.dropify').dropify(); // Initialize Dropify
    });
    $(document).ready(function() {
        $('#notes3').summernote({
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