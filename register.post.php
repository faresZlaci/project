<?php
include("inc/connections.php");
if(isset($_POST["submit"])){
$username = stripcslashes(strtolower ($_POST["username"]));
$email = stripcslashes( $_POST["email"]);
$password = stripcslashes($_POST["password"]);
$gender = stripcslashes($_POST["gender"]);



$username =htmlentities(mysqli_real_escape_string ($conn,$_POST["username"]));
$email =htmlentities(mysqli_real_escape_string ($conn,$_POST["email"]));
$password =htmlentities(mysqli_real_escape_string ($conn,$_POST["password"]));
$gender =htmlentities(mysqli_real_escape_string ($conn,$_POST["gender"]));
$md5_pass =md5($password);

$sql="INSERT INTO users(username,email,password,gender,md5_pass)
VALUES ('$username','$email','$password','$md5_pass','$gender')";

mysqli_query ($conn, $sql);

}

?>