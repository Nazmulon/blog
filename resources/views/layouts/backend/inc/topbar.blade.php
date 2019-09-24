<div class="app-header1 header py-1 d-flex">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="index-1.html">
                <h3 style="color: #00f2fe">BLOG SYSTEM</h3>
            </a>
            <div class="menu-toggle-button">
                <a class="nav-link wave-effect" href="#" id="sidebarCollapse">
                    <span class="fa fa-bars"></span>
                </a>
            </div>
            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                <div class="p-2">
                    <form class="input-icon ">
                        <div class="input-icon-addon">
                            <i class="fe fe-search"></i>
                        </div>
                        <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                    </form>
                </div>

                <div class="dropdown d-none d-md-flex ">
                    <a class="nav-link icon " data-toggle="dropdown">
                        <i class="fe fe-grid floating"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <ul class="drop-icon-wrap p-1">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
