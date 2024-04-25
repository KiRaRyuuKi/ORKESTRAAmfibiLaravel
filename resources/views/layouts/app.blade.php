<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amfibi') }}</title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com') }}" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite([])
    {{-- @livewireStyles --}}
</head>

<body>
    <div id="app">
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mx-auto text-center">
                        <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Company
                        </a>
                        <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            About Us
                        </a>
                        <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Team
                        </a>
                        <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Products
                        </a>
                        <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Blog
                        </a>
                        <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Pricing
                        </a>
                    </div>
                    <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                        <a href="#" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg bi bi-dribbble"></span>
                        </a>
                        <a href="#" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg bi bi-twitter"></span>
                        </a>
                        <a href="#" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg bi bi-instagram"></span>
                        </a>
                        <a href="#" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg bi bi-pinterest"></span>
                        </a>
                        <a href="#" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg bi bi-github"></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-1">
                        <p class="mb-0 text-secondary">
                            Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> by ORKESTRA HiERo.
                        </p>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer -->
    </div>

    <a class="back-to-top d-flex align-items-center justify-content-center" href="#">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- @livewireScripts --}}
</body>

</html>
