<?php
session_start();
include '../connection_db.php';
extract($_POST);

$img=$_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];

move_uploaded_file($tmp_name , "img/$img");

if(isset($_POST['update'])){
    $bookUpdate="UPDATE books SET name='$name',img='$img',`cat_id`='$cat' WHERE id=$id";
 
    if(mysqli_query($conn,$bookUpdate)){
        $_SESSION['action']='book is updated';
        header('location: books.php');
    }else {
        echo mysqli_error($conn);
    }
}

?>