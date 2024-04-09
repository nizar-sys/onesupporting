@if (session()->has('success'))
    <div class="row">
        <div class="col">

            <div class="alert alert-success text-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-check-all mr-2"></i>
                <strong>Success</strong> {{ session('success') }}
            </div>
        </div>
    </div>
@endif
@if (session()->has('warning'))
    <div class="row">
        <div class="col">

            <div class="alert alert-warning text-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-alert mr-2"></i>
                <strong>Warning</strong> {{ session('warning') }}
            </div>
        </div>
    </div>
@endif
@if (session()->has('info'))
    <div class="row">
        <div class="col">

            <div class="alert alert-info text-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-information mr-2"></i>
                <strong>Info</strong> {{ session('info') }}
            </div>
        </div>
    </div>
@endif
@if (session()->has('danger'))
    <div class="row">
        <div class="col">

            <div class="alert alert-danger text-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-block-helper mr-2"></i>
                <strong>Warning</strong> {{ session('danger') }}
            </div>
        </div>
    </div>
@endif
