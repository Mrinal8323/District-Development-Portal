<?php
$hostname = "localhost";
	$user = "root";
	$password = "";
	$dbname = "jbp";

	$conn = mysqli_connect($hostname,$user,$password,$dbname);
  if ($conn) {
    $uname = $_POST['uname'];
		$password = $_POST['pwd'];
		$query = "select pwd from users where email = '$uname'";
		$result = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($result);
		if($data['pwd'] == $_POST['pwd']){
		echo	 "Login Successful";

		}else{
			echo "Invalid username / password";

		}

  }


 ?>
