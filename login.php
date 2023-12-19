
<?php
session_start();
include("inc/connections.php");
if(isset($_POST["username"]) && isset($_POST["password"])){
$username = stripcslashes(strtolower($_POST["username"]));
$md5_pass= md5($_POST["password"]);
$username= filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");
$username=htmlentities (mysqli_real_escape_string($conn, $_POST["username"]));
$password = htmlentities(mysqli_real_escape_string($conn,$_POST["password"]));

if (empty($username)){
    $user_error = '<p id="error" >Please insert username <p>';
    $err_s = 1;

    }

if (empty($password)){
 $pass_error = '<p id="error" >Please insert Password <p>';
 $err_s = 1;
include("index.php");
 }

}
if(!isset($err_s)){
$sql = "SELECT id, username FROM users WHERE username='$username' AND md5_pass='$md5_pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['username']) && isset($_POST['password'])){
$_SESSION["username"] = $row["username"];
$_SESSION["password"] = $row["password"];
$_SESSION["id"] = $row["id"];
header('Location:home.php');
exit();

 }else{$user_error = '<p id="error" >worng username or password !<p>'; 
    include("index.php");
    exit();
   }
}
?>