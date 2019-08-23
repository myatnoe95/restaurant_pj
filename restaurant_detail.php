<?php include_once"kmp.php" ?>
<?php include_once"include/header.php" ?>
<?php include_once"include/db.php" ?>
 
<!-- KMP Method -->
<?php 
	
	if (isset($_GET['r_id'])) {
		$restaurant_id = $_GET['r_id'];
	}

	$sign = '@';
	$pat = ['good','nice','very good','great','not bad','no bad','not so bad'];
	$exe =['bad','badly','poor','messy','not good','very bad','no good'];
	if (isset($_POST['submit'])) 
	{
		$str = strtolower($_POST['string']);
		$total = $sign.$str;
		foreach ($pat as $key) 
		{
			$result = SearchString($total, $key);
			//print_r($result);
			if (!empty($result)) 
			{
			  if ($str != 'not good' && $str != 'no good') {
			  		$yes_query = "INSERT INTO good (r_id,title,date) VALUES ('$restaurant_id','$str',now())";
				  	mysqli_query($connection,$yes_query);

				  	$sql= "UPDATE add_restaurant set point=point+2 WHERE r_id='$restaurant_id'";
				  	mysqli_query($connection,$sql);
			  }

			break;
			}
		}
		foreach ($exe as $key) 
		{
			$result = SearchString($total, $key);
		    if (!empty($result)) 
			{
			  $no_query = "INSERT INTO bad (r_id,title,date) VALUES ('$restaurant_id','$str',now())";
			  mysqli_query($connection,$no_query);
			  

              $query= "SELECT * FROM add_restaurant WHERE r_id='$restaurant_id'";
              $result=mysqli_query($connection,$query);
              while ($row=mysqli_fetch_assoc($result))
               {
                 $point=$row['point'];
               } 
               
             if ($point > 0)
               { 
                  $sql= "UPDATE add_restaurant set point=point-1 WHERE r_id='$restaurant_id'";
			      mysqli_query($connection,$sql);
               }

			break;

			}
		}
	}


	
 ?>

<div class="super_container">
	<link rel="stylesheet" href="css/bootstrap.min.css
	<link rel="stylesheet" href="css/fontawesome-all.min.css">

     <?php 
       if(isset($_GET['r_id']))
       { 
       	 $restaurant_id=$_GET['r_id'];
         $sql = "SELECT * FROM add_restaurant WHERE r_id = $restaurant_id";
    	 $result = mysqli_query($connection,$sql);
    	 if(!$result)
	       {
	         die("Query Failed".mysqli_error($result));
	       }
	         while ($row=mysqli_fetch_assoc($result))
	        {
	           $r_image= $row['r_image'];
	           $r_name= $row['r_name'];
	           $r_address=$row['r_address'];
	           $r_branch=$row['r_branch'];
	           $r_hotline=$row['r_hotline'];
               $food_type=$row['food_type'];
               $r_type=$row['r_type'];
               $point= $row['point'];
            }
}
    	
  ?>
	


<?php include_once"include/nav.php" ?>
<br><br><br><br><br>
	
	</div>

	<!-- detail -->
