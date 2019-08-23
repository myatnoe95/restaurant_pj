<?php 
   $db['db_host']='localhost';
   $db['db_username']='root';
   $db['db_pass']='';
   $db['db_name']='restaurant_master';
   foreach ($db as $key => $value) 
   {
   	 define(strtoupper($key),$value);
   }
     $connection= mysqli_connect(DB_HOST,DB_USERNAME,DB_PASS,DB_NAME);
     if(!$connection)
    {
      die("Connection Failed".mysqli_error($connection));
    }

     function check_email($u_email)
     {
        $sql= "SELECT * FROM user WHERE u_email='$u_email'";
        $result= $GLOBALS['connection']->query($sql);
        if(mysqli_num_rows($result)==1)
        {
          return true;
        }
        return false;
     }

 ?>