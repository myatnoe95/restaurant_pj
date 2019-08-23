  <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background:#C10A28;" id="accordionSidebar">

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

      <?php   
        if (isset($_SESSION['u_id'])) {
               $user_id = $_SESSION['u_id'];
               $sql = "SELECT * FROM add_restaurant WHERE u_id='$user_id'";
               $result=mysqli_query($connection,$sql);
               if (mysqli_num_rows($result)==0) {
        ?>
            <li class="nav-item active">
              <a class="nav-link" href="add_restaurant.php">
                <i class="fa fa-fw fa-home"></i>
                <span>Add Restaurant</span>
              </a>
            </li>
        <?php
               }
          }
      ?>

      
       <li class="nav-item active">
        <a class="nav-link" href="add_menu.php">
          <i class="fa fa-fw fa-home"></i>
          <span>Add Menu</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="view_menu.php">
          <i class="fa fa-fw fa-home"></i>
          <span>View Menu</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="restaurant_profile.php">
          <i class="fa fa-fw fa-home"></i>
          <span>Restaurant Profile</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
        <!-- End of Sidebar -->