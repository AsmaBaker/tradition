<?php 
session_start();

include '../connection_db.php';


$deleteAll="DELETE FROM books";
if(mysqli_query($conn,$deleteAll)){
    $_SESSION['action']='all books are deleted';
   header('location:books.php');
}else {
    echo mysqli_error($conn);
}
?>