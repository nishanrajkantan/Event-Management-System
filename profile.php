<!DOCTYPE html>
	<?php
	include_once 'includes/dbh.inc.php';
	include_once 'header.php';
	?>
<html>
<head>

<style type="text/css">
#profileedit{
	background: #767EE6;
	margin-bottom: 30px;
	text-align: center;
}

</style>
</head>
<body>
	<h1>Edit Profile</h1>
	<?php
		//$result = $conn->prepare($sql);
		//$result = mysqli_query($conn, $sql);
		//$result->execute();
 		// $stmt = $conn->prepare($sql);
  		// $stmt->execute();
   		 //$stmt->bind_result($user_first);
   		 //$stmt->fetch();
		$sql="select * from users where user_id='".$_SESSION['u_id']."'";
		$result = $conn->query($sql);
		while ($row = $result->fetch_array(MYSQLI_ASSOC))
		{
  		  $name1 = $row['user_first'];
  		  $name2 = $row['user_last'];
  		  $name3 = $row['user_email'];
  		  $name4 = $row['user_uid'];
  		  $name5 = $row['user_pwd'];
		}
		?>
		<hr>
		<div id="profileedit">
		<form class="profile" action="includes/update.inc.php" method="POST" >
			<p><br>First Name: <input type="text" name="first" value="<?=$name1 ?>"></p></br>
			<p><br>Last Name: <input type="text" name="last" value="<?=$name2 ?>"></p></br>
			<p><br>Email: <input type="text" name="email" value="<?=$name3 ?>"></p></br>
			<p><br>User ID: <input type="text" name="uid" value="<?=$name4 ?>"></p></br>
			<p><br>Password: <input type="text" name="pwd" ></p></br>
			<p><input type="submit" name="submit" value="Update"></p>
		</form>
		</div>
</body>
</html>