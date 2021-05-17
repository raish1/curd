<?php
include_once"db.php";
$rowcount="";
if(!isset($_POST['submit'])){
	$user_id = $_GET['my_id'];
	$sql="SELECT*FROM curd144 Where id='".$user_id."'";
	$query=mysqli_query($conn,$sql);
	$rowcount = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	$user_name = $row['username'];
}
if($rowcount==1){
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		//$user_edit_id = $_POST['user_edit_id'];
			$sql_update = "UPDATE curd144 SET username='".$username."' where id='".$user_edit_id."'";
			if($conn->query($sql_update)===TRUE){
				header("location: home.php");
		}else{
			echo "error".$sql_update."</br>".$conn->connection_error;
		}
	}
	$conn->close();
}

?>
<html>
<body>
<form action="update.php" method="post">
<input type="hidden" name="user_edit_id" value="<?php echo $user_id;?>"/>
<tr>
   <th>Username</th>
   <td><input type="text" name="username" value="<?php echo $user_name;?>"/></td></br></br>
</tr>
<tr>
  <td><input type="submit" name="submit" value="update"/></td>
</tr>
</form>
</body>
</html>