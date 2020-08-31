<?php
$pdo=new pdo('mysql:host=localhost;dbname=submit-form','root',' ');
session_start();
$Name=$_POST['fname'];
$Email=$_POST['email'];
$Phone=$_POST['no'];
$Message=$_POST['message'];

$insert=$pdo->prepare("insert into feedback(Name,Email,Phone,Message) values(:name,:email,:phone,:message)");
$insert->bindParam(':name',$Name);
$insert->bindParam(':email',$Email);
$insert->bindParam(':phone',$Phone);
$insert->bindParam(':message',$Message);

$insert->execute();
header('location:index.html');
?>