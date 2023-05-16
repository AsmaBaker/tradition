<?php
  include("../connection_db.php");
  session_start();
?>
<!doctype html>
<html dir="rtl">
  <head>
    <title> تسجيل الدخول| تراثيات </title>
    <?php include('head.php')?>
  </head>
  <body>

<div class="sign" >
  <div class="sign_content">
   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link fs-3" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">تسجيل دخول بحساب ادمن</button>
  </li>

   </ul>
   
    <div class="tab-content" id="pills-tabContent">
         
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
  <?php
    //طباعة الاخطاء 
    if(isset($_SESSION['errors'])){
      $errors=$_SESSION['errors'];
      if(!empty($errors)){
    ?>
    <p class="alert alert-danger">
        <?php     
        foreach($errors as $error){
        echo $error;
        echo"<br>";
        }
      }
        } 
        ?>
    </p>
   <form action="sign_handel.php" method="post">     
    <div class="form-floating mb-3">
     <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
     <label for="email">البريد الالكتروني</label>
    </div>
    <div class="form-floating">
     <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
     <label for="Password">كلمة المرور</label>
    </div>
    <div class="modal-footer">
     <button type="submit" class="btn" id="click" name="submit" value="signIn">تسجيل الدخول</button>
    </div>
   </form>
  </div>
   </div>
  </div>
</div>
<?php
  session_destroy();
?>

  <!--start copy-right-->
  <div class="copy-right">
    <?php include('../copy_right.php')?>
  </div>
  <!--end copy-right-->

  <div class="up">
    <?php include('../up.php')?>
  </div>
  <script>
    let up= document.getElementById("up");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       up.style.display = "block";
       } else {
       up.style.display = "none";
       }
     }
     function upFunction(){
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
     }
  </script>
    <!-- bootstrap 5 -->
  <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>


