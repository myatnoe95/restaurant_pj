  <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" style="background: #C10A28;"id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
           <?php 
              if (isset($_SESSION['role'])) {
                echo $_SESSION['role'];
              }
             ?>
        <span>Site</span></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="user_View.php">
          <i class="fa fa-fw fa-user"></i>
          <span>User View</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="restaurant_view.php">
          <i class="fa fa-fw fa-home"></i>
          <span>Restaurant View</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="restaurant_approve.php">
          <i class="fa fa-fw fa-home"></i>
          <span>Restaurant Approval</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      
      

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      
      <!-- Divider -->
      
      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
     

      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
     

      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>
        <!-- End of Sidebar -->