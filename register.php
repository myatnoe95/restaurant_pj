<?php include_once"include/header.php" ?>
<?php include_once"include/db.php" ?>
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
							<div class="home_title">Registeration</div>
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
             if(isset($_POST['register']))
               {
                 $u_name=$_POST['u_name'];
                 $u_email=$_POST['u_email'];
                 $u_pass=$_POST['u_pass'];
                 $hash_password=password_hash($u_pass, true);
                 $sql= "INSERT INTO user (u_name,u_email,u_pass,role) VALUES('$u_name','$u_email','$hash_password','owner')";
                 $result=mysqli_query($connection,$sql);
                 if(!$result)
                  {
                    die("Connection Failed".mysqli_error($result));
                   }

                  header('Location:login.php');
                 }
                 
                
              
              

		 ?> 
      
<!-- Contact form -->
  <div class="col-lg-6 offset-3 contact_col">
     <div class="contact_form">
        <div class="contact_title">Register Form</div>
	      <div class="contact_form_container">
		     <form action="" method="POST" id="contact_form" class="contact_form">
		       <input type="username" name="u_name" id="contact_username" class="contact_input" placeholder="Username" required="required">
		       <input type="email" name="u_email" id="contact_email" class="contact_input" placeholder="Your E-mail" required="required">
		       <input type="password" name="u_pass" id="contact_input" class="contact_input" placeholder="Your Password" required="required">
		       <button type="submit" name="register" class="btn btn-success pull-right" id="contact_button">Register</button>
		     </form>
	      </div>
        </div>
    </div>
  </div>

 

<!-- contact info -->
<!-- <div class="contact_info">
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
</div> -->
	</div>
	</div> 
<?php include_once"include/footer.php"?>