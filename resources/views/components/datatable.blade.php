@push('css_vendor')
    <link href="{{ asset('dist/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css">
@endpush
@push('js_vendor')
    <script src="{{ asset('dist/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#datatable").DataTable({
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    }
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                }
            })
        });
    </script>
@endpush
