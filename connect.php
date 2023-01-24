<?php
 $name = $_POST['Name'];
 $password = $_POST['password'];
 $MAILID = $_POST['MAILID'];
 $DB = $_POST['DB'];   

 $conn = new mysqli('localhost','root','','test2');
 if($conn->connect_error){
     die('Connection Failed  :' .$CONN->connect_error);
 }else{
     $stmt = $conn->prepare("insert into registration(name,password,MAILID,DB) values(?,?,?,?)");
     $stmt->bind_param("sisi",$name,$password,$MAILID,$DB);
     $stmt->execute();
     echo "registration successfully....";
     $stmt->close();
     $conn->close();
    }

?>