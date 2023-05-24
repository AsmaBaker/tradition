<?php
session_start(); 
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
    <title> تسجيل الدخول</title>
    <?php include('head.php')?>
  </head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <a class="navbar-brand" href="#">لوحة تحكم</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   </nav>

     <div class="header-login">
     <div class="login">
      <div class="container">
        <?php
        if(isset($_SESSION['errors'])): ?>
          <p class="alert alert-danger"> 
          <?php 
          print_r($_SESSION['errors']);
          unset($_SESSION['errors']) ;

          ?> </p>
          <?php
        endif
        ?>
        <form class="row g-3 pt-5" method="POST" action="loginDB.php">
         <label for="inputEmail4" class="form-label">البريد الالكتروني</label>
         <input type="email" class="form-control" id="inputEmail4" name="email">

         <label for="inputPassword4" class="form-label">كلمة السر</label>
         <input type="password" class="form-control" id="inputPassword4" name="pass">

         <div class="col-12">
           <button type="submit" class="btn btn-primary w-100" name="submit">تسجيل الدخول</button>
         </div>
        </form>
      </div>
    </div>
     </div>
</body>
</html>