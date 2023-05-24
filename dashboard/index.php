<?php 
session_start();
if(isset($_SESSION['sign'])){
?>

<!DOCTYPE html>
<html dir="rtl">
<head>
    <?php include('../head.php')?>
  </head>
<body>
  <div class="navbar">
   <div class="container-fluid">
    <div class="col-1">
      <img src="../img/logo.png" alt="logo">
    </div>
    <div class="col-7"></div>
    <div class="col-2">
      <a class="navbar-brand" href='loginDB.php?action="logout"'> خروج <i class="fa-solid fa-right-from-bracket fa-rotate-180 fa-sm"></i></a>
    </div>
   </div>
  </div>

  <div class="sectionsD">
   <div class="container">
    <div class="row">
      <div class="col-md-4">
       <div class="sec">
        <a href="show.php?no=1">
        <div class="row">
        <div class="col-6">
         <h3>المسؤولين</h3>
        </div>
        <div class="col-6">
         <img src="img/admin.png" alt="" width="100%">
        </div>
        </div>
        </a>
       </div>
      </div>
      <div class="col-md-4">
       <div class="sec">
        <a href="show.php?no=2">
        <div class="row">
        <div class="col-6">
         <h3>المستخدمين</h3>
        </div>
        <div class="col-6">
         <img src="img/users.png" alt="" width="100%">
        </div>
        </div>
        </a>
       </div>
      </div>
      <div class="col-md-4">
       <div class="sec">
        <a href="show.php?no=3">
        <div class="row">
        <div class="col-6">
         <h3>التجار</h3>
        </div>
        <div class="col-6">
         <img src="img/march.png" alt="" width="100%">
        </div>
        </div>
        </a>
       </div>
      </div>
      <div class="col-md-4">
        <div class="sec">
        <a href="show.php?no=4">
        <div class="row">
        <div class="col-6">
         <h3>الاقسام</h3>
        </div>
        <div class="col-6">
         <img src="img/sections.png" alt="" width="100%">
        </div>
        </div>
        </a>
        </div>
      </div>
      <div class="col-md-4">
       <div class="sec">
        <a href="show.php?no=5">
        <div class="row">
        <div class="col-6">
         <h3>المتاجر</h3>
        </div>
        <div class="col-6">
         <img src="img/stores.png" alt="" width="100%">
        </div>
        </div>
        </a>
       </div>
      </div>
      <div class="col-md-4">
       <div class="sec">
        <a href="show.php?no=6">
        <div class="row">
        <div class="col-6">
         <h3>المنتجات</h3>
        </div>
        <div class="col-6">
         <img src="img/product.png" alt="" width="100%">
        </div>
        </div>
        </a>
       </div>
      </div>
      <div class="col-md-4">
       <div class="sec">
        <a href="show.php?no=7">
        <div class="row">
        <div class="col-6">
         <h3>الطلبات</h3>
        </div>
        <div class="col-6">
         <img src="img/orders.png" alt="" width="100%">
        </div>
        </div>
        </a>
       </div>
      </div>
      <div class="col-md-4">
       <div class="sec">
        <div class="row">
        <div class="col-6">
         <h3>الاراء</h3>
        </div>
        <div class="col-6">
         <img src="img/feedback.png" alt="" width="100%">
        </div>
        </div>
       </div>
      </div>
      </div>
    </div>
  </div>
  
</body>
</html>

<?php 
}
else{
  header("location:sign.php");
}
?>