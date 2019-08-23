<?php 
// create restaurant
	function create_restaurant()
	{
		if (isset($_POST['create'])) {
			$user_email=$_POST['user_email'];
			$r_name=$_POST['r_name'];
			$r_address=$_POST['r_address'];
			$r_branch=$_POST['r_branch'];
			$r_hotline=$_POST['r_hotline'];
			$food_type=$_POST['food_type'];
			$r_type=$_POST['r_type'];
			$sql="INSERT INTO add_restaurant(user_email,r_name,r_address,r_branch,r_hotline,food_type,r_type) VALUES('$user_email','$r_name','$r_address','$r_branch','$r_hotline','$food_type','$r_type')";
			$result=mysqli_query($connection,$sql);
			if(!$connection)
			{
				die('Queery Failed'.mysqli_error($result));
			}
		}

	}
// add menu
	function add_menu()
	{
		$r_id=$_POST['r_id'];
		$item_name=$_POST['item_name'];
		$item_price=$_POST['item_price'];
		$sql="INSERT INTO add_menu(r_id,item_name,item_price) VALUES('$r_id','$item_name','$item_price')";
		$result=mysqli_query($connection,$sql);
		if(!$connection)
		{
			die('Queery Failed'.mysqli_error($result));
		}

	}
 ?>
