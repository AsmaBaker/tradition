<!doctype html>
<html dir="rtl">
  <head>
    <title>تراثيات | السلة</title>
    <?php include('head.php')?>
  </head>
  <body>

  <!-- start navbar-->
  <nav class="navbar navbar-expand-lg ">
    <?php include('navbar.php') ?>
  </nav>
  <!-- end navbar-->


  <!--start cart-->
 <div class="cart">
    <div class="cart-head">
    <h2>سلة المشتريات</h2>
    </div>
  <div class="cart-body">
    <!--<div class="cart-embty">
      <img src="img/cart.png" width="30%" alt="">
      <p>سلة المشتريات الخاصة بك فارغة </p>
      <a  class="btn" href="index.html">التسوق الان</a>
     </div>
    -->
    <div class="container">
    <div class="row">
      <div class="products col-md-7">
         <div class="product-details">
        <div class="row">
          <div class="col-2">
            <img src="img/صحن بيضاوي مقطع .jpg" width="100%" alt="">
          </div>
          <div class="col-4">
            <ul>
              <li>صحن بيضاوي مقطع</li>
              <li>50 <i class="fa-solid fa-shekel-sign"></i></li>
              <li>   
                <label for="quantity">الكمية:</label>
                <input class="quantity" type="number" id="quantity" min="1" max="10" value="1">
              </li>
            </ul>
          </div>
          <div class="col-5">
          </div>
          <div class="col-1">
            <ul>
              <li><button class="btn"><i class="fa-solid fa-trash"></i></button></li>
            </ul>
          </div>
        </div>
         </div>
         <div class="product-details">
          <div class="row">
            <div class="col-2">
              <img src="img/صحن بيضاوي مقطع .jpg" width="100%" alt="">
            </div>
            <div class="col-4">
              <ul>
                <li>صحن بيضاوي مقطع</li>
                <li>50 <i class="fa-solid fa-shekel-sign"></i></li>
                <li>   
                  <label for="quantity">الكمية:</label>
                  <input class="quantity" type="number" id="quantity" min="1" max="10" value="1">
                </li>
              </ul>
            </div>
            <div class="col-5">
            </div>
            <div class="col-1">
              <ul>
                <li><button class="btn"><i class="fa-solid fa-trash"></i></button></li>
              </ul>
            </div>
          </div>
           </div>
           <div class="product-details">
            <div class="row">
              <div class="col-2">
                <img src="img/صحن بيضاوي مقطع .jpg" width="100%" alt="">
              </div>
              <div class="col-4">
                <ul>
                  <li>صحن بيضاوي مقطع</li>
                  <li>50 <i class="fa-solid fa-shekel-sign"></i></li>
                  <li>   
                    <label for="quantity">الكمية:</label>
                    <input class="quantity" type="number" id="quantity" min="1" max="10" value="1">
                  </li>
                </ul>
              </div>
              <div class="col-5">
              </div>
              <div class="col-1">
                <ul>
                  <li><button class="btn"><i class="fa-solid fa-trash"></i></button></li>
                </ul>
              </div>
            </div>
             </div>
             <div class="product-details">
              <div class="row">
                <div class="col-2">
                  <img src="img/صحن بيضاوي مقطع .jpg" width="100%" alt="">
                </div>
                <div class="col-4">
                  <ul>
                    <li>صحن بيضاوي مقطع</li>
                    <li>50 <i class="fa-solid fa-shekel-sign"></i></li>
                    <li>   
                      <label for="quantity">الكمية:</label>
                      <input class="quantity" type="number" id="quantity" min="1" max="10" value="1">
                    </li>
                  </ul>
                </div>
                <div class="col-5">
                </div>
                <div class="col-1">
                  <ul>
                    <li><button class="btn"><i class="fa-solid fa-trash"></i></button></li>
                  </ul>
                </div>
              </div>
               </div>
      
      </div>
      <div class="col-md-1"></div>
      <div class="price col-md-4">
        <h3>المبلغ الاجمالي:</h3>
        <span>200 <i class="fa-solid fa-shekel-sign"></i></span>
        <p>تتراوح تكلفة التوصيل من 20- 50 <i class="fa-solid fa-shekel-sign"></i>  يتم تحديدها عند اتمام الطلب وتحديد مكان السكن</p>
        <a href="sign.php"  class="btn keep">
          اتمام عملية الشراء
        </a>
        <a href="order_data.php">الخطوة التالية بعد تسجيل الحساب</a>
        
       
      </div>
    </div>
    </div>
  </div>
</div>
  <!--end cart-->
  
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