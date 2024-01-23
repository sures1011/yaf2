<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">user name</a>
        </div>
      </div>
    
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

          @if (auth()->user()->is_admin)
          <li class="nav-item">

          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="{{url('/view_services')}}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Services
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/view_services')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/show_services')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View services</p>
                </a>
              </li>
           
            </ul>
          </li>
     

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Programs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/view_programs')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/show_programs')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Programs</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Menu
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/menu_create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/menu_show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Menu</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Team Members
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('/team/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/team/index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Team</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-item">
          <a href="{{url('/show_donation')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Donations
              </p>
            </a>
          </li>  
          @endif

       

        


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>