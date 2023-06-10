<?php
include("connection_db.php");
  session_start();
  //delete product
  if(isset($_GET['delete'])){
    if($_SESSION['qua'][$_GET['delete']]==1){
    foreach (array_keys($_SESSION['cart'], $_GET['delete'], true) as $key) {
     unset($_SESSION['cart'][$key]);
    } 
    unset($_SESSION['qua'][$_GET['delete']]);
    $where_in=implode(',',$_SESSION['cart']);
    $_SESSION['where_in']=$where_in;
 
    header("location:cart.php");
    }else{
    $_SESSION['qua'][$_GET['delete']]=$_SESSION['qua'][$_GET['delete']]-1;
    
    header("location:cart.php");

  }
    }

  //add to cart

if(isset($_GET['submit'])){
  if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
    }
  if(isset($_GET['pro_id'])){
    $_SESSION['cart'][]=$_GET['pro_id'];

   }
   $where_in=implode(',',$_SESSION['cart']);
   $_SESSION['where_in']=$where_in;

   if(!isset($_SESSION['qua'])){
    $_SESSION['qua']=array();
    }

   if(isset($_GET['quantity'])){
     $pro_id=$_GET['pro_id'];
     $pro_qua=$_GET['quantity'];

     $_SESSION['qua'][$pro_id]=$pro_qua;
   }else{
      $_SESSION['pro_qua']=$pro_qua;
   }
   
  if($_GET['submit']=="product"){
    $sto=$_SESSION['store_id'];
    $pro=$_SESSION['pro_id'];
   header("location:product.php?pro_id=$pro&sto_id=$sto&add=t");
  }else if($_GET['submit']=="stores"){
   $id=$_SESSION['id'];
   header("location:stores.php?add=t&id=$id");
  }else if($_GET['submit']=="chose"){
    header("location:index.php?add=t");
  }
}
?>
