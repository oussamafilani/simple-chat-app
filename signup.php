<?php
include 'dbh.php';
$uname=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['Password'];

$sql="INSERT INTO signup(username,email,password) VALUES ('$uname','$email','$pass')";
$result=$conn->query($sql);


header('Location:index.php');


?>