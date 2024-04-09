@push('css_vendor')
    <link href="{{ asset('dist/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@push('js_vendor')
    <script src="{{ asset('dist/assets/libs/select2/select2.min.js') }}"></script>
@endpush
@push('scripts')
    <script>
        $(function() {
            $('[data-toggle="select2"]').select2()
        });
    </script>
@endpush
