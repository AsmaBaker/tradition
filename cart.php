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
        <button type="button" class="btn keep" data-bs-toggle="modal" data-bs-target="#exampleModal">
          اتمام عملية الشراء
        </button>
        <a href="order_data.php">الخطوة التالية بعد تسجيل الحساب</a>
        <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
            <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
               <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                 <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">تسجيل دخول</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">انشاء حساب</button>
               </li>
               </ul>
               <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                 <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">البريد الالكتروني</label>
                 </div>
                 <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">كلمة المرور</label>
                 </div>
                 <div class="modal-footer">
                 <button type="button" class="btn">تسجيل الدخول</button>
                 <button type="button" class="btn cancel" data-bs-dismiss="modal">الغاء</button>
                 </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                 <div class="form-floating mb-3">
                 <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                 <label for="floatingInput">اسم المستخدم</label>
                 </div>
                 <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">البريد الالكتروني</label>
                 </div>
                 <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">كلمة المرور</label>
                 </div>
                 <div class="modal-footer">
                  <button type="button" class="btn cancel" data-bs-dismiss="modal">الغاء</button>
                  <button type="button" class="btn">انشاء حساب</button>
                 </div>
                </div> 
               </div>
             </div>
            </div>
            </div>
           </div>
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