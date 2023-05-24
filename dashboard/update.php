<?php 
session_start();
include '../connection_db.php';

$id=$_GET['id'];

$getBook = "SELECT id,name,img,cat_id FROM books WHERE $id";
$getBookData = mysqli_query($conn,$getBook);
$book=mysqli_fetch_all($getBookData,MYSQLI_ASSOC);

$getCats = "SELECT * FROM categories";
$getCatsData = mysqli_query($conn,$getCats);
$cats=mysqli_fetch_all($getCatsData,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<html dir="rtl">
  <head>
    <title> تراثيات |الشروط والتفاصيل</title>
    <?php include('head.php')?>
  </head>
<body>
    <div class="add">
     <div class="container">
      <form class="row g-3 pt-5 align-center" method="POST" action="updateDB.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$book[0]['id']?>">
         <label  class="form-label">اسم الكتاب</label>
         <input type="text" class="form-control"  name="name" value="<?=$book[0]['name']?>">

         <label  class="form-label">صورة </label>
         <input type="file" class="form-control" name="img" value="<?=$book[0]['img']?>">

         <select  name="cat" class="form-select" aria-label="Default select example">
         <option selected>التصنيف</option>
         <?php
         foreach($cats as $cat){
         ?>
         <option  value="<?= $cat['id']?>" ><?= $cat['name_cat']?></option>
         <?php } ?>
        </select>

         <div class="col-12">
           <button type="submit" class="btn btn-primary" name="update">تعديل</button>
           <a class="btn btn-primary" href="books.php">عودة</a>

         </div>
      </form>
    </div>
     </div>
</body>
</html>