<?php 
	$conn = mysqli_connect("localhost","root","","fpttraining");
	if (mysqli_connect_errno()) {
		# code..
		echo "fail".mysqli_connect_errno();
	}
 ?>