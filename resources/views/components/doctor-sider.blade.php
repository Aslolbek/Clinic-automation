<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
          <img
            src={{asset("img/kaiadmin/logo_light.svg")}}
            alt="navbar brand"
            class="navbar-brand"
            height="20"
          />
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
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
            <li class="nav-item active">
                <a href="/admin">
                    <i class="fas fa-home"></i>
                    <p>Bosh sahifa</p>
                </a>
            </li>
            
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Menu</h4>
          </li>
          <li class="nav-item">
            <a href="/admin/view-doctors">
                <i class="fas fa-layer-group"></i>
                <p>Hodimlar ro'yxati ko'rish</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.create') }}">
                <i class="fas fa-layer-group"></i>
                <p>Hodimlar tizimga kiritish</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.create') }}">
                <i class="fas fa-layer-group"></i>
                <p>Hodimlar tizimga kiritish</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.create') }}">
                <i class="fas fa-layer-group"></i>
                <p>Hodimlar tizimga kiritish</p>
            </a>
        </li>
          

        
        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->