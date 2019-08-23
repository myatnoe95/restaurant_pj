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
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">This is the user lists table</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">UserLists</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User_ID</th>
                      <th>User_Name</th>
                      <th>User_Email</th>
                      <th>Role</th>
                      <th><a href=""></a></th>
                    </tr>
                  </thead>
                 <?php 
                   $query= "SELECT * FROM user";
                   $result= mysqli_query($connection,$query);
                   if(!$result)
                   {
                     die("Connection Failed".mysqli_error($result));
                   }
                   while ($row=mysqli_fetch_assoc($result))
                    {
                      $user_id = $row['u_id'];
                      $user_name= $row['u_name'];
                      $user_email= $row['u_email'];
                      $role = $row['role'];

                    
                   ?>
                  <tbody>
                    <tr>
                      <td><?php echo "$user_id";?></td>
                      <td><?php echo "$user_name";?></td>
                      <td><?php echo "$user_email";?></td>
                      <td><?php echo "$role";?></td>
                      <td> <input type="submit" name="ban" value="Ban" class="btn btn-danger"></td>
                    </tr>
                    <?php 
                      }
                     ?>
                     <!--  <tr>
                      <td>2</td>
                      <td>Su Htet</td>
                      <td>suhtet@gmail.com</td>
                      <td>27395</td>
                      <td> <input type="submit" name="ban" value="Ban" class="btn btn-danger"></td>
                    </tr>
                     <tr>
                      <td>3</td>
                      <td>Yamin Phyu</td>
                      <td>yamin@gmail.com</td>
                      <td>21795</td>
                      <td> <input type="submit" name="ban" value="Ban" class="btn btn-danger"></td>
                    </tr>
                  <tr>
                      <td>4</td>
                      <td>MyatNoe</td>
                      <td>myatnoe@gmail.com</td>
                      <td>01695</td>
                      <td> <input type="submit" name="ban" value="Ban" class="btn btn-danger"></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>EiEi</td>
                      <td>eiei@gmail.com</td>
                      <td>12345</td>
                      <td> <input type="submit" name="ban" value="Ban" class="btn btn-danger"></td>
                    </tr>
                  <tr>
                      <td>6</td>
                      <td>Kaung</td>
                      <td>kaung@gmail.com</td>
                      <td>67890</td>
                      <td> <input type="submit" name="ban" value="Ban" class="btn btn-danger"></td>
                    </tr>   -->          
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