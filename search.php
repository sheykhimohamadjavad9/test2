<?php  require_once 'db.php'  ?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>جستجو محصول</title>
      <link href="style/font-awesome.css" rel="stylesheet" type="text/css">
      <link href="style/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="style/owl.carousel.css" rel="stylesheet" type="text/css">
      <link href="style/owl.theme.default.css" rel="stylesheet" type="text/css">
      <link href='http://www.fontonline.ir/css/BYekan.css' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
      <link href="style/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="social">
         <ul>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-send"></i></a></li>
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
         </ul>
      </div>
      <!---------------------------------->      
      <div class="top2">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="login">
                     <a href="#" class="mybtn"><i class="fa fa-user-plus"></i>ثبت نام</a>
                     <a href="#" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                     <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>  				
                  </div>
               </div>
               <div class="col-md-6">
                  <form action="" >
                     <input type="text" placeholder="کالای مورد نظر را جستجو کنید">
                     <button type="submit" ><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div><!--top2-->          
      <!----------------->
      <div class="pages-bnaer text-center">
         <div class="container">
            <span>محصولات مورد نظر شما</span>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <?php
            if(isset($_GET['search-btn'])){
            $search = "%{$_GET['search']}%";
            $stmt_search = mysqli_prepare($connect,"SELECT * FROM products WHERE title LIKE ?" );
            mysqli_stmt_bind_param($stmt_search, "s", $search);
            mysqli_stmt_execute($stmt_search);
            $result_search = mysqli_stmt_get_result($stmt_search);

            }elseif(isset($_GET['cat'])){
            $cat = "%{$_GET['cat']}%";
            $stmt_cat = mysqli_prepare($connect,"SELECT * FROM product WHERE cat_id = ?" );
            mysqli_stmt_bind_param($stmt_cat, "s", $cat);
            mysqli_stmt_execute($stmt_cat);
            $result_cat = mysqli_stmt_get_result($stmt_cat);
         }
            while ($row = mysqli_fetch_array($result_cat)):
            
            ?>
         <div class="col-md-4">
               <div class="blog-content">
                  <figure>
                     <img src="img/<?php echo $row['image'] ?>" class="w-100">
                  </figure>
                  <h5><?php echo $row['title'] ?></h5>
                  <p><?php echo $row['des'] ?></p>
                  <ul>
                     <li><i class="fa fa-bars"></i>دسته بندی : <?php  ?></li>
                  </ul>
                  <a href="single.php?id=<?php echo htmlspecialchars($row['id']) ?>" class="mybtn"><i class="fa fa-continuous"></i>مشاهده محصول&raquo;</a>	
               </div>
            </div>
            <?php endwhile;
             ?>
      <!--------------------footer---------------------->
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="footer-description">
                     <ul>
                        <li>تضمین اصالت کالاهای فروخته شده</li>
                        <li>فروش برند های معتبر</li>
                        <li>پاسخگویی 24 ساعته</li>
                        <li>امکان پرداخت آنلاین با کارت بانکی و پرداخت در محل</li>
                        <li>امکان بازگشت تا یک هفته در صورت عدم رضایت مشتری</li>
                        <li>خرید آسان و مطمئن</li>
                        <li>قیمت های مناسب</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-description2">
                     <ul>
                        <li><i class="fa fa-truck"></i>تحویل پستی سریع</li>
                        <li><i class="fa fa-plane"></i>ارسال با پست پیشتاز و سفارشی</li>
                        <li><i class="fa fa-cart-arrow-down"></i>خرید آسان و راحت</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="news-form">
                     <h5>در خبرنامه عضو شوید</h5>
                     <form action="" >
                        <input type="email" placeholder="ایمیل خود را وارد کنید" >
                        <button type="submit" ><i class="fa fa-envelope-o"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!----------------------------------> 
      <div class="copy-right">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  &copy;&nbsp;&nbsp;طراحی و کدنویسی سئو 90&nbsp;&nbsp;&nbsp;&nbsp;
                  <span>info@seo90.ir</span>
               </div>
            </div>
         </div>
      </div>
      <!----------------------------------> 
      <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
      <script src="js/jquery.simple.timer.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>
      <script src="js/owl.carousel.min.js" type="text/javascript"></script>
      <script src="js/js.js" type="text/javascript"></script>
   </body>
</html>