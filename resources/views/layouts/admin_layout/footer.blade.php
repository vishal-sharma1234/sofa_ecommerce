<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl">
        <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
            <div class="text-body">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script> Made ❤️ by <a href="/" class="footer-link">Vishal Sharma</a>
            </div>
        </div>
    </div>
</footer>
<!-- / Footer -->
<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
<div class="drag-target"></div>
</div>

<!-- DataTables Select Extension -->
{{-- <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script> --}}


<script src="{{ asset('backend/vendor/js/helpers.js') }}"></script>
<script src="{{ asset('backend/vendor/js/template-customizer.js') }}"></script>
<script src="{{ asset('backend/js/config.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('backend/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('backend/vendor/js/menu.js') }}"></script>
<script src="{{ asset('backend/vendor/js/custom.js') }}"></script>
<!-- Vendors JS -->
<script src="{{ asset('backend/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<!-- Flat Picker -->
<script src="{{ asset('backend/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/%40form-validation/form-validation-custom.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>

{{-- <script src="{{ asset('backend/vendor/js/tagify.js') }}"></script> --}}
<script src="{{ asset('backend/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('backend/js/main.js') }}"></script>
{{-- <script src="{{asset('backend/js/forms-pickers.js')}}"></script>     --}}

<!-- Bootstrap toastr -->
<script src="{{ asset('backend/vendor/libs/toastr/toastr.js') }}"></script>
<!-- Sweet Alert -->
<script src="{{ asset('backend/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<!-- Page JS -->
<script src="{{ asset('backend/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('backend/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('backend/js/pages-account-settings-account.js') }}"></script>
<script src="{{ asset('backend/js/form-layouts.js') }}"></script>

<script>
    @if (Session::has('message'))
        toastr.success('{{ Session::get('message') }}');
    @endif

    @if (Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
    @endif

    @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
    @endif

    @if (Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
    @endif

    @if (Session::has('warning'))
        toastr.warning('{{ Session::get('warning') }}');
    @endif


    $(document).on('click', '#delete-record', function() {
        var ids = $(this).attr("data-id");
        var url = $(this).attr("data-url");

        if (ids.length > 0) {
            Swal.fire({
                title: "Do you want to delete?",
                icon: "warning",
                showCancelButton: false,
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: 'No, cancel it!',
                reverseButtons: false
            }).then(function(result) {
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "id": ids
                        },
                        success: function(data) {
                            if (data.success) {
                                Swal.fire("", data.success, "success").then(() => {
                                    $(".datatables-basic").DataTable().ajax.reload(
                                        null, false);
                                });
                            } else if (data.error) {
                                Swal.fire("", data.error, "error").then(() => {
                                    $(".datatables-basic").DataTable().ajax.reload(
                                        null, false);
                                });
                            }
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire("", "Thank You for your Confirmation", "info");
                }
            });
        } else {
            Swal.fire("", "Please select at least one record", "warning");
        }
    });

    /* Add update rcord */
    $(document).on("submit", "#recordForm", function(e) {
        e.preventDefault();

        let form = $(this);
        let formData = new FormData(this);

        // Clear old errors
        form.find("small.error-text").text("");

        $.ajax({
            url: form.attr("action"),
            method: form.attr("method"),
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.error) {
                    toastr.error(response.message);
                }
                if (response.success) {
                    form[0].reset();
                    $('#update_id').val('');
                    $("#recordModal").modal("hide");
                    $('.datatables-basic').DataTable().ajax.reload(null, false);
                    toastr.success(response.message);
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;

                    // Clear old errors
                    $("small.error-text").text("");

                    // Show new errors
                    $.each(errors, function(key, messages) {
                        $(form).find("." + key + "_error").text(messages[0]);
                    });

                    return;
                }

                // Other errors
                console.log("Unexpected Error:", xhr.responseText);
            }
        });
    });
    /* Edn  Add update rcord */




    /*--MULTI SELECT AND DESELECT ROW OF DATATABLE--*/

    $('.datatables-basic tbody').on('click', 'input[type="checkbox"]', function(e) {
        let $row = $(this).closest('tr');
        if (this.checked) {
            table.row($row).select();
        } else {
            table.row($row).deselect();
        }
        e.stopPropagation();
    });

    $('.datatables-basic tbody').on('click', 'tr', function(e) {
        if (!$(e.target).is('input[type="checkbox"],button,a')) {
            let $checkbox = $(this).find('input[type="checkbox"]');
            $checkbox.prop('checked', !$checkbox.prop('checked')).trigger('click');
        }
    });

    /*-- /MULTI SELECT AND DESELECT ROW OF DATATABLE --*/
</script>
@yield('script')
</body>

</html>
