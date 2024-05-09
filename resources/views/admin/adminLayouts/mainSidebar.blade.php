 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="{{asset('css.admin/dist/img/aidhub1.png')}}" alt="AdminLTE Logo" style="opacity: .8" width="150">
      <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @auth
      <div class="user-panel mt-3 pb-3 mb-3">
          <div class="d-flex">
              <div class="image">
                  <img class="img-circle elevation-2" src="{{URL::asset("storage/image/".Auth::user()->img)}}" alt="{{Auth::user()->name}}" style="
          height: 50px;
          width: 50px;">
              </div>
              <div class="info">
                  <h5 class="d-block">{{Auth::user()->name}}</h5>
              </div>
          </div>

        <div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            @method('POST')
            <button style="background-color: #e13300; border-color: #e13300;color: white;" class="btn btn-primary float-left" >
                Logout
            </button>
        </form>
      </div>
      </div>

      @endauth
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
            <a href="/admin/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                AidHubDashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-header">
           Settings
          </li>
          <li class="nav-item">
            <a href="/admin/profile" class="nav-link">
              <i class="nav-icon fas fa-user-shield"></i>

              <p>
               Admin profile

              </p>
            </a>
          </li>
          <li class="nav-header">
           Tables
          </li>
          <li class="nav-item">



            <a href="{{route('AdminCase.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>

              <p>
                Case table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('AdminBlog.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Blog table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contacts.index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Contact table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('Registered.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               Registered table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('AdminWorkshop.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Workshop table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('experiences.index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Experience table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Users/ Admins table
              </p>
            </a>
          </li>
          <li class="nav-header">
           Forms
          </li>
          <li class="nav-item">
            <a href="{{route('AdminCase.create')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Case form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('AdminBlog.create')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Blog form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('AdminWorkshop.create')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Workshops form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users.create')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Users form
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{route('admins.create')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Admins form
              </p>
            </a>
          </li> --}}
          <div>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
