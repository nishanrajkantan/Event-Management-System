<?php
	include 'header.php';
?>


<section class="main-container">
	<div class="main-wrapper">
		
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "<h2>My Account</h2>
				<a href='createevent.php'><button class='createButton'>Create Event</button></a>
				<a href='viewevent.php'><button class='viewButton'>View Events</button></a>
				<a href='updateevent.php'><button class='updateButton'>Edit/Update Events</button></a>
				<a href='profile.php'><button class='updateProfile'>Edit/Update Profile</button></a>
				<h2><br><br><br>Utilities</h2>
				<a href='calculate.php'><button class='calculator'>Budget Calculator</button></a>
				"; }else{
					echo"<h1>Welcome to Eventer!</h1>
					<h2><br>Please login or sign up to proceed.</h2>

					";
				}

			
		?>	
	</div>
</section>


<?php
	include 'footer.php';
?>