<br><br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<img src="owner_dashboard/img/upload/<?php echo $r_image; ?>" class="img-fluid" alt="" style="width: 100%;height: 200px;">
							</div>
							<div class="col-md-6">
								<br><br>
								<?php 
							   if ($point<5)
                                 {
                               	   echo "<i class='fa fa-star-half-o'></i>";
                                 }
                               elseif ($point>=5 && $point<10)
                                 {
                               	   echo "<i class='fa fa-star'></i>";
                                 }
                               elseif ($point>=10 && $point<20)
                                 {
                               	   echo "<i class='fa fa-star'></i>";
                               	   echo "<i class='fa fa-star-half-o'></i>";
                                 }
                               elseif ($point>=20 &&$point<30)
                                 {
                               	   echo "<i class='fa fa-star'></i>";
                               	   echo "<i class='fa fa-star'></i>";
                                 }
                               elseif ($point>=30 && $point<40)
                                 {
                               	   echo "<i class='fa fa-star'></i>";
                               	   echo "<i class='fa fa-star'></i>";
                               	   echo "<i class='fa fa-star-half-o'></i>";
                                 }
                               elseif ($point>=40 && $point<50)
                                 {
                               	   echo "<i class='fa fa-star'></i>";
                               	   echo "<i class='fa fa-star'></i>";
                               	   echo "<i class='fa fa-star'></i>";
                                 }
							 ?>
								<br><br>
								<h3><?php echo $r_name;?></h3>
								<br>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<strong>Address :</strong> <?php echo $r_address;?>
								<br><br>
								<strong>Branch :</strong><?php echo $r_branch; ?>
								<br><br>
								<strong>Hot Line Number :</strong> <?php echo $r_hotline; ?>
								<br><br>
								<strong>Available Food Type :</strong><?php echo $food_type; ?>
								<br><br>	
								<strong>Restaurant Type :</strong> <?php echo $r_type; ?>
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
		        	if (isset($_GET['r_id']))
		        	 {
		        		$restaurant_id = $_GET['r_id'];
		        	 	$sql = "SELECT * FROM add_menu WHERE r_id='$restaurant_id'";
				         $result = mysqli_query($connection,$sql);
				         while($row= mysqli_fetch_assoc($result))
		                 {
				    ?>
							<div class="col-md-3">
								<img src="owner_dashboard/img/menu/<?php echo $row['item_image']; ?>" class="img-fluid" alt="" style="width: 230px;height: 200px;"><br><br>
								<h5 class="text-center"><b><?php echo $row['item_name']?></b></h5>
								<h5 class="text-center"><?php echo $row['item_price']?></h5>
							</div>
					<?php 
		      	          }
		        	 } 
                ?>
				</div>
			</div>

            <div class="col-md-12">
				<style>
					.button{
						padding:0 10px 0 10px;
					}
					.modal-btn{
						border-radius: 95px;
					}
				</style>
				<div class="form-group">
				<h3 class="text-center">Do you recommended restaurant?</h3>
				<br><br>

				<!-- <form class="form-inline"> -->
				  <!-- 	<label for="email"><b>Feedback :</b></label>
				  	<div class="btn-group">
					  &nbsp&nbsp<input type="email" class="form-control" placeholder="Enter Your Email">
				  <input type="submit" class="btn btn-success" value="Continue">
					</div> -->
				<!-- </form> -->
				</div>
				
				<!-- yes -->
				<button class="btn btn-primary col-md-offset-5 button btn-md" id="showModalBox1" data-keyboard="false" data-backdrop="static">Yes</button>
				<div class="modal fade" id="modalBox1" tabindex="-1" >
					<br><br><br><br><br><br>
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title text-center">Why you recommend this restaurant?</h4>
								<button data-dismiss="modal" class="close" >&times;</button>
							</div>
							<div class="modal-body">
								<h3>Review</h3>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>	
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<br><br>
								<input type="hidden" id="point" value="<?php echo $restaurant_id; ?>">
								<div class="pre-scrollable" style="max-height:150px; ">
									<input type="button" class="btn btn-primary modal-btn point " value="CLassic Cocktail">
									<input type="button" class="btn btn-primary modal-btn point " value="scenic views">
									<input type="button" class="btn btn-primary modal-btn point " value="Large Menu">
									<input type="button" class="btn btn-primary modal-btn point " value="Stylish Interior">
									<input type="button" class="btn btn-primary modal-btn point " value="Best Brunch">
									<input type="button" class="btn btn-primary modal-btn point " value="Tasting Menus">
									<input type="button" class="btn btn-primary modal-btn point " value="Best Brunch">
									<input type="button" class="btn btn-primary modal-btn point " value="Cheap eats">
									<input type="button" class="btn btn-primary modal-btn point " value="Cosy Atmosphere">
									<input type="button" class="btn btn-primary modal-btn point " value="Large Wine List">
									<input type="button" class="btn btn-primary modal-btn point " value="Creative Cuisine">
									<input type="button" class="btn btn-primary modal-btn point " value="Large Portion">
									<input type="button" class="btn btn-primary modal-btn point " value="Great Food">
									<input type="button" class="btn btn-primary modal-btn point" value="Hip Atmosphere">
									<input type="button" class="btn btn-primary modal-btn point" value="Romantic Atmosphere"> 
									<input type="button" class="btn btn-primary modal-btn point" value="Healthy Portion">
									<input type="button" class="btn btn-primary modal-btn point" value="Fine Dining">
									<input type="button" class="btn btn-primary modal-btn point" value="Child-friendly">
								</div>
								<br><br>
								<form action="" method="post">
								<textarea name="string" id="" placeholder="What were some of the highlights at ?" cols="50" rows="7"></textarea>
							   </div>
							   <div class="modal-footer">
								<div class="form-group">
									<button class="btn btn-default pull-left" name="submit">Share</button>
									<button data-dismiss="modal" class="btn btn-default pull-left">Cancel</button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
				<!-- No  -->
				<button class="btn btn-primary button btn-md" id="showModalBox2" data-keyboard="false" data-backdrop="static">No</button>
				<div class="modal fade" id="modalBox2" tabindex="-1">
					<br><br><br><br><br><br>
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Why don't you recommended this restaurant?</h4>
								<button data-dismiss="modal" class="close">&times;</button>
							</div>
							<div class="modal-body">
								<h3>Food Quality</h3>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>	
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<br><br>
								<input type="hidden" id="minus_point" value="<?php echo $restaurant_id; ?>">
								<div class="pre-scrollable" style="max-height:90px; ">
									<input type="button" class="btn btn-primary modal-btn minus_point" value="Not child-friendly">
									<input type="button" class="btn btn-primary modal-btn minus_point" value="Small menu">
									<input type="button" class="btn btn-primary modal-btn minus_point" value="Slow service">
									<input type="button" class="btn btn-primary modal-btn minus_point" value="Small portion">
									<input type="button" class="btn btn-primary modal-btn minus_point" value="Noisy">
									<input type="button" class="btn btn-primary modal-btn minus_point" value="Poor presentation">
									<input type="button" class="btn btn-primary modal-btn minus_point" value="Disappointing Food">
			s					</div><br><br>
						 <form action="" method="post">
								<textarea name="string" id="" placeholder="What are some ways> could improve?" cols="50" rows="7">
									
								</textarea>
							   </div>
							<div class="modal-footer">
								<div class="form-group">
									<button class="btn btn-default pull-left" name="submit">Share</button>
									<button data-dismiss="modal" class="btn btn-default pull-left">Cancel</button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			<br><br><br>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#showModalBox1').click(function(){
				$('#modalBox1').modal('show');
			})
			$('#hideModalBox').click(function(){
				$('#modalBox1').modal('hide');
			})
			$('#showModalBox2').click(function(){
				$('#modalBox2').modal('show');
			})
			$('#hideModalBox').click(function(){
				$('#modalBox2').modal('hide');
			});
			// For Yes
			$(".point").click(function()
				{
                   var point=$("#point").val();
                   $.ajax(
                     {
                        url:'point_update.php',
                        method:'POST',
                        data:
	                      {
                            point:point
	                      },
	                    success:function(response)
	                    {
	                    	alert(response);
	                    }

                     });

				});
			 // For No
		          $(".minus_point").click(function()
						{
		                   var minus_point=$("#minus_point").val();
		                   $.ajax(
		                     {
		                        url:'point_minus.php',
		                        method:'POST',
		                        data:
			                      {
		                            minus_point:minus_point
			                      },
			                    success:function(response)
			                    {
			                    	alert(response);
			                    }

		                     });

						});
		});
         
		
	</script>
			<!-- <div class="col-md-6">
				<br><br>
				<form class="form-inline">
				  	<label for="email"><b>Feedback :</b></label>
				  	<div class="btn-group">
					  &nbsp&nbsp<input type="email" class="form-control" placeholder="Enter Your Email">
					  <input type="submit" class="btn btn-success" value="Continue">
					</div>
				</form>
			</div> -->
		</div>
	</div>
<br><br><br><br>
<?php include_once"include/footer.php" ?>