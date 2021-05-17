<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
<div class="header-mobile__bar">
    <div class="container-fluid">
        <div class="header-mobile-inner">
            <a class="logo" href="index.html">
                <img src="{!! asset('theme/images/icon/logo.png') !!}" alt="CoolAdmin" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</div>
<nav class="navbar-mobile">
    <div class="container-fluid">
    </div>
</nav>
</header>
<!-- END HEADER MOBILE-->


    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="header-button">                  
                        <div class="account-wrap">
                        <!-- Navbar Usuario: Login y Registre -->
                            @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                            @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->