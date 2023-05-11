<?php
include("connection_db.php");
  session_start();
 ?>
<!doctype html>
<html dir="rtl">
  <head>
    <title> تراثيات |الشروط والتفاصيل</title>
    <?php include('head.php')?>
  </head>

  <body>
   <!-- start navbar-->
   <nav class="navbar navbar-expand-lg ">
    <?php include('navbar.php') ?>
  </nav>
  <!-- end navbar-->

    <!-- start join us page-->
    <div class="img_store">
      <div class="informations">
      <p>سعيدون جداً برغبتك بالانضمام الى عائلتنا، يمكنك الاطلاع على التفاصيل ومن ثم تعبئة الطلب.</p>
      <button type="button" class="btn butt nav-link"  data-bs-target="#mer" data-bs-toggle="modal" data-bs-target="#exampleModal">
        تقديم طلب
      </button>
      <!-- Modal -->
      <div class="modal fade" id="mer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="application-form">
            <form action="">
          <div class="tab-content" id="pills-tabContent">
            <h3>تعبئة الطلب</h3>
            <div class="row">
            <div class="form-floating mb-3 col-6">
             <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
             <label for="floatingInput">الاسم الاول</label>
            </div>
            <div class="form-floating col-6">
             <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
             <label for="floatingPassword">الاسم الاخير</label>
            </div>
            </div>
            <div class="form-floating ">
              <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">رقم الهاتف</label>
             </div>
             <div class="row">
              <div class="col-6">
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
             <div class="form-floating col-6 mt-3">
              <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">عنوان المتجر/اونلاين</label>
             </div>
             </div>
             <select class="form-select" aria-label="Default select example">
              <option value="selected">القسم</option>
              <option value="">مطرزات</option>
              <option value="">خزف وفخاريات</option>
              <option value="">انتيك ونحاسيات</option>
             </select>
             <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">نبذة عن المتجر والمنتجات والبضائع التي يقدمها</label>
            </div>
            <div class="modal-footer">
             <button type="button" class="btn send">ارسال </button>
            </div>
           </div> 
           </form>
          </div>
          </div>
        </div>
       </div>
       </div>
      </div>
    </div>

    <div class="container">
        <div class="definition ">
    
            <h3> عند انضمامك لمتجر تراثيات كتاجر نقدم لك العديد من الامتيازات: </h3>
            
            <div class="text reveal"><p> موقع فلسطيني فريد من نوعه يضم العديد من المتاجر التراثية الفلسطينية في مكان واحد.</p></div>
            <div class="text reveal"><p>يتم توقيع عقد لضمان حقك كتاجر من خلال عدة بنود، ويكون لفترة محددة قابلة للتجديد. </p></div>
            <div class="text reveal"><p> يتم استلام البضاعة منك وحفظها في المخازن وبدورنا نقوم بتصويرها وعرضها وتجهيز الطلبيات وارسالها للزبون.</p></div>
            <div class="text reveal"><p> يتم ارسال الارباح شهرياً أو حسب الاتفاق.</p></div>
        
        </div>
    </div>
 
    <!--end join us page-->
    
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
    <script type="text/javascript">
      window.addEventListener('scroll',reveal);

      function reveal(){
          var reveals=document.querySelectorAll('.reveal');
          for(var i=0;i<reveals.length;i++){
              var windowheight=window.innerHeight;
              var revealtop=reveals[i].getBoundingClientRect().top;
              var revealpoint=150;
              if(revealtop < windowheight-revealpoint){
                  reveals[i].classList.add('active');
              }
              else{
                  reveals[i].classList.remove('active');
              }

          }
      }
  </script>
  </body>
</html>