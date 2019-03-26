<?php
require "config.php";
$arr=[];
    try {
		$connection=new PDO($dsn,$username,$password,$options);  
		$sql="INSERT into test(task,position,dueTask) values(:task,:position,:dueTask)";
		$statment=$connection->prepare($sql);
		$statment->bindParam(":task", $_POST['task'],PDO::PARAM_STR);
		$statment->bindParam(":position",$_POST['radio'],PDO::PARAM_STR);
		$statment->bindParam(":dueTask",$_POST['date'],PDO::PARAM_STR);
		$statment->execute();
		$message="Task Added Successfully";
		echo json_encode($message);     
	}
	catch (PDOException $error) {
		echo "in the error";
		echo $sql. "<br>". $error->getMessage();
	}
?>