@extends('admin.layout.app')

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

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Add Blog</h6>

                        <div class="mb-3">
                            <label>Blog Card Name</label>
                            <input type="text" name="card_title" class="form-control" required value="{{ old('card_title', $blog->card_title) }}">
                        </div>


                        <div class="mb-3">
                            <label>Blog Name</label>
                            <input type="text" name="title" class="form-control" required value="{{ old('title', $blog->title) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea id="summernote" name="content">{{ old('content', $blog->content) }}</textarea>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Horizontal Form</h6>


                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div>

                                <div class="form-check form-check-inline">

                                    <input type="radio" class="form-check-input" name="status" id="active" value="active" {{ old('status', $blog->status) == 'active' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="status" id="inactive" value="inactive" {{ old('status', $blog->status) == 'inactive' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inactive">
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Tags</label>
                            <select name="tags[]" class="form-control select2" multiple>
                                @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" {{ (collect(old('tags', $blog->tags))->contains($tag->id)) ? 'selected' : '' }}>{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            @error('tags')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Categories</label>
                            <select name="categories[]" class="form-control select2" multiple>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ (collect(old('categories', $blog->categories))->contains($category->id)) ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Display On Home</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="display_on_home" class="form-check-input" id="display_on_home" value="1" {{ old('display_on_home', $blog->display_on_home) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="display_on_home">
                                        Display on Home
                                </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Inputs</h6>
                        <div class="mb-3">
                            <label class="form-label">SEO Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" id="title" onkeyup="updateSlug()" value="{{ old('meta_title', $blog->meta_title) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Meta Description</label>
                            <input type="text" class="form-control" name="meta_description" value="{{ old('meta_description', $blog->meta_description) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords', $blog->meta_keywords) }}">
                        </div>
                        <div class="mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $blog->slug) }}">
                        </div>
                        <div class="mb-3">
                            <label>canonicals</label>
                            <input type="url" name="canonicals" id="canonicals" class="form-control" value="{{ old('canonicals', $blog->canonicals) }}">
                        </div>
                        <div class="mb-3">
                            <label>Schema</label>
                            <input type="text" name="blog_schema" id="blog_schema" class="form-control" value="{{ old('blog_schema', $blog->blog_schema) }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Image</h6>
                        <div class="mb-3">
                            <label class="form-label">Images</label>
                            <input type="file" name="images[]" multiple class="form-control">
                        </div>

                        {{-- Add this block below --}}
                        @if (!empty($blog->images))
                        <div class="mt-3">
                            <label>Existing Images</label>
                            <div class="row">
                                @foreach ($blog->images as $image)
                                <div class="col-md-6 mb-2">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Blog Image" class="img-fluid rounded" style="max-height: 150px;">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
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
@endpush
@endsection