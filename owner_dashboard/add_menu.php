<?php include_once"include/header.php"?>
<?php include_once"include/db.php"?>

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

<?php 
  if(isset($_POST['add']))  
  {
      $item_name=$_POST['item_name'];
      $item_price=$_POST['item_price'];
      $item_image=$_FILES['item_image']['name'];
      $item_imagename = $_FILES['item_image']['tmp_name'];
      move_uploaded_file($item_imagename, 'img/menu/'.$item_image);
      $sql= "INSERT INTO add_menu(item_name,item_price,item_image,r_id) VALUES('$item_name','$item_price','$item_image','$restaurant_id')";
      $result=mysqli_query($connection,$sql);
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
   <?php include_once"include/sidebar.php"?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php include_once"include/navbar.php"?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="cosntainer-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Create Your Menu Set!!</h1>

  <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <form action="" method="POST" enctype="multipart/form-data">
            
              <div class="col-md-6 offset-3">
                <div class="form-group">
                  <label>Item Name:</label>
                  <input type="item_name" name="item_name" placeholder="Enter your Item Name" class="form-control">
                </div>
              </div>
              <div class="col-md-6 offset-3">
                <div class="form-group">
                  <label>Item Price:</label>
                  <input type="item_price" name="item_price" placeholder="Enter your Item Price" class="form-control">
                </div>
              </div>
                <div class="col-md-6 offset-3">
                <div class="form-group">
                  <label>Upload Photo</label>
                  <input type="file" name="item_image" class="">
                </div>
              </div>
              <div class="col-md-6 offset-3">
                <div class="form-group">
                 <button type="submit" name="add" class="btn btn-primary">Add Menu</button>
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
      