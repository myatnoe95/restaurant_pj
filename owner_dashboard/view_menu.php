<?php include_once"include/header.php" ?>
<?php include_once"include/db.php" ?>
<?php ob_start(); ?>
<?php 
  if(isset($_SESSION['u_id']))
    {
      $user_id= $_SESSION['u_id'];
      $sql = "SELECT * FROM add_restaurant WHERE u_id = '$user_id'";
      $result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_assoc($result);
      $restaurant_id = $row['r_id'];
    }
 ?>
 

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include_once"include/sidebar.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       <?php include_once"include/navbar.php" ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Menu Lists</h1>
         <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Item No</th>
                      <th>Item Name</th>
                      <th>Item Price</th>
                      <th>Item Image</th>
                      <th> </th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                   <!-- show menu -->
                    <?php 
                      $sql="SELECT * FROM add_menu WHERE r_id='$restaurant_id'";
                      $result= mysqli_query($connection,$sql);
                      if(!$result)
                      {
                        die("Connection Failed".mysqli_error($result));
                      }
                       while($row=mysqli_fetch_assoc($result))
                       {
                          $item_id =$row['item_id'];
                          $item_name =$row['item_name'];
                          $item_price =$row['item_price'];
                          $item_image = $row['item_image'];
                          ?>
                        <tr>
                          <td><?php echo "$item_id"; ?></td>
                          <td><?php echo "$item_name"; ?></td>
                          <td><?php echo "$item_price"; ?></td>
                          <td><img src="img/menu/<?php echo $row['item_image']; ?>"  class="img-fluid" alt="" style="width:25%;height: 100px;"></td>
                           <td><a href="update_menu.php?edit=<?php echo $item_id;?>"> <input type="submit" name="edit" value="Edit" class="btn btn-info"></a></td>

                           <td><a href="view_menu.php?delete=<?php echo $item_id;?>"> <input type="submit" name="delete" value="Delete" class="btn btn-danger"></a></td>
                           
                          
                        </tr>
                      <?php
                        }
                      ?>   

                  </tbody>
                </table>
                 <!-- delete menu -->
                   <?php 
                     if (isset($_GET['delete']))
                      { 
                        $item_id = $_GET['delete'];
                        $sql= "DELETE FROM add_menu WHERE item_id=$item_id";
                        $result= mysqli_query($connection,$sql);
                        if (!$result) 
                          {
                            die("Query Failed".mysqli_error($result));
                          }
                        header('Location:view_menu.php');
                      }
                    ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include_once"include/footer.php" ?>
     