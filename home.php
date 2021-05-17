<?php
require"db.php";
$result=$conn->query("SELECT*FROM curd144");

?>
<html>
<head>
  <style>
    body{background-color:orange;}
   table,th,td{
	    border: 1px solid black;
   }
   table{
	   width: 100%;
   }
  </style>
</head>
<body>
   <table>
      <tr>
	    <th>username</th>
		<th>update</th>
		<th>delete</th>
	  </tr>
	  <?php while($row=mysqli_fetch_array($result)){?>
	   <tr>
	     <td><?php echo $row['username'];?></td>
		 <td><a href="update.php?my_id=<?php echo $row['id'];?>"/>Edit</a></td>
		 <td><a href="delete.php?my_id=<?php echo $row['id'];?>"/>Delete</a></td>
	   </tr>
	  <?php }?>
   </table>
</body>
</html>