@extends('layouts.admin_layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('backend/vendor/libs/tagify/tagify.css') }}">

    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-ecommerce">
                            <!-- Add Product -->
                            {{-- <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                                <div class="d-flex flex-column justify-content-center">
                                    <h4 class="mb-1">Add a new Product</h4>
                                    <p class="mb-0">Orders placed across your store</p>
                                </div>
                                <div class="d-flex align-content-center flex-wrap gap-4">
                                    <div class="d-flex gap-4"><button class="btn btn-label-secondary waves-effect"
                                            fdprocessedid="6qwxb8">Discard</button> <button
                                            class="btn btn-label-primary waves-effect" fdprocessedid="7w0rz">Save
                                            draft</button></div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"
                                        fdprocessedid="l7lr2c">Publish product</button>
                                </div>
                            </div> --}}

                            <div class="row">
                                <!-- First column-->
                                <div class="col-12 col-lg-12">
                                    <!-- Product Information -->
                                    <div class="mb-6">
                                        <div class="card-header">
                                            <h3 class="card-tile mb-0">Product information</h3>
                                        </div>
                                        <div class="card-body">
                                            <form id="productForm" action="{{ route('admin.add.update.product') }}"
                                                method="POST" class="" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product->id ?? null }}"
                                                    id="update_id">

                                                <div class="row">

                                                    <!-- PRODUCT NAME -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Product Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="name" id="name"
                                                            class="form-control" value="{{ $product->name ?? '' }}"
                                                            placeholder="Enter product name">
                                                        <small class="text-danger error-text name_error"></small>
                                                    </div>

                                                    <!-- SKU -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">SKU</label>
                                                        <input type="text" name="sku" id="sku"
                                                            class="form-control" value="{{ $product->sku ?? '' }}"
                                                            placeholder="Optional - e.g., PROD123">
                                                        <small class="text-danger error-text sku_error"></small>
                                                    </div>

                                                    <!-- CATEGORY -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Category <span
                                                                class="text-danger">*</span></label>
                                                        <select name="category_id" id="category_id" class="form-select">
                                                            <option value="">Select Category</option>
                                                            @foreach ($categories as $cat)
                                                                <option value="{{ $cat->id }}"
                                                                    {{ isset($product->category_id) ? ($product->category_id == $cat->id ? 'selected' : '') : '' }}>
                                                                    {{ $cat->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">Please Select Category</div>
                                                        <small class="text-danger error-text category_id_error"></small>
                                                    </div>

                                                    <!-- SUB CATEGORY -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Sub Category <span
                                                                class="text-danger">*</span></label>
                                                        <select name="sub_category_id" id="sub_category_id"
                                                            class="form-select">
                                                            <option value="">Select Sub Category</option>
                                                            @foreach ($subCategories as $subCat)
                                                                <option value="{{ $subCat->id }}"
                                                                    {{ isset($product->sub_category_id) ? ($product->sub_category_id == $subCat->id ? 'selected' : '') : '' }}>
                                                                    {{ $subCat->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <small class="text-danger error-text sub_category_id_error"></small>
                                                    </div>

                                                    <!-- PRICE -->
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Current Price <span
                                                                class="text-danger">*</span></label>
                                                        <input type="number" value="{{ $product->current_price ?? '' }}"
                                                            name="current_price" id="current_price" class="form-control"
                                                            placeholder="Enter price">
                                                        <small class="text-danger error-text current_price_error"></small>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Old Price</label>
                                                        <input type="number" name="old_price"
                                                            value="{{ $product->old_price ?? '' }}" id="old_price"
                                                            class="form-control" placeholder="Optional">
                                                        <small class="text-danger error-text old_price_error"></small>
                                                    </div>

                                                    <!-- STOCK -->
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Stock <span
                                                                class="text-danger">*</span></label>
                                                        <input type="number" value="{{ $product->stock ?? '' }}"
                                                            name="stock" id="stock" class="form-control"
                                                            placeholder="0">
                                                        <small class="text-danger error-text stock_error"></small>
                                                    </div>

                                                    <!-- MAIN IMAGE -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Main Image <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" name="main_image" id="main_image"
                                                            class="form-control">
                                                        <small class="text-danger d-block">Max size: 600 KB</small>
                                                        <small class="text-danger error-text main_image_error"></small>
                                                    </div>

                                                    <!-- MULTIPLE IMAGES -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Multiple Images</label>
                                                        <input type="file" name="images[]" multiple id="images"
                                                            class="form-control">
                                                        <small class="text-danger d-block">Max size each: 600 KB</small>
                                                        <small class="text-danger error-text images_error"></small>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label for="select2Primary"
                                                            class="form-label">Primary</label><span
                                                            class="text-danger">*</span>
                                                        <div class="select2-primary">
                                                            <select id="select2Primary" required
                                                                class="select2 form-select" multiple="">
                                                                @if ($colors->count())
                                                                    @foreach ($colors as $color)
                                                                        <option value="{{ $color->id ?? '' }}">
                                                                            {{ $color->name ?? '' }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- MATERIAL -->
                                                    <div class="col-md-8 mb-3">
                                                        <label class="form-label">Material</label>
                                                        <input type="text" name="material" id="TagifyBasic"
                                                            class="form-control"
                                                            placeholder="Type Material Name + Press Enter">
                                                        <small class="text-danger error-text material_error"></small>
                                                    </div>

                                                    <!-- LENGTH / WIDTH / HEIGHT -->
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Length</label>
                                                        <input type="text" value="{{ $product->length ?? '' }}"
                                                            name="length" id="length" class="form-control">
                                                        <small class="text-danger error-text length_error"></small>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Width</label>
                                                        <input type="text" name="width"
                                                            value="{{ $product->width ?? '' }}" id="width"
                                                            class="form-control">
                                                        <small class="text-danger error-text width_error"></small>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Height</label>
                                                        <input type="text" name="height"
                                                            value="{{ $product->height ?? '' }}" id="height"
                                                            class="form-control">
                                                        <small class="text-danger error-text height_error"></small>
                                                    </div>

                                                    <!-- WARRANTY -->
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label">Warranty</label>
                                                        <input type="text" name="warranty"
                                                            value="{{ $product->warranty ?? '' }}" id="warranty"
                                                            class="form-control">
                                                        <small class="text-danger error-text warranty_error"></small>
                                                    </div>



                                                    <!-- META -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Meta Title</label>
                                                        <input type="text" name="meta_title"
                                                            value="{{ $product->meta_title ?? '' }}" id="meta_title"
                                                            class="form-control">
                                                        <small class="text-danger error-text meta_title_error"></small>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Meta Keywords</label>
                                                        <tags
                                                            class="tagify form-control TagifyBasic tagify--noTags tagify--empty"
                                                            tabindex="-1">
                                                            <span contenteditable="" tabindex="0" data-placeholder="​"
                                                                aria-placeholder="" class="tagify__input" role="textbox"
                                                                aria-autocomplete="both" aria-multiline="false"></span>
                                                        </tags>
                                                        <input type="text" name="meta_keywords" id="meta_keywords"
                                                            class="form-control TagifyBasic">
                                                        <small class="text-danger error-text meta_keywords_error"></small>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Meta Description</label>
                                                        <textarea name="meta_description" id="meta_description" class="form-control" rows="2">{{ $product->meta_description ?? '' }}</textarea>
                                                        <small
                                                            class="text-danger error-text meta_description_error"></small>
                                                    </div>

                                                    <!-- SHORT DESCRIPTION -->
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Short Description</label>
                                                        <textarea name="short_description" id="short_description" class="form-control" rows="3">{{ $product->short_description ?? '' }}</textarea>
                                                        <small
                                                            class="text-danger error-text short_description_error"></small>
                                                    </div>

                                                    <!-- DESCRIPTION -->
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="description" id="description" class="form-control" rows="4">{{ $product->description ?? '' }}</textarea>
                                                        <small class="text-danger error-text description_error"></small>
                                                    </div>

                                                    <!-- STATUS -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" id="status" class="form-select">
                                                            <option value="1"
                                                                {{ $product->status ? 'selected' : '' }}>Active</option>
                                                            <option value="0"
                                                                {{ !$product->status ? 'selected' : '' }}>Inactive</option>
                                                        </select>
                                                        <small class="text-danger error-text status_error"></small>
                                                    </div>

                                                </div>

                                                <div class="text-end mt-3">
                                                    <button type="submit" class="btn btn-primary px-4">Save
                                                        Product</button>
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
    <script>
        $('#category_id').on('change', function() {

            let categoryID = $(this).val();
            $("#sub_category_id").html('<option value="">Loading...</option>'); // Show loading

            if (categoryID) {

                $.ajax({
                    url: "{{ route('admin.get.subcategories', '') }}/" + categoryID,
                    type: "GET",
                    success: function(response) {

                        $("#sub_category_id").html('<option value="">Select Sub Category</option>');

                        $.each(response, function(key, subcat) {
                            $("#sub_category_id").append(
                                `<option value="${subcat.id}">${subcat.name}</option>`
                            );
                        });
                    }
                });

            } else {
                $("#sub_category_id").html('<option value="">Select Sub Category</option>');
            }
        });

        $(document).ready(function() {

            // 🔹 Clear errors when typing
            $('input, select, textarea').on('input change', function() {
                let field = $(this).attr('name');
                $('.' + field + '_error').text('');
            });

            // 🔹 Submit Form via AJAX
            $("#productForm").on('submit', function(e) {
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

                            $("#productForm")[0].reset();

                            setTimeout(function() {
                                window.location.href = "{{ route('admin.products') }}";
                            }, 4000);

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
