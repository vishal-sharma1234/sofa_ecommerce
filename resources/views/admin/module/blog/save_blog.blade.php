@extends('layouts.admin_layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('backend/vendor/libs/tagify/tagify.css') }}">

    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-ecommerce">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <!-- Blog Information -->
                                    <div class="mb-6">
                                        <div class="card-header">
                                            <h3 class="card-tile mb-0">Blog information</h3>
                                        </div>
                                        <div class="card-body">
                                            <form id="blogForm" action="{{ route('admin.add.update.blog') }}"
                                                method="POST" class="" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $blog->id ?? null }}"
                                                    id="update_id">

                                                <div class="row">

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Blog Title <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="title" id="title"
                                                            class="form-control" value="{{ $blog->title ?? '' }}"
                                                            placeholder="Enter blog title">
                                                        <small class="text-danger error-text title_error"></small>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Blog Sub Title <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="sub_title" id="sub_title"
                                                            class="form-control" value="{{ $blog->sub_title ?? '' }}"
                                                            placeholder="Enter blog sub title">
                                                        <small class="text-danger error-text sub_title_error"></small>
                                                    </div>

                                                    <!-- CATEGORY -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Category <span
                                                                class="text-danger">*</span></label>
                                                        <select name="category_id" id="category_id" class="form-select">
                                                            <option value="">Select Category</option>
                                                            @foreach ($categories as $cat)
                                                                <option value="{{ $cat->id }}"
                                                                    {{ isset($blog->category_id) ? ($blog->category_id == $cat->id ? 'selected' : '') : '' }}>
                                                                    {{ $cat->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">Please Select Category</div>
                                                        <small class="text-danger error-text category_id_error"></small>
                                                    </div>

                                                    <!-- IMAGE -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Image <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="image" id="image"
                                                            class="form-control">
                                                        <small class="text-danger d-block">Max size: 600 KB</small>
                                                        <small class="text-danger error-text image_error"></small>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Meta Title </label>
                                                        <input type="text" name="meta_title" id="meta_title"
                                                            class="form-control" value="{{ $blog->meta_title ?? '' }}"
                                                            placeholder="Enter meta title">
                                                        {{-- <small class="text-danger error-text title_error"></small> --}}
                                                    </div>

                                                    <!-- DESCRIPTION -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Short Description</label>
                                                        <textarea name="short_description" id="short_description" class="form-control" rows="4">{{ $blog->short_description ?? '' }}</textarea>
                                                        {{-- <small class="text-danger error-text description_error"></small> --}}
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Meta Description</label>
                                                        <textarea name="meta_description" id="meta_description" class="form-control" rows="4">{{ $blog->meta_description ?? '' }}</textarea>
                                                        {{-- <small class="text-danger error-text description_error"></small> --}}
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Meta Keywords</label>

                                                        <input id="TagifyBasic" class="form-control" name="meta_keywords"
                                                            value='@json(old(
                                                                    'meta_keywords',
                                                                    isset($blog->meta_keywords) ? collect($blog->meta_keywords)->map(fn($k) => ['value' => $k]) : []))'
                                                            placeholder="Type something then press enter key">
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="description" id="elm1" class="form-control" rows="4">{{ $blog->description ?? '' }}</textarea>
                                                        <small class="text-danger error-text description_error"></small>
                                                    </div>

                                                    <!-- STATUS -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" id="status" class="form-select">
                                                            <option value="1" {{ $blog->status ? 'selected' : '' }}>
                                                                Active</option>
                                                            <option value="0" {{ !$blog->status ? 'selected' : '' }}>
                                                                Inactive</option>
                                                        </select>
                                                        <small class="text-danger error-text status_error"></small>
                                                    </div>
                                                </div>
                                                <div class="text-end mt-3">
                                                    <button type="submit" class="btn btn-primary px-4">Save
                                                        Blog</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('backend/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('backend/js/forms-tagify.js') }}"></script>
    <script src="{{ asset('backend/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/js/ckeditor/editor.js') }}"></script>
    <script>
        $(document).ready(function() {

            // 🔹 Clear errors when typing
            $('input, select, textarea').on('input change', function() {
                let field = $(this).attr('name');
                $('.' + field + '_error').text('');
            });

            // 🔹 Submit Form via AJAX
            $("#blogForm").on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,

                    beforeSend: function() {
                        $(".error-text").text("");
                    },

                    success: function(response) {


                        if (response.success) {

                            toastr.success(response.message);

                            $("#blogForm")[0].reset();

                            setTimeout(function() {
                                window.location.href = "{{ route('admin.blogs') }}";
                            }, 500);

                        }

                    },

                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;

                            $.each(errors, function(key, value) {
                                $('.' + key + '_error').text(value[
                                    0]);
                            });

                        } else {
                            // Swal.fire("Error!", "Something went wrong!", "error");
                            toastr.error("Something went wrong!, Please try again.");

                        }
                    }
                });
            });

        });
    </script>
@endsection
