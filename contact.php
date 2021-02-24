<?php
require("dbconnect.php");
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

if(empty($name) || empty($visitor_email) || empty($message))
{
 	header("location:index.php?msg=blank");
}
else
{
		$query = "insert into tbl_test values(NULL,'$name','$visitor_email','message')";
		mysqli_query($connection,$query);

		// redirect
		header("location:index.php?insert=succes");
}

           
?>
