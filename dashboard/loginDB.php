<?php
session_start();
$_SESSION['errors']=[];
$_SESSION['post']=$_POST;

include '../connection_db.php';

if(isset($_GET['action'])){
  session_destroy();
  header("location:login.php");
}

$useremail=$_POST['email'];
$userPass=$_POST['pass'];

$getUsers = "SELECT * FROM admins where email='$useremail'";
$getAllUsers = mysqli_query($conn,$getUsers);
$users=mysqli_fetch_assoc($getAllUsers);
$emailDB=$users['email'];
$passDB =$users['password'];

if($useremail == $emailDB){
  if($userPass == $passDB){
    header("location:index.php");

  }else{
    $_SESSION['errors']="The password is wrong";
    header("location:login.php");
  }
}else{
  $_SESSION['errors']="The email is wrong";
  header("location:login.php");
}


?>