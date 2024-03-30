<!-- Sidebar -->
<aside id="sidebar" class="sidebar">

    <div class="mb-5 d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('NiceAdmin/assets/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">{{ config('app.name', 'Amfibi') }}</span>
        </a>
    </div><!-- End Logo -->

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link {{ \Route::is('home') ? '' : 'collapsed' }}" href="/home">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link {{ \Route::is('account.*') ? '' : 'collapsed' }}" href="/account">
                <i class="bi bi-person"></i>
                <span>Account</span>
            </a>
        </li><!-- End Account Page Nav -->

    </ul>
</aside><!-- End Sidebar-->
