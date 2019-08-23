<?php include_once"include/db.php" ?>
<?php include_once"include/header.php" ?>
<div class="super_container">

	<!-- Menu -->
<?php include_once"include/nav.php" ?>
<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
	</div>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Login Form</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	<div class="contact">
		<div class="container">
			<div class="row">
				<?php 
				   if (isset($_POST['login']))
				     { 
				       $u_email= $_POST['email'];
				       $u_pass= $_POST['password'];
				   	   $sql= "SELECT * FROM user WHERE u_email='$u_email'";
				   	   $result= mysqli_query($connection,$sql);
				   	   while ($row=mysqli_fetch_assoc($result))
				   	    {
				   	   	  $db_id =$row['u_id'];
				   	   	  $db_username= $row['u_name'];
				   	   	  $db_email = $row['u_email'];
				   	   	  $db_pass = $row['u_pass'];
				   	   	  $db_role = $row['role'];
				   	    }
				   	  if($db_pass!= password_verify($u_pass, $db_pass))
					   	  {
					   	     header('Location:login.php');
					   	  }
				   	   else if ($u_pass=password_verify($u_pass, $db_pass))
				   	      {
					   	      $_SESSION['u_name']=$db_username;
					   	      $_SESSION['u_email']=$db_email;
					   	      $_SESSION['u_pass']=$db_pass;
					   	      $_SESSION['u_id']=$db_id;
					   	      $_SESSION['role']=$db_role;
				   	        if ($db_role=='admin') 
					   	      {
					   	      	header('Location:admin_dashboard/index.php');
					   	      }
				   	   		if ($db_role=='owner')
					   	      {
					   	      	header('Location:owner_dashboard/index.php');
					   	      }
				   	      } 	
				   	   else
                          {
                          	header('Location:login.php');
                          }

				   	    }
				 ?>

				<!-- Contact form -->
				<div class="col-lg-5 img-thumbnail" style="background-image: url(images/about.jpg);">
				</div>
				<div class="col-lg-6 offset-1 contact_col">
					<div class="contact_form">
						<div class="contact_title">WELCOME!!</div>
						<div class="contact_form_container">
							 <form action=" " method="POST" id="contact_form" class="contact_form">
								<input type="email" name="email" id="contact_email" class="contact_input" placeholder="Enter Your E-mail" required="required">
								<input type="password" name="password" id="contact_input" class="contact_input" placeholder="Enter Your Password" required="required">
								<button type="submit" name="login" class="btn btn-success btn-block" id="contact_button">Login</button>
								<button type="submit" class="btn btn-info btn-block" id="contact_button">Sign in with Facebook</button>
								<br>
							    <div>
							    <strong>CREATE NEW ACCOUNT </strong><a href="register.php"><strong>Register Here</strong></a>
                                </div>
                            </form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

				<!-- contact info -->
				<div class="contact_info">
					<div class="row">
						<div class="col-lg-3 offset-lg-1">
							<div class="contact_info_list">
								<div class="contact_info_title">Contact Info</div>
								<ul>
									<li><span>Address: </span>Green Hacker Institute</li>
									<li><span>Email: </span>khingsunthwe@gmail.com</li>
									<li><span>Phone: </span>+959 420 260 554</li>
								</ul>
					        </div>
				        </div>
			        </div>
		        </div>
	</div>


<?php include_once"include/footer.php"?>