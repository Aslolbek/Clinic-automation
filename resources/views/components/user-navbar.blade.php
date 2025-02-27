<div class="main-header">
    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('users.index') }}" class="logo">
                <img src={{ asset('img/kaiadmin/logo_light.svg') }} alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                {{-- <-- // Profile --> --}}
                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                        aria-expanded="false">
                        <div class="avatar-sm">
                            @if (Auth::guard('web')->check() && Auth::guard('web')->user()->photo)
                                <img src="{{ asset('storage/' . Auth::guard('web')->user()->photo) }}"
                                    alt="image profile" class="avatar-img rounded" />
                            @else
                                <img src="{{ asset('img/profile.jpg') }}" alt="image profile"
                                    class="avatar-img rounded" />
                            @endif
                        </div>
                        <span class="profile-username">
                            <span class="op-7">Salom</span>
                            <span class="fw-bold">{{ Auth::guard('web')->user()->first_name }}</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg">
                                        @if (Auth::guard('web')->check() && Auth::guard('web')->user()->photo)
                                            <img src="{{ asset('storage/' . Auth::guard('web')->user()->photo) }}"
                                                alt="image profile" class="avatar-img rounded" />
                                        @else
                                            <img src="{{ asset('img/profile.jpg') }}" alt="image profile"
                                                class="avatar-img rounded" />
                                        @endif

                                    </div>
                                    <div class="u-text">
                                        <h4>{{ Auth::guard('web')->user()->first_name }}</h4>
                                        <p class="text-muted">{{ Auth::guard('web')->user()->email }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('users.index')}}">My Profile</a>
                                <a class="dropdown-item" href="{{ route('users.edit', ['user' => Auth::guard('web')->user()->id]) }}">My profile update</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger">Chiqish</button>
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
