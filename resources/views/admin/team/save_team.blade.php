@extends('layouts.admin_layout.master')

@section('content')
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
                                            <h3 class="card-tile mb-0">Employee information</h3>
                                        </div>
                                        <div class="card-body">
                                            <form id="teamForm" action="{{ route('admin.add.update.team') }}"
                                                method="POST" class="" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $team->id ?? null }}"
                                                    id="update_id">

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="name" id="name"
                                                            class="form-control" value="{{ $team->name ?? '' }}"
                                                            placeholder="Enter the name">
                                                        <small class="text-danger error-text name_error"></small>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Phone <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="phone" id="phone"
                                                            class="form-control" value="{{ $team->phone ?? '' }}"
                                                            placeholder="Enter the phone number">
                                                        <small class="text-danger error-text phone_error"></small>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Email </label>
                                                        <input type="text" name="email" id="email"
                                                            class="form-control" value="{{ $team->email ?? '' }}"
                                                            placeholder="Enter the email">
                                                        <small class="text-danger error-text email_error"></small>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Designation <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="designation" id="designation"
                                                            class="form-control" value="{{ $team->designation ?? '' }}"
                                                            placeholder="Enter the designation">
                                                        <small class="text-danger error-text designation_error"></small>
                                                    </div>

                                                    <!-- DESCRIPTION -->
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Summary</label>
                                                        <textarea name="summary" id="summary" class="form-control" rows="4" style="resize: none">{{ $team->summary ?? '' }}</textarea>
                                                        <small class="text-danger error-text summary_error"></small>
                                                    </div>

                                                    <!-- IMAGE -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Image </label>
                                                        <input type="file" name="image" id="image"
                                                            class="form-control">
                                                        <small class="text-danger d-block">Max size: 600 KB</small>
                                                        <small class="text-danger error-text image_error"></small>
                                                    </div>

                                                    <!-- STATUS -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" id="status" class="form-select">
                                                            <option value="1" {{ $team->status ? 'selected' : '' }}>
                                                                Active</option>
                                                            <option value="0" {{ !$team->status ? 'selected' : '' }}>
                                                                Inactive</option>
                                                        </select>
                                                        <small class="text-danger error-text status_error"></small>
                                                    </div>
                                                </div>
                                                <div class="text-end mt-3">
                                                    <button type="submit" class="btn btn-primary px-4">Save
                                                        Employee</button>
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
    <script>
        $(document).ready(function() {
            // 🔹 Clear errors when typing
            $('input, select, textarea').on('input change', function() {
                let field = $(this).attr('name');
                $('.' + field + '_error').text('');
            });
            // 🔹 Submit Form via AJAX
            $("#teamForm").on('submit', function(e) {
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
                            $("#teamForm")[0].reset();
                            setTimeout(function() {
                                window.location.href = "{{ route('admin.teams') }}";
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
                            toastr.error("Something went wrong!, Please try again.");
                        }
                    }
                });
            });

        });
    </script>
@endsection
