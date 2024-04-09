@push('css_vendor')
    <link href="{{ asset('dist/assets/libs/tooltipster/tooltipster.bundle.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@push('js_vendor')
    <script src="{{ asset('dist/assets/libs/tooltipster/tooltipster.bundle.min.js') }}"></script>
@endpush
@push('scripts')
    <script>
        ! function(t) {
            "use strict";
            t("#tooltip-hover").tooltipster(), t("#tooltip-events").tooltipster({
                trigger: "click"
            })
        }(jQuery);
    </script>
@endpush
