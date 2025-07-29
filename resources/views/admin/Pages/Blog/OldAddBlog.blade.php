@extends('admin.layout.app')
@section("customCSSAndJS")
<!-- Load Summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

@endsection
@section('page-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Blog</h6>
                    <form action="{{ route('blogStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea id="summernote" name="content"></textarea>
                            <script>
                                $('#summernote').summernote({
                                    height: 100
                                });
                            </script>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Meta Title</label>
                            <input type="text" class="form-control" name="meta_title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Meta Description</label>
                            <input type="text" class="form-control" name="meta_description">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tags (comma-separated)</label>
                            <input type="text" class="form-control" name="tags">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-control" name="cat_id" required>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Display on Home</label>
                            <select class="form-control" name="display_on_home">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                            <option value="s_act">Active</option>
                            <option value="s_deact">Deactive</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection