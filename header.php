<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style type="text/css">
		.createButton{
	    background-color: #4CAF50;
	    border: none;
	    color: white;
	    padding: 30px 50px;
	    text-align: center;
	    font-size: 16px;
	    cursor: pointer;
	    position: absolute;
	    top: 200px;
	    left: 140px;
		}

		.createButton:hover {
		    background-color: green;
		}

		.viewButton{
	    background-color: #4CAF50;
	    border: none;
	    color: white;
	    padding: 30px 50px;
	    text-align: center;
	    font-size: 16px;
	    cursor: pointer;
	    position: absolute;
	    top: 200px;
	    left: 520px;
		}

		.viewButton:hover {
		    background-color: green;
		}

		.updateButton{
	    background-color: #4CAF50;
	    border: none;
	    color: white;
	    padding: 30px 50px;
	    text-align: center;
	    font-size: 16px;
	    cursor: pointer;
	    position: absolute;
	    top: 200px;
	    left: 900px;
		}

		.updateButton:hover {
		    background-color: green;
		}
		.calculator{
	    background-color: #E11717;
	    border: none;
	    color: white;
	    padding: 30px 50px;
	    text-align: center;
	    font-size: 16px;
	    cursor: pointer;
	    position: absolute;
	    top: 375px;
	    left: 140px;
		}

		.calculator:hover {
		background-color: #BA3535;
		}

		.updateButton:hover {
		    background-color: green;
		}
		.updateProfile{
	    background-color: #3FA8DF;
	    border: none;
	    color: white;
	    padding: 30px 30px;
	    text-align: center;
	    font-size: 16px;
	    cursor: pointer;
	    position: absolute;
	    top: 80px;
	    left: 940px;
		}

		.updateProfile:hover {
		    background-color: #3487B3;
		}

		.main-container h1{
   		font-family: arial;
    	font-size: 50px;
    	color: #111;
    	line-height: 50px;
    	text-align: center;
}
	</style>
</head>
<body>


<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php"><h2>Home</h2></a></li>
			</ul>
			<div>
			<ul>
				<li><img src="logo.png" alt="logo" width="85" height="55"></li>
			</ul>
			</div>
			<div class="nav-login">
				<?php 
					if (isset($_SESSION['u_id'])) {
						echo '
							<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
							</form>
							';
					} else{
						echo '
							<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="username/email">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">LOGIN</button>
							</form>
							<a href="signup.php">SIGN UP</a>
							';
						}
				?>
				
				
			</div>
		</div>
	</nav>
</header>