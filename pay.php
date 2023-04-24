<!doctype html>
<html dir="rtl">
  <head>
    <title> الدفع </title>
    <?php include('head.php')?>

  </head>
  <body>
     
<!-- start navbar-->
  <nav class="navbar navbar-expand-lg ">
    <?php include('navbar.php') ?>
  </nav>
  <!-- end navbar-->
    
  <!--start pay page-->
<div class="container">
  <div class=" row pay">
    <div class="ways-pay col-md-6">
    <h3>الدفع:</h3>
    <p>في موقع تراثيات نضمن لك سرية تامة في عمليات الدفع في حالة استخدام اسلوب دفع الكتروني.</p>
   
      <p>كما ونوفر لك العديد من خيارات الدفع :</p>
      <ul>
        <li ><i class="fa-regular fa-money-bill-1" style="color: rgb(4, 96, 4);"></i> الدفع عند الاستلام</li>
        <li>  <i class="fa-solid fa-credit-card" style="color: rgb(200, 48, 48);"></i>فيزا كارد</li>
        <li> <i class="fa-solid fa-wallet" style="color: rgb(41, 2, 80);"></i> محفظة جوال باي</li>
      </ul>
    </div>
  <div class="img-pay col-md-3">
      <img src="img/التوصيل/الدفع-removebg-preview.png" width="480px">
  </div>
</div>
</div>
  <!--end pay page-->
  
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