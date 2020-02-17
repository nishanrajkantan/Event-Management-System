<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.createevent-form{
    width: 400px;
    margin:0 auto;
    padding-top: 30px;
}

.createevent-form input{
    width: 90%;
    height: 40px;
    padding: 0px 5%;
    margin-bottom: 4px;
    border:none;
    background-color: #fff;
    font-family: arial;
    font-size: 16px;
    color: #111;
    line-height: 40px;
}

.createevent-form button{
    display: block;
    margin: 0 auto;
    width: 30%;
    height: 40px;
    border:none;
    background-color: #222;
    font-family: arial;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
}

.createevent-form button:hover{
   background-color: #111
}
	</style>
	<?php
	include 'header.php';
?>
	<title></title>
</head>
<body>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Create Event</h2>
		<form class="createevent-form" action="includes/createevent.inc.php" method="POST">
			<input type="text" name="evname" placeholder="Event name">
			<input type="text" name="evlocation" placeholder="Event location">
			<input type="text" name="evdate" placeholder="Event date">
			<input type="text" name="evtime" placeholder="Event time">
			<input type="text" name="evdescription" placeholder="Event Description">
			<input type="text" name="orgname" placeholder="Organiser's name">
            <input type="text" name="att" placeholder="Number of Attendees">
			<button type="submit" name="submit">Create</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
</body>
</html>





