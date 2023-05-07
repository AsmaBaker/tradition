<?php
  include("connection_db.php");
session_start();
extract($_POST);
$errors=[];
$passwordLen = strlen($password);

if($submit=="signIn"){
    //email validation
     if(empty($email)){
        $errors[]="البريد الالكتروني مطلوب";
     } else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[]="يجب ان يكون ايميل حقيقي";
     } 
     //password validation
     if(empty($password)){
        $errors[]="كلمة المرور مطلوبة";
     } else if($passwordLen <8 or $passwordLen > 30){
        $errors[]="يجي ان تتكون من 8 الى 30 حرف";
     }

//التحقق من صحة بيانات الحساب
if(!empty($errors)){
    $_SESSION['errors']=$errors;
    header("location:sign.php");
}
else{
    $getUser="SELECT * FROM users where email='$email'";
    $userData = mysqli_query($conn, $getUser);
    $user=mysqli_fetch_all($userData,MYSQLI_ASSOC);

    if (empty($user)){
        $errors[]="البريد الاكتروني او كلمة المرور خطأ";
        header("location:sign.php");
    }else if($password != $user[0]['password']){
        $errors[]="البريد الاكتروني او كلمة المرور خطأ";
        header("location:sign.php");
    }else{
        header("location:index.php");
    }
    if(!empty($errors)){
       $_SESSION['errors']=$errors;
       header("location:sign.php");
    }
}}else if($submit=="signUp"){
     //userName validation
     if(empty($userName)){
        $errors[]="البريد الالكتروني مطلوب";
     } 
      //email validation
      if(empty($email)){
        $errors[]="البريد الالكتروني مطلوب";
     } else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[]="يجب ان يكون ايميل حقيقي";
     } 
     //password validation
     if(empty($password)){
        $errors[]="كلمة المرور مطلوبة";
     } else if($passwordLen <8 or $passwordLen > 30){
        $errors[]="يجي ان تتكون من 8 الى 30 حرف";
     }
     //التحقق من صحة بيانات الحساب
if(!empty($errors)){
    $_SESSION['errors']=$errors;
    header("location:sign.php");
}
}
?>