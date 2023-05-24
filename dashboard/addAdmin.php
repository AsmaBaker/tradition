<?php 
session_start();
include '../connection_db.php';

$getCats = "SELECT * FROM categories";
$getCatsData = mysqli_query($conn,$getCats);
$cats=mysqli_fetch_all($getCatsData,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<html dir="rtl">
<head>
<head>
    <title> تراثيات |الشروط والتفاصيل</title>
    <?php include('head.php')?>
  </head>
<body>
    <div class="add">
      <form class="row g-3 pt-5 align-center" method="POST" action="addDB.php"  enctype="multipart/form-data">
        <h3>اضافة كتاب</h3>
         <label  class="form-label">اسم الكتاب</label>
         <input type="text" class="form-control"  name="name">

         <label  class="form-label">صورة </label>
         <input type="file" class="form-control" name="img">

         <select  name="cat" class="form-select" aria-label="Default select example">
         <option selected>التصنيف</option>
         <?php
         foreach($cats as $cat){
         ?>
         <option  value="<?= $cat['id']?>"><?= $cat['name_cat']?></option>
         <?php } ?>
        </select>

         <div class="col-12">
           <button type="submit" class="btn btn-primary" name="submit">اضافة الكتاب</button>
           <a class="btn btn-primary" href="books.php">عودة</a>
         </div>
      </form>
    </div>
</body>
</html>