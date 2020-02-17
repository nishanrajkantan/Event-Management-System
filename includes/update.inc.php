<?php
	include_once 'dbh.inc.php';
	session_start();
if (isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($conn,$_POST['u_']);
	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	$sql2="update users set user_first='".$first."' , user_last='".$last."' , user_email='".$email."', user_uid='".$uid."' , user_pwd='".$hashedPwd."'
	 where user_id='".$_SESSION["u_id"]."'";
	$result = $conn->query($sql2);?>
	<script language="javascript">
		alert("Update Completed");
		window.location.href="../profile.php";
	</script>
	<?php

} 
?>
