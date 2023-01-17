<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/hybrix/html/auth-404-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 12:15:40 GMT -->
<head>

    <meta charset="utf-8" />
    <title>404 Error | BarberQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('admin/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    <div class="card auth-card bg-primary h-100 border-0 shadow-none p-sm-3 overflow-hidden mb-0">
                                        <div class="card-body p-4 d-flex justify-content-between flex-column">
                                            <div class="auth-image mb-3">
                                                <img src="{{ asset('admin/images/logo-light-full.png') }}" alt="" height="26" />
                                                <img src="{{ asset('admin/images/effect-pattern/auth-effect-2.png') }}" alt="" class="auth-effect-2" />
                                                <img src="{{ asset('admin/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect" />
                                                <img src="{{ asset('admin/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect-3" />
                                            </div>
    
                                            <div>
                                                <h3 class="text-white">Start your journey with us.</h3>
                                                <p class="text-white-75 fs-15">It brings together your tasks, projects, timelines, files and more</p>
                                            </div>
                                            <div class="text-center text-white-75">
                                                <p class="mb-0">&copy;
                                                    <script>document.write(new Date().getFullYear())</script> Hybrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-7">
                                    <div class="card mb-0 border-0 shadow-none">
                                        <div class="card-body px-0 p-sm-5 m-lg-4">
                                            <div class="error-img text-center px-5">
                                              <img src="{{ asset('admin/images/error400.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="mt-4 text-center pt-3">
                                                <div class="position-relative">
                                                    <h4 class="fs-18 error-subtitle text-uppercase mb-0">Opps, Halaman Tidak Ditemukan</h4>
                                                    <p class="fs-15 text-muted mt-3">Halaman Ini Tidak Ditemukan Seperti Jodoh Mu</p>
                                                        <div class="mt-4">
                                                            <a href="{{ url('/') }}" class="btn btn-primary"><i class="mdi mdi-home me-1"></i>Back to home</a>
                                                        </div>
                                                 </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('admin/js/plugins.js') }}"></script>

</body>


<!-- Mirrored from themesbrand.com/hybrix/html/auth-404-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 12:15:40 GMT -->
</html>