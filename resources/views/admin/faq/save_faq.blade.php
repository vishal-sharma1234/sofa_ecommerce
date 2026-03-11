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
                                    <div class="mb-6">
                                        <div class="card-header">
                                            <h3 class="card-tile mb-0">FAQ information</h3>
                                        </div>
                                        <div class="card-body">
                                            <form id="faqForm" action="{{ route('admin.add.update.faq') }}" method="POST"
                                                class="" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $faq->id ?? null }}" id="update_id">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Question<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="question" id="question"
                                                            class="form-control" value="{{ $faq->question ?? '' }}"
                                                            placeholder="Enter the question">
                                                        <small class="text-danger error-text question_error"></small>
                                                    </div>
                                                    <!-- DESCRIPTION -->
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Answer<span class="text-danger">*</span></label>
                                                        <textarea name="answer" id="answer" class="form-control" rows="4" style="resize: none">{{ $faq->answer ?? '' }}</textarea>
                                                        <small class="text-danger error-text answer_error"></small>
                                                    </div>
                                                    <!-- STATUS -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" id="status" class="form-select">
                                                            <option value="1" {{ $faq->status ? 'selected' : '' }}>
                                                                Active</option>
                                                            <option value="0" {{ !$faq->status ? 'selected' : '' }}>
                                                                Inactive</option>
                                                        </select>
                                                        <small class="text-danger error-text status_error"></small>
                                                    </div>
                                                </div>
                                                <div class="text-end mt-3">
                                                    <button type="submit" class="btn btn-primary px-4">Save
                                                        Faq</button>
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
            $("#faqForm").on('submit', function(e) {
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
                            $("#faqForm")[0].reset();
                            setTimeout(function() {
                                window.location.href = "{{ route('admin.faqs') }}";
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
