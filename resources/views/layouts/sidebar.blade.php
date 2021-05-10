 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{!! asset('theme/images/whitecollar.png') !!}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                         <a class="fas fa-tag" href="{{ route('shops.index') }}">Shops</a>
                        </li>
                        <li>
                            <a class="fas fa-image" href="{{ route('quadres.index') }}">Quadres</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->