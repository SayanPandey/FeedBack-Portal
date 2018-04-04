<?php
	session_start();
		require 'connection.php';
		$err=0;
		$mail='';
		$flag=0;
		//Avoids NULL value
		if(isset ($_POST["mail"])){
			$mail=htmlspecialchars($_POST["mail"]);
		}
		else
			header('Location:/feedbackTest/students',true,303);
		if($stmt = $conn->prepare("Select * from mail where mail_id=?")){ 
		$stmt->bind_param("s",$mail);
		$stmt->execute();
		}
		$result=$stmt->get_result();
		if($result->num_rows){
			$flag=1;
			$_SESSION['flag']=$flag;
			header('Location:Form.php',true,303);
		}
		if($mail!='' and $flag==0){
			$err=1;
			$_SESSION["error"]=$err;
			header('Location:/feedbackTest/students',true,303);
		}
?>