<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<script src="jquery3.3.1.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"> 
		<title>Feedback_it</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="Feedback_css.css">
</head>
<body>
	<h1 id='r'>Feedback Form by Debasis Mitra Sir</h1>
	<marquee><h2>WARNING:Please fill the form by yourself in an honest way. 
	Don't impose or let others impose their opinions onto your judgement.
	This is only for IT Dept Students.
	Please do not tamper with the site.</h2></marquee>
	<p id='date'></p>
	<center>
	<div class="Thank" id="Thank">
		<p>Your are now anonymous. Feel free to share your thoughts, suggestions and complains in the comments section. 
		Thank for your precious feedback.</p>
	</div>
	<div id="fform">
		<form action="deposit.php" method="POST">
			<span class='question'>"1.How will you rate your experience with the Teacher ?"<br></span>
			
			<div class="rate" onmouseover="this.style.cursor='pointer'" >
				<i class="material-icons" onclick="glow(0,1)">star_half</i>
				<i class="material-icons" onclick="glow(0,3)">star_half</i>
				<i class="material-icons" onclick="glow(0,5)">star_half</i>
				<i class="material-icons" onclick="glow(0,7)">star_half</i>
				<i class="material-icons" onclick="glow(0,9)">star_half</i>
				<input type="hidden" name="q1" value="1">
			</div>
			
			<span class='question'>"2.Was the course completion satisfactory?"<br></span>
			
			<div class="rate" onmouseover="this.style.cursor='pointer'" >
				<i class="material-icons" onclick="glow(1,1)">star_half</i>
				<i class="material-icons" onclick="glow(1,3)">star_half</i>
				<i class="material-icons" onclick="glow(1,5)">star_half</i>
				<i class="material-icons" onclick="glow(1,7)">star_half</i>
				<i class="material-icons" onclick="glow(1,9)">star_half</i>
				<input type="hidden"name="q2" value="1">
			</div>
			
			<span class='question'>"3.What do you think about the study material provided during the course?"<br></span>
			
			<div class="rate" onmouseover="this.style.cursor='pointer'" >
				<i class="material-icons" onclick="glow(2,1)">star_half</i>
				<i class="material-icons" onclick="glow(2,3)">star_half</i>
				<i class="material-icons" onclick="glow(2,5)">star_half</i>
				<i class="material-icons" onclick="glow(2,7)">star_half</i>
				<i class="material-icons" onclick="glow(2,9)">star_half</i>
				<input type="hidden" name="q3" value="1">				
			</div>
			
			<span class='question'>"4.Was the teacher approachable for clearing doubts?"<br></span>
			
			<div class="rate" onmouseover="this.style.cursor='pointer'" >
				<i class="material-icons" onclick="glow(3,1)">star_half</i>
				<i class="material-icons" onclick="glow(3,3)">star_half</i>
				<i class="material-icons" onclick="glow(3,5)">star_half</i>
				<i class="material-icons" onclick="glow(3,7)">star_half</i>
				<i class="material-icons" onclick="glow(3,9)">star_half</i>
				<input type="hidden" name="q4" value="1">				
			</div>
			
			<span class='question'>"5.What you believe about the assignments provided during the course?"<br></span>
			
			<div class="rate" onmouseover="this.style.cursor='pointer'" >
				<i class="material-icons" onclick="glow(4,1)">star_half</i>
				<i class="material-icons" onclick="glow(4,3)">star_half</i>
				<i class="material-icons" onclick="glow(4,5)">star_half</i>
				<i class="material-icons" onclick="glow(4,7)">star_half</i>
				<i class="material-icons" onclick="glow(4,9)">star_half</i>
				<input type="hidden" name="q5" value="1">				
			</div>
			
			<span class='question'>"6.Your comments can serve as great feedback to improve 
			teaching learning process,do not hesitate to express."<br><br></span>
			<span class="question">Your COMMENTS HERE :</span>
			Characters left : <span id="count">300</span>
			<div class="rate">
				<textarea name="comt" id="cmt" onkeyup="count(this)" onfocus="this.style.boxShadow='0px 0px 90px white'"></textarea>
			</div>
			<br>
			<input type="Submit">
		</form>
	</div>
	<br><br><br>
	<div class="image">
	<img src="Robot.png">
	</div>
	<div id="admin">
		<p><br><br>Admin Login</p>
		<div class="tip">Click here to login as admin</div>
	</div>
	<div id='wrong'>
		<p>Ooops !! Seems that you are on a wrong page.Please Visit the link below to provide your feedback.</p>
		<a href="Feedback.php">Click here</a>
	</div>
	</center>
</body>
		<script> 
			var x = "<?php echo isset($_SESSION['flag'])?$_SESSION['flag']:0;session_unset();?>";
			var y=-1;
		</script>
		<script src="Jquery_js.js"></script>
		<script type="text/javascript" src="Feedback_js.js"></script>
</html>
