<nav id="sidebar" class="nav-sidebar">
    <ul class="list-unstyled components" id="accordion">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="{{asset('backend/assets\images\faces\female\25.jpeg')}}" alt="user-img" class="img-circle"></div>
                <div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold">{{Auth::user()->name}}</span>  </a>
                    <br><span class="text-gray">Web Developer</span>
                </div>
            </div>
        </div>

        @if(Request::is('admin*'))
            <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
                <a href="{{route('admin.dashboard')}}" >
                    <i class="fa fa-desktop mr-2"></i> Dashboard
                </a>
            </li>
            <li class="{{Request::is('admin/tag*') ? 'active' : ''}}">
                <a href="{{route('admin.tag.index')}}" >
                    <i class="fa fa-tag mr-2"></i> Tag
                </a>
            </li>
            <li class="{{Request::is('admin/category*') ? 'active' : ''}}">
                <a href="{{route('admin.category.index')}}" >
                    <i class="fa fa-bars mr-2"></i> Category
                </a>
            </li>
            <li class="header">System</li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="dropdown-icon mdi  mdi-logout-variant"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        @endif

        @if(Request::is('author*'))
            <li class="{{Request::is('author/dashboard') ? 'active' : ''}}">
                <a href="{{route('author.dashboard')}}" >
                    <i class="fa fa-desktop mr-2"></i> Dashboard
                </a>
            </li>

            <li class="header">System</li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="dropdown-icon mdi  mdi-logout-variant"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endif

    </ul>
</nav>
