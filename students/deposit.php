<?php
		require 'connection.php';
	$year=2017;
	$id=NULL;
	$comt=isset($_POST["comt"])?$_POST["comt"]:NULL;
	$q1=isset($_POST["q1"])?$_POST["q1"]:0;
	$q2=isset($_POST["q2"])?$_POST["q2"]:0;	
	$q3=isset($_POST["q3"])?$_POST["q3"]:0;	
	$q4=isset($_POST["q4"])?$_POST["q4"]:0;	
	$q5=isset($_POST["q5"])?htmlspecialchars($_POST["q5"]):0;	
	if($q1==0 && $q2==0 && $q3==0 && $q4==0 && $q5==0){
		header('Location:Form.php',true,303);
	}
	else{
		$conn=new mysqli($servername,$username,$password,$database);
		if ($conn->connect_error) {
			die("<h1>Fatal Connection error</h1>".$conn->connect_error());
		}
		if($stmt=$conn->prepare("insert into resp(year,id,comt,q1,q2,q3,q4,q5) values(?,?,?,?,?,?,?,?)")){
			$stmt->bind_param("issiiiii",$year,$id,$comt,$q1,$q2,$q3,$q4,$q5);
			$stmt->execute();
			header('Location:success.php',true,303);
		}
	}
?>