<?php 
session_start();

include '../connection_db.php';

$id=$_GET['id'];

$deleteBook="DELETE FROM books where id=$id";
if(mysqli_query($conn,$deleteBook)){
    $_SESSION['action']='تم حذف كتاب واحد';
   header('location:books.php');
}else {
    echo mysqli_error($conn);
}
?>