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

	<h1 id='l'>Feedback Form by Debasis Mitra Sir</h1>
	<marquee><h2>WARNING:Please fill the form by yourself in an honest way. 
	Don't impose or let others impose their opinions onto your judgement.
	This is only for IT Dept Students.
	Please do not tamper with the site.</h2></marquee>
	<p id='date'></p>
	<div class="image">
		<img src="Robot.png">
		</div>
		<div id="admin">
		<p><br><br>Admin Login</p>
		<div class="tip">Click here to login as admin</div>
	</div>
	<center>
	<div id="wrong">
		<p>Great!! Your feedback response is submitted successfully. To update the response use the same portal or visit the link below :</p>
		<a href="index.php">Click here</a>
	</div>
	</center>
</body>
	<script> 
			var x=0;//"<?php echo isset($_SESSION['flag'])?$_SESSION['flag']:0;session_unset();?>";
			var y=-1;
		</script>
	<script type="text/javascript" src="Feedback_js.js"></script>
	<script src="Jquery_js.js"></script>
</html>