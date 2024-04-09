<x-app-layout title="{{ __('Dashboard') }}" header="{{ __('Dashboard') }}">
    <div class="row">
        <div class="col-sm-4">
            <a href="#custom-modal" class="btn btn-primary waves-effect waves-light mb-3" data-animation="fadein"
                data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Add
                Member</a>
        </div><!-- end col -->
        <div class="col-sm-8">
            <div class="text-right">
                <ul class="pagination pagination-split mt-0 float-right">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-3.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">Julie L. Arsenault</h4>
                        <p class="text-muted">@Founder <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mb-2 mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-5.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">Freddie J. Plourde</h4>
                        <p class="text-muted">@Programmer <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted font-13">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mb-2 mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-2.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">Christopher Gallardo</h4>
                        <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted font-13">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->
    </div>
    <!-- end row -->



    <div class="row">
        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mb-2 mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-4.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">Joseph M. Rohr</h4>
                        <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted font-13">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mb-2 mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-6.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">Mark K. Horne</h4>
                        <p class="text-muted">@Director <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted font-13">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mb-2 mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-7.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">James M. Fonville</h4>
                        <p class="text-muted">@Manager <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted font-13">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mb-2 mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-8.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">Jade M. Walker</h4>
                        <p class="text-muted">@Webdeveloper <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted font-13">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mb-2 mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-9.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">Mathias L. Lassen</h4>
                        <p class="text-muted">@Webdesigner <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted font-13">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="text-center card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                        aria-expanded="false">
                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="avatar-xl member-thumb mb-2 mx-auto">
                        <img src="{{ asset('dist/assets/images/users/avatar-10.jpg') }}"
                            class="rounded-circle img-thumbnail" alt="profile-image">
                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                    </div>

                    <div class="">
                        <h4 class="mb-1">Alfred M. Bach</h4>
                        <p class="text-muted">@Manager <span> | </span> <span> <a href="#"
                                    class="text-pink">websitename.com</a> </span></p>
                    </div>

                    <p class="text-muted font-13">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>

                    <ul class="social-links list-inline mt-3">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                        </li>
                    </ul>

                    <button type="button"
                        class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light">Follow</button>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-2 mb-1">
                                    <h4 class="mb-1">2563</h4>
                                    <p class="mb-0 text-muted">Lifetime total sales</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">6952</h4>
                                    <p class="mb-0 text-muted">Income amounts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <h4 class="mb-1">1125</h4>
                                    <p class="mb-0 text-muted">Total visits</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- end col -->
    </div>
    <!-- end row -->
</x-app-layout>
