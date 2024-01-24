  <!-- Main Sidebar Container -->
  <div class="wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('dist/img/LMS logo small.png')}}" alt="Idaksh Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
      <span class="brand-text font-weight-light">Leave Mngmt System</span>
    </a>
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php if(auth()->user()->user_group_id == 5 ){ ?>
               <li class="nav-item">
                  <a href="/dashboard" class="nav-link dashboard-nav-link">
                    <i class="nav-icon fas fa-home text-warning"></i>
                    <p>Dashboard</p>
                  </a>
              </li>
              <?php } else{ ?>
              
              <li class="nav-item">
                <a href="/" class="nav-link dashboard-nav-link">
                  <i class="nav-icon fas fa-home text-warning"></i>
                  <p>Dashboard</p>
                </a>
            </li>
            <?php } ?>
            <!--This will visible only for Admin and Manager Manage for employee status-->
            <?php if(auth()->user()->user_group_id == 1 || auth()->user()->user_group_id == 2) : ?>
                <li class="nav-item">
                  <a href="/employee_status/manage" class="nav-link">
                    <i class="nav-icon fas fa-user text-info"></i>
                    <p>Manage employee</p>
                  </a>                  
                </li> 
                <?php endif; ?>
              
              <!--This will visible only for Admin and Manager-->
              <?php if(auth()->user()->user_group_id == 1 || auth()->user()->user_group_id == 2) : ?>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-sun text-primary"></i>
                    <p>Leave type<i class="fas fa-angle-left right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/leavetype/add" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/leavetype/manage" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Manage</p>
                      </a>
                    </li>         
                  </ul>
                </li> 
                <?php endif; ?>

                {{-- <?php if(auth()->user()->user_group_id == 1 || auth()->user()->user_group_id == 2) : ?>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy text-primary"></i>
                    <p>Leave type for sales<i class="fas fa-angle-left right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/leavetypeforsales/add" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/leavetypeforsales/manage" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Manage</p>
                      </a>
                    </li>         
                  </ul>
                </li> 
                <?php endif; ?> --}}

                <!--This will visible only for Admin and Manager-->
                <?php if(auth()->user()->user_group_id == 1 || auth()->user()->user_group_id == 2) : ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book text-primary"></i>
                  <p>Public leave master<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/publicleave/add" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/publicleave/manage" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage</p>
                    </a>
                  </li>         
                </ul>
              </li>
            <?php endif; ?>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-paper-plane text-success"></i>
                <p>Apply Leave<i class="fas fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/apply" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Casual leave</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/public_leave" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Public leave</p>
                  </a>
                </li>         
              </ul>
            </li>

            <?php if(auth()->user()->user_group_id == 1 || auth()->user()->user_group_id == 2) : ?>
              <li class="nav-item">
                <a href="/action" class="nav-link">
                  <i class="nav-icon fas fa-bell text-danger"></i>
                  <p> Pending Applications</p>              
                </a>
              </li> 
            <?php endif; ?>     
            
            <?php if(auth()->user()->user_group_id == 1 || auth()->user()->user_group_id == 2) : ?>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-bar text-primary"></i>
                <p>Reports<i class="fas fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/casual_leave_approved_list" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Casual leave approved list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/casual_leave_rejected_list" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Casual leave rejected list</p>
                  </a>
                </li>
                <li class="nav-item">

                  <a href="/public_leave_status" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Public leave applied list</p>

                    </a>
                </li>

                <li class="nav-item">
                  <a href="/month_leave_status" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Employee leave (30 days)</p>
                    </a>
                </li>

                <li class="nav-item">
                  <a href="/employee_leave_status" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                    <p>All employee leave status</p>

                  </a>
                </li>          
              </ul>
            </li> 
            <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>