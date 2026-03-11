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
                    url: "{{ route('admin.users') }}",
                    data: function(d) {}
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name',
                        title: 'Name',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        title: "Phone",
                    },
                    {
                        data: 'email',
                        name: 'email',
                        title: "Email",
                    },
                    {
                        data: 'is_active',
                        name: 'is_active',
                        title: "Is Active",
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



            $("div.head-label").html('<h5 class="card-title mb-0">Customers</h5>');

        });



        function refresh() {
            location.reload();
        }

        
    </script>
@endsection
