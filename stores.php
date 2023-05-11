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

 <div class="stores" id="stores">
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

       <div class="row">
        <div class="col-2 sort">
         <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
           <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              فرز المنتجات حسب السعر
            </button>
           </h2>
           <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
             <form action="stores.php" method="post">
              <div>
               <div class="form-check form-check-reverse form-check-inline w-100">
                <select class="form-select d-block" aria-label="Default select example">
                 <option selected value="1">من الاعلى للاقل</option>
                 <option value="2">من الاقل للاعلى</option>
                </select>
                <input class="btn sort_btn"  type="submit" value="تنفيذ" name="citySort">
               </div>
              </div>
             </form>
            </div>
           </div>
          </div>
        </div>
        <form action="">
        <input class="btn  date"  type="submit" value="فرز المنتجات من الاحدث" name="citySort">
        </form>
        </div>

        <div class="col-10 store_product">    
         <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2 w-100" tabindex="0">
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
          <div class="col-md-3 card" style="width: 14rem;">
           <a href="product.php?pro_id=<?=$product['id']?>&sto_id=<?=$product['sto_id']?>">
            <img src="img/<?=$id?>/<?=$product['img']?>" class="card-img-top" alt="...">
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

