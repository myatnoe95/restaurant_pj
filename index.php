<?php include_once"include/header.php"; ?>
<?php include_once"include/db.php"; ?>
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style type="text/css">
	.header_nav_container
{
	background: #C10A28;
}


</style>
<div class="super_container">
	<?php include_once"include/nav.php" ?>
	</div>
	<br><br><br><br>

	<!-- slide -->
	<br><br>
	<div id="demo" class="carousel slide" data-ride="carousel">

	 <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>

	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/kfcs.jpg" class="apple" alt="Los Angeles">
	    </div>
	    <div class="carousel-item">
	      <img src="images/swensens.jpg" class="apple" alt="Chicago">
	    </div>
	    <div class="carousel-item">
	      <img src="images/tomntoms.jpg"  class="apple" alt="New York">
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>

	<!-- Info Boxes -->

<div class="info">
	<div class="container">
		<div class="row row-eq-height">

	<!-- Info Box -->
		<div class="col-lg-3 info_box_col">
			<div class="info_box">
				<div class="info_image"><img src="images/info_1.jpg" alt=""></div>
				<div class="info_content">
					<div class="info_title">Couple Date</div>
					<div class="info_text">Great places for <span>Couples</span> to hangout</div>
					<div class="button info_button"><a href="restaurant_type.php?r_type=Couple"><span>View more</span><span>View more</span></a></div>
				</div>
			</div>
		</div>

	<!-- Info Box -->
	<div class="col-lg-3 info_box_col">
			<div class="info_box">
				<div class="info_image"><img src="images/info_2.jpg" alt=""></div>
				<div class="info_content">
					<div class="info_title">Chilling with Friend</div>
                    <div class="info_text">Places to chill with <span>friends</span> in Yangon</div>
					<div class="button info_button"><a href="restaurant_type.php?r_type=Friend"><span>View more</span><span>View more</span></a></div>
				</div>
			</div>
		</div>

	<!-- Info Box -->
		<div class="col-lg-3 info_box_col">
			<div class="info_box">
				<div class="info_image"><img src="images/info_3.jpg" alt=""></div>
				<div class="info_content">
					<div class="info_title">Time with Family</div>
					<div class="info_text">Spent time with <span>family</span> in great places</div>
					<div class="button info_button"><a href="restaurant_type.php?r_type=Family"><span>View more</span><span>View more</span></a></div>
				</div>
			</div>
		</div>
                
		<div class="col-lg-3">
			<div class="news_sidebar">
		<!-- Categories -->
			<div class="sidebar_categories">
			<div class="sidebar_title">Types of Food</div>
			<div class="categories pre-scrollable">
				<ul>
					<?php 
	                  $sql= "SELECT * FROM food_type";
	                  $result= mysqli_query($connection,$sql);
	                  if(!$result)
	                  {
	                  	die("Query Failed".mysqli_error($result));
	                  }
	                  while ($row=mysqli_fetch_assoc($result))
	                  {
	                ?>
	                  	<li><a href="restaurant_foodtype.php?foodtype_name=<?php echo $row['name']; ?>"><div class="d-flex flex-row align-items-center justify-content-start"><div><?php echo $row['name']; ?></div></div></a></li>
	                <?php	 
		     		  }
					 ?>			
				</ul>						
			</div>
			</div>
			</div>
		</div>
		</div>
	</div>
</div>
	<div class="d-none d-md-block d-lg-block">
		<div class="boxes d-flex flex-sm-row flex-column align-items-start justify-content-start">
				
		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/foodtip1.jpeg);"></div>
			<div class="box_text foodtip">Food is not just eating energy. It's an experience. Good food is good mood. </div>
		</div>

		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/foodtip2.jpeg);"></div>
			<div class="box_text foodtip">The best way to celebrate the holidays is with some delicious food.Good food is good mood. </div>
			</div>

		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/foodtip3.jpeg)"></div>
			<div class="box_text foodtip">People who love to eat are the best people. Food is always a good idea.  </div>
		</div>

		</div>
	</div>
</div>

	<!-- Footer -->
		<?php include_once"include/footer.php"?>