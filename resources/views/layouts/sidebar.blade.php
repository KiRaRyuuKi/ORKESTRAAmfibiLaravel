<!-- Sidebar -->
<aside id="sidebar" class="sidebar">

    <div class="mt-2 d-flex align-items-center justify-content-between">
        <a href="/home" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">{{ config('app.name', 'Amfibi') }}</span>
        </a>
    </div><!-- End Logo -->

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link {{ \Route::is('home') ? '' : 'collapsed' }}" href="/pages/home">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-heading">Dataset</li>

        <li class="nav-item">
            <a class="nav-link {{ \Route::is('pages.account*') ? '' : 'collapsed' }}" href="/pages/account/">
                <i class="bi bi-people-fill"></i>
                <span>Account</span>
            </a>
        </li><!-- End Account Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ \Route::is('messages') ? '' : 'collapsed' }}" href="/messages">
                <i class="bi bi-chat-dots-fill"></i>
                <span>Messages</span>
            </a>
        </li><!-- End Messages Nav -->

    </ul>
</aside><!-- End Sidebar-->
