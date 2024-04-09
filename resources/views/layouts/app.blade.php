<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.png') }}">

    <link href="{{ asset('dist/assets/libs/custombox/custombox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    @stack('css_vendor')
    <!-- App css -->
    <link href="{{ asset('dist/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <x-_topbar />
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <x-_sidebar />
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    @isset($breadcrumb)
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                                            <li class="breadcrumb-item active">Members</li>
                                        </ol>
                                    @endisset
                                </div>
                                <h4 class="page-title">{{ $header }}</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    {{ $slot }}

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2017 - 2019 &copy; Adminox theme by <a href="">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->





    <!-- Vendor js -->
    <script src="{{ asset('dist/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    @stack('js_vendor')

    <script src="{{ asset('dist/assets/libs/custombox/custombox.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('dist/assets/js/app.min.js') }}"></script>

    @stack('scripts')
    <script>
        $('.btn-logout').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                title: 'Are you sure?',
                text: "Select \"Logout\" below if you are ready to end your current session!",
                type: 'warning',
                confirmButtonText: 'Logout',
                showCancelButton: true,
                confirmButtonColor: '#19B5FE',
                cancelButtonColor: '#d33',
            }).then(function(t) {
                t.value ? document.getElementById('logout-form').submit() && Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        type: "success"
                    }) : t.dismiss === Swal.DismissReason
                    .cancel && Swal.fire({
                        title: "Cancelled",
                        text: "You are not logged out yet, continue your session :)",
                        type: "error"
                    })
            });
        });
    </script>
</body>

</html>
