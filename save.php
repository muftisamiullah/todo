
<?php
require "config.php";

  $arr=[];
    try {
      echo  $_POST['task'];
         $connection=new PDO($dsn,$username,$password,$options);  
         $sql="INSERT into test(task,position,dueTask) values(:task,:position,:dueTask)";
         $statment=$connection->prepare($sql);
         $statment->bindParam(":task", $_POST['task'],PDO::PARAM_STR);
          $statment->bindParam(":position",$_POST['radio'],PDO::PARAM_STR);
          $statment->bindParam(":dueTask",$_POST['date'],PDO::PARAM_STR);
          $statment->execute();
          $arr['success']=true;
          ?>

          <script>
          console.log('<?= 'Sucessfully added task'?>');
         
          </script>
<?php
             
    } catch (PDOException $error) {
      
      echo "in the error";
        echo $sql. "<br>". $error->getMessage();
    
}
$response = array(
  'status' => true,
  'message' => 'Success',
);
header("Content-Type: application/json; charset=utf-8", true);
echo json_encode($response);


?>

  