<?php include_once"include/header.php"?>
<?php include_once"include/db.php"?>
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
          <h1 class="h3 mb-4 text-gray-800">Update Menu Set!!</h1>
          <?php 
                     if (isset($_GET['edit']))
                      {
                        $item_id=$_GET['edit'];
                        $query="SELECT *FROM add_menu WHERE item_id=$item_id";
                        $result=mysqli_query($connection,$query);
                        if(!$result)
                          {
                            die("Query Failed".mysqli_error($result)); 
                          }
                        while ($row=mysqli_fetch_assoc($result))
                         {
                            $item_name= $row['item_name'];
                            $item_price= $row['item_price'];
                            $item_image=$row['item_image'];
                          }
                      }
                   ?>
              

  <div class="container">
        <div class="card">
          <div class="card-body">
             <form action="" method="POST" enctype="multipart/form-data">
              <div class="row">
              <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">

              <div class="col-md-6 offset-3">
                <div class="form-group">
                  <label>Item Name:</label>
                  <input type="item_name" name="item_name" placeholder= "Enter Your Item Name" value="<?php echo $item_name; ?>" class="form-control">
                </div>
              </div>
              <div class="col-md-6 offset-3">
                <div class="form-group">
                  <label>Item Price:</label>
                  <input type="item_price" name="item_price" placeholder="Enter Your Item Price" value="<?php echo $item_price; ?>" class="form-control">
                </div>
              </div>
                <div class="col-md-6 offset-3">
                <div class="form-group">
                  <label>Upload Photo</label><br>
                  <img src="img/menu/<?php echo $item_image;?>" alt="" class="img-fluid" style="width:25%;height:100px;"><br><br>
                  <input type="file" name="item_image" class="">
                </div>
              </div>
             
              <div class="col-md-6 offset-3">
                <div class="form-group">
                 <a href="update_menu.php?update=<?php echo $item_id;?>"><button type="submit" name="update" class="btn btn-primary">Update Menu</button></a>
                </div>
              </div>
              </form>
                  <?php 
                      if (isset($_POST['update']))
                        {  
                            $item_id=$_POST['item_id'];
                            $item_name=$_POST['item_name'];
                            $item_price=$_POST['item_price'];
                            $item_image=$_FILES['item_image']['name'];
                            $item_imagename = $_FILES['item_image']['tmp_name'];
                            move_uploaded_file($item_imagename, 'img/menu/'.$item_image);
                            
                            $sql="UPDATE add_menu SET item_name='$item_name',item_price='$item_price',item_image='$item_image' WHERE item_id=$item_id";
                            $result=mysqli_query($connection,$sql);
                            if(!$result)
                              {
                                 die("Query Failed".mysqli_error($result));
                              }
                         }
                   ?>
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
      