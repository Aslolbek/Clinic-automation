<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('main')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Bosh sahifa</a>
            <a href="/about" class="nav-item nav-link">Biz haqimizda</a>
            <a href="/service" class="nav-item nav-link">Xizmatlar</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="/team" class="dropdown-item">Shifokorlar</a>
                    @auth
                        <a href="{{ route('appointments.index') }}" class="dropdown-item">Appointment</a>
                    @endauth
                    <a href="/testimonial" class="dropdown-item">Fikirlar</a>
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        @auth
            <a href="{{ route('appointments.index') }}" class="nav-item nav-link">Appointment</a>

            <!-- Profilga kirish tugmasi -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-dark fw-bold" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu rounded-3 shadow-lg border-0 p-2 bg-light" style="right: 0; left: auto;">
                    <a href="{{ route('showAppointments')}}" class="dropdown-item text-center">
                        <button class="btn btn-outline-primary w-100">Profilga kirish</button>
                    </a>
                    <div class="dropdown-divider"></div>
                    <!-- Chiqish tugmasi -->
                    <form action="{{ route('logout') }}" method="POST" class="text-center">
                        @csrf
                        <button class="btn btn-danger w-100">Chiqish</button>
                    </form>

                </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Kirish<i
                    class="fa fa-arrow-right ms-3"></i></a>
        @endauth
    </div>
</nav>
<!-- Navbar End -->
