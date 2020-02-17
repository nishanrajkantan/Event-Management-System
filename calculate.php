
<!DOCTYPE html>
	<?php
	include_once 'includes/dbh.inc.php';
	include_once 'header.php';
	?>
<html>
<head>
	<title>Budget Calculator</title>
	<script type="text/javascript">
function calculator(){
	var fee = 0;
	var sponsor = 0;
	var food = 0;
	var stagefee = 0;
	var expense1 = 0;
	var expense2 = 0;
	var people = document.forms["input"]["people"].value;
	fee = document.forms["input"]["fee"].value;
	sponsor = document.forms["input"]["sponsor"].value;
	food = document.forms["input"]["food"].value;
	stagefee = document.forms["input"]["stagefee"].value;
	expense1 = document.forms["input"]["expense1"].value;
	expense2 = document.forms["input"]["expense2"].value;
	var totalprofit = people*fee + +sponsor;
	var totalliability = +food + +stagefee + +expense1 + +expense2;
	var cleanprofit = totalprofit - totalliability;
	alert("Your total profit is : RM"+cleanprofit);
}
	</script>

<style type="text/css">
#sentence{
	display: inline-block;
	width:70%;
	text-align:left;
	font-family: arial;
	float:left;
	font-size: 17px;
}
#input{
	width:30%;
	display: inline-block;
}
#budget{
	height:50px;
	width:100%;
	border:3px solid green;
	border-radius:3px;
	font-family: calibri;
	font-size: 25px;
	color: #222;
	text-align:center;
}

#bigdiv{
	text-align: left;
	max-width:800px;
	padding-left:250px;
	height: 240px;
}
</style>
</head>
<body>
		<div id="budget" align="center">Event Budget Calculator</div>
		<hr>
		<div id="bigdiv">
		<div id="left"><div>
		<div id="sentence" align="center">
			<br>
	<p>	Expected number of participants:
	</p>
	<p>
 		Entry fees per person(RM):
	</p>
	<p>
		Sponsor(If any,RM):
	</p>
	<p>
		Food/Beverages expenses(RM):
	</p>
	<p>
		Stage Equipment fees(RM):
	</p>
	<p>
		Prize budget (If any) (RM):
	</p>
	<p>
		Other expenses (If any) (RM):
	</p>
	</div>
	<div>
	<form id="input" onsubmit="calculator()">
	<p><input type="number" name="people" placeholder="number of people" />
	</p>
	<p><input type="number" name="fee" placeholder="$ per person" />
	</p>
	<p><input type="number" name="sponsor" placeholder="$ from sponsor" />
	</p>
	<p><input type="number" name="food" placeholder="$ for beverages" />
	</p>
	<p><input type="number" name="stagefee" placeholder="$ for stagefee" />
	</p>
	<p><input type="number" name="expense1" placeholder="$ for prize" />
	</p>
	<p><input type="number" name="expense2" placeholder="0" />
	</p>		
	<p>
	</div>
	<hr>
		<div align="center">
	<input type="submit" value="Calculate" style="font-size: 30px"></div>
	</p>

	</form>
</div>
</body>
</html>