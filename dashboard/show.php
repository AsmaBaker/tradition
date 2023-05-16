<?php
session_start();
include '../connection_db.php';

?>

<!DOCTYPE html>
<html dir="rtl">
<head>
    <?php include('../head.php')?>
  </head>
<body>
<div class="navbar">
   <div class="container-fluid">
    <div class="col-1">
      <img src="../img/logo.png" alt="logo">
    </div>
    <div class="col-7"></div>
    <div class="col-2">
      <a class="navbar-brand" href='loginDB.php?action="logout"'> خروج <i class="fa-solid fa-right-from-bracket fa-rotate-180 fa-sm"></i></a>
    </div>
   </div>
  </div>
<div class="container">
<?php
    if(isset($_SESSION['action'])){ ?>
      <div class="alert alert-warning" role="alert">
        <?= $_SESSION['action'];?>
      </div>
     <?php  
            unset($_SESSION['action']) ;
    }
?>
</div>
  <?php
  if(isset($_GET['no'])){
    if($_GET['no']==1){
  ?>
  <div class="content">
    <div class="container">
      <td><a class="btn btn-secondary" href="index.php">عودة الى الصفحة الرئيسية</a></td> 
      <td><a class="btn btn-success" href="add.php">اضافة مسؤول جديد</a></td>
      <td><a class="btn btn-danger" href="deleteAll.php" >حذف الكل</a></td>


     <table class="table" >
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">الاسم</th>
         <th scope="col">البريد الالكتروني</th>
         <th scope="col">كلمة السر</th>
         <th scope="col">الحالة</th>
         <th scope="col">تاريخ الانشاء</th>

       </tr>
     </thead>
     <tbody>
      <?php
        $getAdmins = "SELECT * FROM admins";
        $getAllAdmins = mysqli_query($conn,$getAdmins);
        $admins=mysqli_fetch_all($getAllAdmins,MYSQLI_ASSOC);
      
        foreach($admins as $index=>$admin):
      ?>
      <tr>
      <td scope="row"><?= $index +1 ?></td>
      <td><?= $admin['name'] ?></td>
      <td><?= $admin['email'] ?></td>
      <td><?= $admin['password'] ?></td>
      <td><?= $admin['status'] ?></td>
      <td><?= $admin['created_at'] ?></td>
      <td><a class="btn btn-warning" href="update.php?id=<?= $admin['id'] ?>">تعديل</a></td>
      <td><a class="btn btn-danger" href="deleteDB.php?id=<?= $admin['id'] ?>">حذف</a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
     </table>
        
    </div>
  </div>
  <?php
   }else if($_GET['no']==2){
  ?>
   <div class="content">
    <div class="container">
      <td><a class="btn btn-secondary" href="index.php">عودة الى الصفحة الرئيسية</a></td> 
      <td><a class="btn btn-success" href="add.php">اضافة مستخدم جديد</a></td>
      <td><a class="btn btn-danger" href="deleteAll.php" >حذف الكل</a></td>


    <table class="table" >
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">الاسم</th>
         <th scope="col">البريد الالكتروني</th>
         <th scope="col">كلمة السر</th>
         <th scope="col">تاريخ الانشاء</th>

       </tr>
     </thead>
     <tbody>
      <?php
      $getUsers = "SELECT * FROM users";
      $getAllUsers = mysqli_query($conn,$getUsers);
      $users=mysqli_fetch_all($getAllUsers,MYSQLI_ASSOC);
      
        foreach($users as $index=>$user):
      ?>
      <tr>
      <td scope="row"><?= $index +1 ?></td>
      <td><?= $user['user_name'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['password'] ?></td>
      <td><?= $user['created_at'] ?></td>
      <td><a class="btn btn-warning" href="update.php?id=<?= $user['id'] ?>">تعديل</a></td>
      <td><a class="btn btn-danger" href="deleteDB.php?id=<?= $user['id'] ?>">حذف</a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
     </table>
        
    </div>
   </div>
 <?php
  }else if($_GET['no']==3){
    ?>
  <div class="content">
    <div class="container">
      <td><a class="btn btn-secondary" href="index.php">عودة الى الصفحة الرئيسية</a></td> 
      <td><a class="btn btn-danger" href="deleteAll.php" >حذف الكل</a></td>


    <table class="table" >
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">الاسم</th>
         <th scope="col">رقم الهاتف</th>
         <th scope="col">المدينة</th>
         <th scope="col">القسم</th>
         <th scope="col">وصف المتجر</th>
         <th scope="col">تاريخ الارسال</th>
       </tr>
     </thead>
     <tbody>
      <?php
      
      $getRequest = "SELECT * FROM requests";
      $getAllRequest = mysqli_query($conn,$getRequest);
      $requests=mysqli_fetch_all($getAllRequest,MYSQLI_ASSOC);

        foreach($requests as $index=>$requests):
      ?>
      <tr>
      <td scope="row"><?= $index +1 ?></td>
      <td><?= $request['name'] ?></td>
      <td><?= $request['phone'] ?></td>
      <td><?= $request['city'] ?></td>
      <?php
      $cat_id=$request['cat'];
      $getcats = "SELECT * FROM categorues where id= $cat_id";
      $getAllcats = mysqli_query($conn,$getRequest);
      $request=mysqli_fetch_all($getAllRequest,MYSQLI_ASSOC);
      foreach($cat as $cat):
      ?>
      <td><?= $cat['name'] ?></td>
      <?php endforeach ?>
      <td><?= $request['description'] ?></td>
      <td><?= $request['created_at'] ?></td>


      <td><a class="btn btn-warning" href="update.php?id=<?= $request['id'] ?>">تعديل</a></td>
      <td><a class="btn btn-danger" href="deleteDB.php?id=<?= $request['id'] ?>">حذف</a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
     </table>
        
    </div>
  </div>
  <?php
  }else if($_GET['no']==4){
    ?>
  <div class="content">
    <div class="container">
      <td><a class="btn btn-secondary" href="index.php">عودة الى الصفحة الرئيسية</a></td>
      <td><a class="btn btn-success" href="add.php">اضافة قسم جديد</a></td>
      <td><a class="btn btn-danger" href="deleteAll.php" >حذف الكل</a></td>


    <table class="table" >
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">الاسم</th>
         <th scope="col">عدد المتاجر</th>
       </tr>
     </thead>
     <tbody>
      <?php
      
      $getCats = "SELECT * FROM categories";
      $getAllCats = mysqli_query($conn,$getCats);
      $cats=mysqli_fetch_all($getAllCats,MYSQLI_ASSOC);

        foreach($cats as $index=>$cat):
      ?>
      <tr>
      <td scope="row"><?= $index +1 ?></td>
      <td><?= $cat['name'] ?></td>
      <td><?= $cat['store_total'] ?></td>
      <td><a class="btn btn-warning" href="update.php?id=<?= $cat['id'] ?>">تعديل</a></td>
      <td><a class="btn btn-danger" href="deleteDB.php?id=<?= $cat['id'] ?>">حذف</a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
     </table>
        
    </div>
  </div>
  <?php
   }else if($_GET['no']==5){
    ?>
  <div class="content">
    <div class="container">
      <td><a class="btn btn-secondary" href="index.php">عودة الى الصفحة الرئيسية</a></td> 
      <td><a class="btn btn-success" href="add.php">اضافة متجر جديد</a></td>
      <td><a class="btn btn-danger" href="deleteAll.php" >حذف الكل</a></td>
    <table class="table" >
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">الاسم</th>
         <th scope="col">الصورة</th>
         <th scope="col">الوصف</th>
         <th scope="col">العنوان</th>
         <th scope="col">المدينة</th>
         <th scope="col">فيسبوك</th>
         <th scope="col">انستجرام</th>
         <th scope="col">واتس اب</th>
         <th scope="col">رقم الهاتف</th>
         <th scope="col">رقم الهاتف</th>
         <th scope="col">اسم القسم</th>
       </tr>
     </thead>
     <tbody>
      <?php
      
      $getStores = "SELECT * FROM stores";
      $getAllStores = mysqli_query($conn,$getStores);
      $stores=mysqli_fetch_all($getAllStores,MYSQLI_ASSOC);

        foreach($stores as $index=>$store):
      ?>
      <tr>
      <td scope="row"><?= $index +1 ?></td>
      <td><?= $store['name'] ?></td>
      <td><img src="../img/store/<?= $store['img'] ?>" width="100%" alt=""> </td>
      <td><?= $store['desc'] ?></td>
      <td><?= $store['address'] ?></td>
 
      <?php
      $city_id=$store['city'];
      $getcity = "SELECT * FROM cities where id= $city_id";
      $getAllCity = mysqli_query($conn,$getcity);
      $cities=mysqli_fetch_all($getAllCity,MYSQLI_ASSOC);
      foreach($cities as $city):
      ?>
      <td><?= $city['name'] ?></td>
      
      <?php endforeach ?>
      <td><a href="<?= $store['facebook'] ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></td>
      <td><a href="<?= $store['instagram'] ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></td>
      <td><?= $store['whatsapp'] ?></td>
      <td><?= $store['phone'] ?></td>
      <td><?= $store['cat_name'] ?></td>
      <td><?= $store['created_at'] ?></td>


      <td><a class="btn btn-warning" href="update.php?id=<?= $request['id'] ?>">تعديل</a></td>
      <td><a class="btn btn-danger" href="deleteDB.php?id=<?= $request['id'] ?>">حذف</a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
     </table>
        
    </div>
  </div>
  <?php
  }else if($_GET['no']==6){
    ?>
  <div class="content">
    <div class="container">
      <td><a class="btn btn-secondary" href="index.php">عودة الى الصفحة الرئيسية</a></td> 
      <td><a class="btn btn-success" href="add.php">اضافة منتج جديد</a></td>
      <td><a class="btn btn-danger" href="deleteAll.php" >حذف الكل</a></td>
    <table class="table" >
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">الاسم</th>
         <th scope="col">الصورة</th>
         <th scope="col">الكمية المتوفرة</th>
         <th scope="col">السعر</th>
         <th scope="col">الوصف</th>
         <th scope="col">اسم المتجر</th>
       </tr>
     </thead>
     <tbody>
      <?php
      
      $getProducts = "SELECT * FROM products";
      $getAllProducts = mysqli_query($conn,$getProducts);
      $products=mysqli_fetch_all($getAllProducts,MYSQLI_ASSOC);

        foreach($products as $index=>$product):
      ?>
      <tr>
      <td scope="row"><?= $index +1 ?></td>
      <td><?= $product['name'] ?></td>
      <td class="w-25"><img src="../img/<?= $product['sto_id'] ?>/<?= $product['img'] ?>" width="70%" alt=""> </td>
      <td><?= $product['total'] ?></td>
      <td><?= $product['price'] ?></td>
      <td><?= $product['desc'] ?></td>
      <?php
      $store_id=$product['sto_id'];
      $getStores = "SELECT name FROM stores where id= $store_id";
      $getAllStores = mysqli_query($conn,$getStores);
      $stores=mysqli_fetch_all($getAllStores,MYSQLI_ASSOC);
      foreach($stores as $store):
      ?>
      <td><?= $store['name'] ?></td>
      
      <?php endforeach ?>
      
      <td><a class="btn btn-warning" href="update.php?id=<?= $store['id'] ?>">تعديل</a></td>
      <td><a class="btn btn-danger" href="deleteDB.php?id=<?= $store['id'] ?>">حذف</a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
     </table>
        
    </div>
  </div>
  <?php
  }else if($_GET['no']==7){
    ?>
  <div class="content">
    <div class="container">
      <td><a class="btn btn-secondary" href="index.php">عودة الى الصفحة الرئيسية</a></td> 
      <td><a class="btn btn-success" href="add.php">اضافة منتج جديد</a></td>
      <td><a class="btn btn-danger" href="deleteAll.php" >حذف الكل</a></td>
    <table class="table" >
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">الاسم</th>
         <th scope="col">الصورة</th>
         <th scope="col">الكمية المتوفرة</th>
         <th scope="col">السعر</th>
         <th scope="col">الوصف</th>
         <th scope="col">اسم المتجر</th>
       </tr>
     </thead>
     <tbody>
      <?php
      
      $getProducts = "SELECT * FROM products";
      $getAllProducts = mysqli_query($conn,$getProducts);
      $products=mysqli_fetch_all($getAllProducts,MYSQLI_ASSOC);

        foreach($products as $index=>$product):
      ?>
      <tr>
      <td scope="row"><?= $index +1 ?></td>
      <td><?= $product['name'] ?></td>
      <td class="w-25"><img src="../img/<?= $product['sto_id'] ?>/<?= $product['img'] ?>" width="70%" alt=""> </td>
      <td><?= $product['total'] ?></td>
      <td><?= $product['price'] ?></td>
      <td><?= $product['desc'] ?></td>
      <?php
      $store_id=$product['sto_id'];
      $getStores = "SELECT name FROM stores where id= $store_id";
      $getAllStores = mysqli_query($conn,$getStores);
      $stores=mysqli_fetch_all($getAllStores,MYSQLI_ASSOC);
      foreach($stores as $store):
      ?>
      <td><?= $store['name'] ?></td>
      
      <?php endforeach ?>
      
      <td><a class="btn btn-warning" href="update.php?id=<?= $store['id'] ?>">تعديل</a></td>
      <td><a class="btn btn-danger" href="deleteDB.php?id=<?= $store['id'] ?>">حذف</a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
     </table>
        
    </div>
  </div>
  <?php
  }
}
  ?>
</body>
</html>