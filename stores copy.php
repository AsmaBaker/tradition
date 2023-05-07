<?php
   include("connection_db.php");
?>
<!doctype html>
<html dir="rtl">
  <head>
    <title>  المتجر</title>
    <?php include('head.php')?>
  </head>
  
  <body>
  <!-- start navbar-->
  <nav class="navbar navbar-expand-lg ">
    <?php include('navbar.php') ?>
  </nav>
  <!-- end navbar-->

    <!--start stores page-->

 <div class="stores">
      <?php
        $id=$_GET['id'];
        $getStores = "SELECT * FROM stores where id=$id";
        $getAllStores = mysqli_query($conn,$getStores);
        $stores=mysqli_fetch_all($getAllStores,MYSQLI_ASSOC);
      ?>
       <div class="container">

        <div class="row description ">
         <?php
         foreach($stores as $stores):
         ?>
         <div class="img-descr col-md-3 "> 
            <img src="img/store/<?=$stores['img']?>" width="200px"> 
         </div>
         <div class=" descr col-md-8 " >
             <p class="name-store"><?=$stores['name']?></p>
             <p><?=$stores['desc']?></p>
             <p>العنوان : <?=$stores['address']?></p>
          </div>
          <div class="links col-md-1">
               <ul>
               <a href="<?=$stores['instagram']?>"><i class="fa-brands fa-instagram"></i></a>
               <a href="<?=$stores['facebook']?>" ><i class="fa-brands fa-facebook-f"></i></a>
             </ul>
          </div>
          <?php endforeach ?>
        </div>
       </div>
   <div class="row w-100">
    <div class="col-2 sort">
          <form action="index.php#store" method="post">
          <div>
            <h5>تصفية حسب المدينة:</h5>
        
            <div class="form-check form-check-reverse form-check-inline">
              <input class="form-check-input" type="radio" value="" id="reverseCheck1" name="city">
              <label class="form-check-label" for="reverseCheck1">
               ة
              </label>
            </div>
            <input class="btn d-block sort_btn"  type="submit" value="تنفيذ" name="citySort">
          </div>
          </form>
          <form action="index.php" method="post">
           <div>
            <h5>تصفية حسب طبيعة التواجد:</h5>
            <div class="form-check form-check-reverse form-check-inline">
              <input class="form-check-input" type="radio" name="on" value="online" id="reverseCheck1">
              <label class="form-check-label" for="reverseCheck1">
             متاجر   الاونلاين
              </label>
            </div>
            <div class="form-check form-check-reverse form-check-inline">
              <input class="form-check-input" type="radio" name="on" value="market" id="reverseCheck1">
              <label class="form-check-label" for="reverseCheck1">
              المحال التجارية
              </label>             
            </div>    
            <input class="btn d-block sort_btn"  type="submit" value="تنفيذ" name="online"> 
           </div>
          </form>
        </div>
    
    <div class="col-7">
      <div class="store_product">
      <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
        <?php
         $id=$_GET['id'];
         $getProducts = "SELECT * FROM products where sto_id=$id";
         $getAllProducts = mysqli_query($conn,$getProducts);
         $products=mysqli_fetch_all($getAllProducts,MYSQLI_ASSOC);
        ?>
        
        <div class="row">
         <?php
         foreach($products as $index=>$product):
         ?>
         <div class="col-md-3 card" style="width: 12rem;">
         <a href="product.php?pro_id=<?=$product['id']?>&sto_id=<?=$product['sto_id']?>">
         <img src="img/<?=$sto_id?>/<?=$product['img']?>" class="card-img-top" alt="...">
         <div class="card-body row">
         <h5 class="card-title"><?=$product['name']?></h5>
         <p class="card-text"> <?=$product['price']?> <i class="fa-solid fa-shekel-sign"></i></p>
         <button type="button" class="btn ">اضافة الى السلة<i class="fa-solid fa-cart-shopping"></i> </button>
         </div>
         </a>
         </div>
         <?php endforeach ?>
        </div>
        
        </div>
      </div>
    </div>
   </div>
 </div>
     <!--end stores page-->


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

