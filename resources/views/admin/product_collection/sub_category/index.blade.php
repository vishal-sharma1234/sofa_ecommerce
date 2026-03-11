@extends('layouts.admin_layout.master')

@section('content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="datatables-basic table">
                            <thead>
                            </thead>
                        </table>
                    </div>
                </div>
                <hr class="my-12">
            </div>
        </div>
    </div>

    <div class="modal fade" id="recordModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Product Sub Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="card">
                    <div class="modal-body">
                        <form method="post" id="recordForm" action="{{ route('admin.add.update.product.subcategory') }}"
                            class="mb-0" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="update_id" value="">
                            <div class="row g-2">
                                <div class="">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <label class="form-label text-dark" for="name">Sub Category
                                                    Name</label><span class="text-danger">*</span>
                                                <input type="text" id="name" name="name"
                                                    placeholder="Enter sub category name" aria-label="name"
                                                    class="form-control">
                                                <small class="text-danger error-text name_error"></small>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label text-dark" for="category">Product
                                                    Category</label><span class="text-danger">*</span>
                                                <select name="category" id="category" class="form-control">
                                                    <option value="" disabled selected>Select Category</option>
                                                    @forelse ($categories as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @empty
                                                        <option value="">No Data Found</option>
                                                    @endforelse
                                                </select>
                                                <small class="text-danger error-text category_error"></small>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label text-dark" for="image">Image</label>
                                                <input type="file" id="image" name="image"
                                                    aria-label="image" class="form-control">
                                                <small class="text-danger error-text image_error"></small>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label text-dark" for="description">Description</label>
                                                <textarea name="description" id="description" rows="4" class="form-control"></textarea>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label text-dark">Status</label>
                                                <div id="statusToggle" class="toggle-indicator active">
                                                    <div class="indicator"></div>
                                                </div>
                                                <input type="hidden" id="status" name="status" value="1">
                                            </div>

                                            <div class="text-end">
                                                <button class="btn btn-primary" type="submit">Submit</bustton>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            let datatableButtons = [{
                extend: "collection",
                className: "btn btn-label-primary dropdown-toggle me-4 waves-effect waves-light border-none",
                text: '<i class="ti ti-file-export ti-xs me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
                buttons: [{
                        extend: "print",
                        text: '<i class="ti ti-printer me-1"></i>Print',
                        className: "dropdown-item",
                    },
                    {
                        extend: "csv",
                        text: '<i class="ti ti-file-text me-1"></i>Csv',
                        className: "dropdown-item",
                    },
                    {
                        extend: "excel",
                        text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
                        className: "dropdown-item",
                    },
                    {
                        extend: "pdf",
                        text: '<i class="ti ti-file-description me-1"></i>Pdf',
                        className: "dropdown-item",
                    },
                    {
                        extend: "copy",
                        text: '<i class="ti ti-copy me-1"></i>Copy',
                        className: "dropdown-item",
                    }
                ]
            }];

            datatableButtons.push({
                text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add Category</span>',
                className: "create-new btn btn-primary waves-effect waves-light",
                attr: {
                    'data-bs-toggle': 'modal',
                    'data-bs-target': '#recordModal'
                }
            });

            // Initialize DataTable
            let table = $(".datatables-basic").DataTable({
                processing: true,
                serverSide: true,
                sorting: false,
                dom: 'r<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-6 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end mt-n6 mt-md-0"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                lengthMenu: [10, 25, 50, 75, 100],
                language: {
                    processing: '<i class="fas fa-spinner fa-spin fa-lg me-1" style="color:#4e73df;"></i> Loading...',
                    paginate: {
                        processing: '<span style="color:#4e73df;"><i class="fas fa-spinner fa-spin"></i> Loading...</span>',
                        next: '<i class="ti ti-chevron-right ti-sm"></i>',
                        previous: '<i class="ti ti-chevron-left ti-sm"></i>'
                    }
                },
                buttons: datatableButtons,
                ajax: {
                    url: "{{ route('admin.product.subcategories') }}",
                    data: function(d) {}
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name',
                        title: 'Name',
                    },
                    {
                        data: 'category',
                        name: 'category',
                        title: 'Category',
                    },
                    {
                        data: 'image',
                        name: 'image',
                        title: 'Image',
                    },
                    {
                        data: 'status',
                        name: 'status',
                        title: "Status",
                    },
                    {
                        data: 'action',
                        name: 'action',
                        title: "Action",
                        orderable: false,
                        searchable: false,
                    }

                ],
            });

            $("div.head-label").html('<h5 class="card-title mb-0">Product Sub Categories</h5>');

        });

        function refresh() {
            location.reload();
        }

        $(document).on("click", ".create-new", function() {

            $('.error-text').text('');

            $('#recordModal form')[0].reset();

            $('#update_id').val('');

        });

        $(document).on('click', '.edit-record', function() {
            $('.error-text').text('');

            let url = $(this).data('url');

            $.ajax({
                url: url,
                type: "GET",
                success: function(response) {

                    $('#update_id').val(response.id);
                    $('#name').val(response.name);
                    $('#category').val(response.category_id).trigger('change');
                    $('#description').val(response.description);

                    if (response.status == 1) {
                        $("#statusToggle").addClass("active");
                        $("#status").val(1);
                    } else {
                        $("#statusToggle").removeClass("active");
                        $("#status").val(0);
                    }

                },
                error: function() {
                    alert("Something went wrong! Try again.");
                }
            });
        });
    </script>
@endsection
