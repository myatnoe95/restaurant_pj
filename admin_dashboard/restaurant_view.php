<?php include_once"include/header.php" ?>
<?php include_once"include/db.php" ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- sidebar -->
    <?php include_once"include/sidebar.php" ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       <!-- Topbar -->
        <?php include_once"include/navbar.php" ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables for Restaurants</h1>
          <p class="mb-4">This is the restaurant lists table</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">RestaurantLists</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Restaurant Name</th>
                      <th>User Name</th>
                      <th><a href=""></a></th>
                    </tr>
                  </thead>
                    
                  <tbody>

                  <?php 
                    $sql= "SELECT add_restaurant.r_id,add_restaurant.r_name,user.u_name FROM add_restaurant INNER JOIN user ON add_restaurant.u_id = user.u_id WHERE approve=1";
                    $result= mysqli_query($connection,$sql);
                    if(!$result)
                    {
                      die("Query Failed".mysqli_error($result));
                    }
                    $no = 1;
                    while ($row=mysqli_fetch_assoc($result))
                    {
                  ?>
                    <tr>
                      <td style="width: 100px;"><?php echo $no++; ?></td>
                      <td><?php echo $row['r_name']; ?></td>
                      <td><?php echo $row['u_name']; ?></td>
                      <td style="width: 100px;"><a href="restaurant_detail.php?r_detail_id=<?php echo $row['r_id']; ?>" class="btn btn-primary">Detail</a></td>
                    </tr>
                  <?php
                    }
       
                  ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include_once"include/footer.php"?>