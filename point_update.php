<?php 
  $con=new mysqli('localhost','root','','restaurant_master');
  $point=$_POST['point'];
  $sql= "UPDATE add_restaurant set point=point+2 WHERE r_id='$point'";
  if($con->query($sql)===TRUE)
	  {
	  	echo"Thank for Your Feedback";
	  }

?>