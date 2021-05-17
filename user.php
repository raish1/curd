<?php
require"db.php";
if(isset($_POST["submit"])){
	$username=$_POST['username'];
	if($username!=""){
		$sql = "INSERT INTO curd144(username) VALUES('".$username."')";
		if($conn->query($sql)===TRUE){
			header("location: home.php");
		}else{
			echo "error".$sql."</bt>".$conn->crror;
		}
		$conn->close();
	}else{
		echo "data is not founded";
	}
}
?>