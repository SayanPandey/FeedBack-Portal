<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<script src="jquery3.3.1.js"></script> 
		<link rel="stylesheet" type="text/css" href="Feedback_css.css">
		<title>Feedback_it</title>
	</head>
<body>

	<h1 id='l'>Students' Feedback Form</h1>
	<marquee><h2>WARNING:Please fill the form by yourself in an honest way. 
	Don't impose or let others impose their opinions onto your judgement.
	This is only for IT Dept Students.
	Please do not tamper with the site.</h2></marquee>
	<p id='date'></p>
	<center>
	<div class="Valiform">
	<form action="Validity.php" name="form1" method="post">
		<p><span class="fhead"><b>College e-mail id:</b></span><br></p>
		<b><input type="text" name="mail" autofocus required></b><br>
		<p>The e-mail id is of the form : <span class="fhead"><b>" sp.20150213@btech.nitdgp.ac.in "</b></span><br></p>
		<input type="submit" value="Submit">
		<input type="reset" onclick="Reset()" value="Reset">
		<span id="err"><br><br><p>Sorry!! please reset and enter valid college e-mail ID.</p></span>
	</form>
	</div>
	</center>
		<div class="image">
		<img src="Robot.png">
		</div>
		<div id="admin">
		<p><br><br>Admin Login</p>
		<div class="tip">Click here to login as admin</div>
		</div>
</body>
		<script>
			var x=-1;
			var y=<?php echo isset($_SESSION['error'])?$_SESSION['error']:0; session_unset();?>
		</script>
		<script type="text/javascript" src="Feedback_js.js"></script>
		<script src="Jquery_js.js"></script>
</html>