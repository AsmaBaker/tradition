<?php
session_start();
?>
<!doctype html>
<html dir="rtl">
  <head>
    <title>تراثيات | اتمام الطلب</title>
    <?php include('head.php')?>
  </head>
  <body>
  <!-- start navbar-->
  <nav class="navbar navbar-expand-lg ">
    <?php include('navbar.php') ?>
  </nav>
  <!-- end navbar-->

  <!--start order-data-->
  <div class="order-data">
    <div class="container">
      <?php
    if(isset($_SESSION['sign'])){
      $sign=$_SESSION['sign'];
       if(!empty($sign)){
        ?>
        <p class="alert alert-success">
        <?=$sign ?>
        </p>
        <?php
        session_destroy();
         ?>

      <form action="">
        <p>تعبئة بيانات الطلب</p>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">الاسم الثلاثي</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">رقم الهاتف</label>
        </div>
        <div class="row">
          <div class="col-md-3">
            <select class="form-select" aria-label="Default select example">
              <option value="selected">المدينة</option>
              <option value="">نابلس </option>
              <option value="">القدس </option>
              <option value="">رام الله </option>
              <option value="">رفح  </option>
              <option value="">غزة  </option>
              <option value=""> بيت لحم  </option>
              <option value="">الخليل  </option>
              <option value="">خان يونس  </option>
              <option value="">اريحا  </option>
              <option value="">قلقيلية  </option>
              <option value="">جنين  </option>
              <option value="">الرملة  </option>
              <option value="">يافا  </option>
              <option value="">الناصرة  </option>
              <option value="">طولكرم  </option>
              <option value="">الجليل  </option>
              <option value="">اللد  </option>
              <option value="">بئر السبع  </option>
          </select>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-8">
             <div class="form-floating mb-3">
             <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
             <label for="floatingInput">الشارع/البلدة/القرية</label>
             </div>
          </div>
        </div>
        <div class="gender">
          <span>الجنس:</span>
        <div class="form-check form-check-inline">
          <label class="form-check-label" for="inlineRadio1">ذكر</label>
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        </div>
        <div class="form-check form-check-inline me-5">
          <label class="form-check-label" for="inlineRadio2">انثى</label>
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        </div>
        </div>
        <div class="pay">
          <select class="form-select" aria-label="Default select example">
            <option value="selected">الدفع عند الاستلام</option>
        </select>
        </div>
        <input type="submit" class="btn submit" value="الشراء الان">
      </form>
      <?php
      }
    }else{
      ?>
      <div class="error">
      <img src="img/error.png" alt="">
      <p>عذرا! لا يمكنك الوصول الى هذه الصفحة , قم بتسجيل الدخول اولا.</p>
      </div>
      <?php
    }
      ?>
      
    </div>
  </div>
  <!--end order-data-->

  <!--start footer-->
  <div class="footer" id="footer">
   <?php include('footer.php')?>
  </div>
  <!--end footer-->

  <!--start copy-right-->
  <div class="copy-right">
  <?php include('copy_right.php')?>
  </div>
  <!--end copy-right-->

  <div class="up">
    <?php include('up.php')?>
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