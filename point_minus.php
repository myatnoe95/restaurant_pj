<?php 
  $con=new mysqli('localhost','root','','restaurant_master');
  $minus_point=$_POST['minus_point'];
  $sql= "UPDATE add_restaurant set point=point-1 WHERE r_id='$minus_point'";
  if($con->query($sql)===TRUE)
	  {
	  	echo"Thank for Your Feedback";
	  }

?>