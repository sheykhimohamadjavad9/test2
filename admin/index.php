<?php require_once 'controler.php'; 
require_once '../db.php';  ?>
<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8" />
  <title>پنل ادمین</title>
  <link rel="stylesheet" href="../style/style_2.css" />
</head>
<body dir="rtl">
  <nav class="sidebar">
    <h2>مدیریت فروشگاه</h2>
    <ul>
      <li><a href="index.php">محصولات</a></li>
      <li><a href="index.php?users">مشتریان</a></li>
      <li><a href="#">سفارشات</a></li>
      <li><a href="../index.php">خروج</a></li>
    </ul>
  </nav>

  <main class="content">
    <header>
      <h1>مدیریت محصولات</h1>
      <a href="index.php?add-product" class="btn-primary">افزودن محصول جدید</a>
    </header>
    <?php
    if(isset($_GET['add-product'])){
      addproductform($connect);
    }elseif(isset($_GET['users'])){
       usersedit($connect);
    }else{
      mainadminview($connect);
    }
    ?>
  </main>
</body>
</html>
