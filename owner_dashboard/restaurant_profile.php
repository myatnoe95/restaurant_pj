<?php include_once "include/db.php" ?>
<?php include_once "include/header.php" ?>

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

<div id="wrapper">
 <?php include_once "include/sidebar.php" ?>


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
          
         
<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-4">
              <h6 class="m-0 font-weight-bold text-primary">Restaurant Profile</h6>
            </div>
          
             <br><br>
 <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <img src="img/upload/<?php echo $row['r_image']; ?>" class="img-fluid" alt="" style="width: 100%;height: 200px;">
                
              </div>
              <div class="col-md-6">
                <br><br>
                <br><br>
                <h3><?php echo $row['r_name'];?></h3>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <strong>Address:&nbsp;&nbsp;<?php echo $row['r_address']; ?></strong>
                <br><br>
                <strong>Branch:&nbsp;&nbsp;<?php echo $row['r_branch']; ?></strong>
                <br><br>
                <strong>Hotline:&nbsp;&nbsp;<?php echo $row['r_hotline']; ?></strong>
                <br><br>
                <strong>Food Type:&nbsp;&nbsp;<?php echo $row['food_type']; ?></strong>
                 <br><br>
                <strong>Restaurant Type:&nbsp;&nbsp;<?php echo $row['r_type']; ?></strong>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <br><br>
        <h2 class="text-center"><b>Menu Set</b></h2>
        <br>
        <div class="row">
         <?php 
		         $sql = "SELECT * FROM add_menu WHERE r_id='$restaurant_id'";
		         $result = mysqli_query($connection,$sql);
		         while($row= mysqli_fetch_assoc($result))
            {
		       
              ?>
            <div class="col-md-3">
            <img src="img/menu/<?php echo $row['item_image']; ?>"  class="img-fluid" alt="">
            <h5 class="text-center"><b><?php echo $row['item_name']?></b></h5>
            <h5 class="text-center"><?php echo $row['item_price']?></h5>
          </div>       
    
          <?php 
      	    }
          ?>
        </div>
      </div>
    </div>
  </div>
          </div>
</div>
<?php include_once"include/footer.php" ?>
