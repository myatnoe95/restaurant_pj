<?php include_once"include/header.php" ?>
<?php include_once"include/db.php" ?>
<?php 
  if (isset($_POST['create']))
   {
        if(isset($_SESSION['u_id']))
        {
          $user_id= $_SESSION['u_id'];
        }


          $email=$_POST['email'];
          $r_name=$_POST['r_name'];
          $r_address=$_POST['r_address'];
          $r_branch=$_POST['r_branch'];
          $r_hotline=$_POST['r_hotline'];
          $food_type=$_POST['food_type'];
          $r_type=$_POST['r_type'];

          $r_image=$_FILES['r_image']['name'];
          $r_imagename = $_FILES['r_image']['tmp_name'];
         move_uploaded_file($r_imagename, 'img/upload/'.$r_image);

         $sql="INSERT INTO `add_restaurant`( `email`,`u_id`,`r_name`, `r_address`, `r_branch`, `r_hotline`, `food_type`, `r_type`, `r_image`) VALUES ('$email','$user_id','$r_name','$r_address','$r_branch','$r_hotline','$food_type','$r_type','$r_image')";
         $result = mysqli_query($connection,$sql);
          if(!$result)
          {
            die("Query Failed".mysqli_error($result));
          }

  }
 ?>
 
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
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
          <h1 class="h3 mb-4 text-gray-800">Create Your Restaurant!!</h1>

  <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <form action="" method="POST" enctype="multipart/form-data">
                
              <div class="col-md-8 offset-3">
                <div class="form-group">
                  <label>User Email:</label>
                  <input type="email" name="email" placeholder="Enter your Email" class="form-control">
                </div>
              </div>
              <div class="col-md-8 offset-3">
                <div class="form-group">
                  <label>Name:</label>
                  <input type="r_name" name="r_name" placeholder="Enter your Restaurant Name" class="form-control">
                </div>
              </div>
              <div class="col-md-8 offset-3">
                <div class="form-group">
                  <label>Address:</label>
                  <input type="r_address" name="r_address" placeholder="Enter your Restaurant Address" class="form-control">
                </div>
              </div>
               <div class="col-md-8 offset-3">
                <div class="form-group">
                  <label>Branch:</label>
                  <input type="r_branch" name="r_branch" placeholder="Enter your Restaurant Branch" class="form-control">
                </div>
              </div>
                <div class="col-md-8 offset-3">
                <div class="form-group">
                  <label>HotLine Number:</label>
                  <input type="r_hotline" name="r_hotline" placeholder="Enter your HotLine Number" class="form-control">
                </div>
              </div>
               <div class="col-md-8 offset-3">
                <div class="form-group">
                <label>Available Food Type:</label>
                 <select name="food_type" class="form-control">

                    <?php 
                      $foodtype_sql= "SELECT * FROM food_type";
                      $query= mysqli_query($connection,$foodtype_sql);
                      if(!$query)
                      {
                        die("Query Failed".mysqli_error($query));
                      }
                      while ($row=mysqli_fetch_assoc($query))
                      {
                    ?>
                        <option value="<?php echo $row['name']; ?>" class="form-control"><?php echo $row['name']; ?></option>
                    <?php
                      }
                    ?>
                    
                </select> 
                </div>
              </div>
                 <div class="col-md-8 offset-3">
                <div class="form-group">
                <label>Recommended places:</label>
                 <select name="r_type" class="form-control">
                <option value="Couple" class="form-control"> Couple</option> 
                <option value="Family" class="form-control"> Family</option>
                <option value="Friend" class="form-control"> Friend</option>
                </select> 
                </div>
              </div>
              <div class="col-md-8 offset-3">
                <div class="form-group">
                  <label>Upload Photo</label>
                  <input type="file" name="r_image" class="">
                </div>
              </div>
              <div class="col-md-6 offset-3">
                <div class="form-group">
                  <input type="submit" name="create" class="btn btn-primary" value="Create">
               </div>
              </div>
              </form>
              
              </div>
            </div>
          
        </div>
    </div>
            <br>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
        <?php include_once"include/footer.php"?>
      