@push('css_vendor')
    <link href="{{ asset('dist/assets/libs/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@push('js_vendor')
    <script src="{{ asset('dist/assets/libs/switchery/switchery.min.js') }}"></script>
@endpush
@push('scripts')
    <script>
        $(function() {
            $('[data-plugin="switchery"]').each(function(a, n) {
                new Switchery($(this)[0], $(this).data())
            })
        });
    </script>
@endpush
