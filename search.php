<?php include_once"include/header.php"?>
<?php include_once"include/db.php" ?>
<style type="text/css">
	
</style>

<div class="super_container">

<?php include_once"include/nav.php"?>
	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
	</div>


		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Restaurants In Yangon</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Doctors -->

	<div class="doctors">
		<!-- <div class="doctors_image"><img src="images/doctors.jpg" alt=""></div> -->
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"> Search By Restaurant</div>
					
				</div>
			</div>
			<div class="row doctors_row">
					<?php 
	                  if (isset($_POST['submit']))
	                   {
	                  	  $search=$_POST['search'];
	                  	  $query="SELECT * FROM add_restaurant WHERE r_name LIKE '%$search%'";
	                  	  $result= mysqli_query($connection,$query);
	                  	  if(!$result)
	                  	  {
	                  	  	die("Query Failed".mysqli_error($result));
	                  	  }
	                  	  $count= mysqli_num_rows($result);
	                  	  if($count>0)
	                  	  {
	                  	  	while($row=mysqli_fetch_assoc($result))
	                  	  	{
	                  	  		$r_id=$row['r_id'];
	                  	  		$r_name=$row['r_name'];
	                  	  		$r_image=$row['r_image'];
	                  	  	?>

	                  	  	<div class="col-xl-3 col-md-6">
								<div class="doctor">
									<div class="doctor_image"><img src="owner_dashboard/img/upload/<?php echo $row['r_image']; ?>" width="270px" height="300px" alt="">
									</div>	
									<div class="doctor_content">
										<div class="doctor_name">
										<a href="restaurant_detail.php?r_id=<?php echo $row['r_id']?>"><?php echo $row['r_name']?>
											</a>
										</div>
										<i class="fa fa-star"></i>
					                    <i class="fa fa-star"></i>
					      			</div>
								</div>
				            </div>
				            <?php  
	                  	  }
	                   }
	                 }  
	                        ?> 
			</div>
		</div>
	</div>
	
		<?php include_once"include/footer.php" ?>