<?php

#first if
if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$evname = mysqli_real_escape_string( $conn , $_POST['evname']);
	$evlocation = mysqli_real_escape_string( $conn , $_POST['evlocation']);
	$evdate = mysqli_real_escape_string( $conn , $_POST['evdate']);
	$evtime = mysqli_real_escape_string( $conn , $_POST['evtime']);
	$evdescription = mysqli_real_escape_string( $conn , $_POST['evdescription']);
	$orgname = mysqli_real_escape_string( $conn , $_POST['orgname']);
	$attend = mysqli_real_escape_string( $conn , $_POST['att']);

	//Error handelers
	//Check for empty field
	#second if
	if (empty($evname) || empty($evlocation) || empty($evdescription) || empty($orgname)) {
		header("Location: ../createevent.php?createevent=empty");
		exit();
	} else {
			//Inser the user into the database
			$sql = "INSERT INTO events (event_name , event_location , event_date , event_time , event_description , orgname , attendees ) VALUES ('$evname','$evlocation','$evdate','$evtime','$evdescription','$orgname' , '$attend');";
			mysqli_query($conn , $sql);
			header("Location: ../createevent.php?createevent=success");
			exit();
			}
			
		
	

} /*first else*/ else {
	header("Location: ../createevent.php");
	exit();
}