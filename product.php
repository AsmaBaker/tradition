<?php
include("connection_db.php");
  session_start();
 ?>
<!doctype html>
<html dir="rtl">
  <head>
    <title>تراثيات | منتجاتنا</title>
    <?php include('head.php')?>
  </head>
  <body>
   <!-- start navbar-->
   <nav class="navbar navbar-expand-lg ">
    <?php include('navbar.php') ?>
  </nav>
  <!-- end navbar-->

  <!-- start product-->
  <div class="product">
    <?php
     $_SESSION['store_id']=$_GET['sto_id'];
     $sto_id=$_SESSION['store_id'];     

     $getProducts = "SELECT * FROM products  where sto_id=$sto_id limit 10";
     $getProductsData = mysqli_query($conn,$getProducts);
     $products=mysqli_fetch_all($getProductsData,MYSQLI_ASSOC);

     $getStores = "SELECT * FROM stores  where id=$sto_id";
     $getStoresData = mysqli_query($conn,$getStores);
     $stores=mysqli_fetch_all($getStoresData,MYSQLI_ASSOC);

    $_SESSION['pro_id']=$_GET['pro_id'];
    $pro_id=$_SESSION['pro_id'];
    
    $getProduct = "SELECT * FROM products  where id=$pro_id";
    $getProductData = mysqli_query($conn,$getProduct);
    $product=mysqli_fetch_all($getProductData,MYSQLI_ASSOC);
    ?>
    <div class="container">
    
        <div class="row">
          <?php
           foreach($product as $product):
            
           ?>
     
            <div class="col-md-1"></div>
            <div class="col-md-4 pic">
                <img src="img/<?=$product['sto_id']?>/<?=$product['img']?>" alt="">
            </div>
            <div class="col-md-6 data">
              
                <p class="name"><?=$product['name']?></p>
                <p class="desc"><?=$product['desc']?></p>
                <p class="price"><?=$product['price']?><i class="fa-solid fa-shekel-sign"></i></p>

       
      
             <?php
              if($product['sto_id']==11101 ||$product['sto_id']==11104 ){
                ?>
                <div class="space"></div>
                <a href="<?=$store['facebook']?>" target="_blank" class="btn add mt-4">الطلب من المطعم<i class="fa-brands fa-facebook-f"></i></a>
                <?php
              }else{
             ?>
             <div class=" pro">
             <form class="row" action="cart_handel.php" method = "GET">
             <label for="quantity" class="col-1">الكمية:</label>
             <?php
             $pro_q=$product['total'];
             ?>
             <input class="quantity col-1" type="number" id="quantity" name="quantity" min="1" max="<?=$pro_q?>" value="1">
              <input type="hidden" value= "<?= $product['id']?>" name="pro_id">
            <div class="col-8"></div>
            <button class="btn add" id="add" name="submit" value="product"> اضافة الى السلة <i class="fa-solid fa-cart-shopping"></i></button>
             </form>
             </div>
             <?php } ?>   
                 
             </div>
      
            <?php endforeach ?>
            <?php
          if(isset($_GET['add'])){
            ?>
            <div class="alert alert-success mt-5" role="alert">
             تم اضافة المنتج الى <a  href="cart.php" class="alert-link" target="_blank"> السلة</a>
  
            </div>
            <?php
          }
          ?> 
        </div>
    </div>
  </div>
  <!-- end product-->

  <!--start suggestion-->
  <div class="suggestion">  
    
    <div class="same-store">
        <div class="container">
        <?php 
        foreach($stores as $store):
        ?>
      <h4>منتجات مشابهة لدى <?=$store['name']?>:</h4>
      <?php endforeach ?>
      <div class="row">
        
    
        <?php
        foreach($products as $index=>$product):
        ?>
        <div class="col-3 card">
      
        <a href="product.php?pro_id=<?=$product['id']?>&sto_id=<?=$product['sto_id']?>">
          <img src="img/<?=$sto_id?>/<?=$product['img']?>" class="card-img-top" alt="...">
          <div class="card-body row">
            <h5 class="card-title"><?=$product['name']?></h5>
            <p class="card-text"> <?=$product['price']?><i class="fa-solid fa-shekel-sign"></i></p>
            <form action="cart_handel.php" method = "GET">
             <input class="quantity" value="1" type="hidden" name="quantity">
             <input type="hidden" value= "<?= $product['id']?>" name="pro_id">
             <button class="btn add" name="submit" value="product"> اضافة الى السلة <i class="fa-solid fa-cart-shopping"></i></button>
             </form>
          </div>
          </a>
          </div>
          <?php endforeach ?>
      </div>
    </div>
    </div>
  </div>
  <!--end suggestion-->

 
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