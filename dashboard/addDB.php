<?php
session_start();
include '../connection_db.php';

extract($_POST);

$img=$_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name , "img/$img");

$addBook="INSERT INTO books(`name`, `img`, `cat_id`) VALUES ('$name','$img','$cat')";

if(mysqli_query($conn,$addBook)){
    $_SESSION['action']='تم اضافة كتاب واحد';
    header('location:books.php');

 }else {
     echo mysqli_error($conn);
 }

?>