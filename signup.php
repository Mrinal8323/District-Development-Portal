<?php

  $hostname = "localhost";
	$user = "root";
	$password = "";
	$dbname = "jbp";
	$conn = mysqli_connect($hostname,$user,$password,$dbname);
  $name = $_POST['uname'];
  $pwd=$_POST['pwd'];
	$email = $_POST['uemail'];
  if($conn){
	$query = "INSERT INTO users(name,email,pwd) VALUES('$name','$email','$pwd')";
	if(mysqli_query($conn,$query)){
		echo " Registeration Successfull";
    header("location:index.html");

	}else{
		echo "Operation failed";
    
	}
}
else {
  echo "connection_aborted";
}
 ?>
