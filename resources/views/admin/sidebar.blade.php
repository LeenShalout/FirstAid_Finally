<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('css.admin/dist/img/aidhub1.png')}}" alt="AdminLTE Logo" style="opacity: .8" width="150">
      <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="#" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-header">
           Settings
          </li> 
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
               Admin profile
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-header">
           Tables
          </li>
          <li class="nav-item">
            <a href="/admin/case" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Case table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/blog" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Blog table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/message" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Messages table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/workshop" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Workshop table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/feedback" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Feedback table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/users" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Users table
              </p>
            </a>
          </li>
          <li class="nav-header">
           Forms
          </li>
          <li class="nav-item">
            <a href="/admin/caseform" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Case form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/blogform" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Blog form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/usersform" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Users form
              </p>
            </a>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
