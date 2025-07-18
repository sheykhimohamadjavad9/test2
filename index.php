<?php  require_once 'db.php';  
session_start();
?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>فروشگاه</title>
      <link href="style/font-awesome.css" rel="stylesheet" type="text/css">
      <link href="style/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="style/owl.carousel.css" rel="stylesheet" type="text/css">
      <link href="style/owl.theme.default.css" rel="stylesheet" type="text/css">
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
                     <?php  if(isset($_SESSION['username'])):  ?>
                  <div>
                        خوش اومدی <?php echo htmlspecialchars($_SESSION['username']);  ?> 
                  </div><br>
                  <a href="#" class="mybtn"><i class="fa fa-user-plus"></i>صفحه کاربری</a>
                  <?php else: ?>
                     <a href="register.php" class="mybtn"><i class="fa fa-user-plus"></i>ورود و ثبت نام</a>
                     <?php endif; ?>
                     <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>  				
                  </div>
               </div>
               <div class="col-md-6">
                  <form action="search.php" method="get">
                     <input type="text" name="search" placeholder="کالای مورد نظر را جستجو کنید">
                     <button type="submit" name="search-btn"><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div><!--top2-->      
      <!---------------------------------->        
      <br>
      <!----------------------------------> 
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="slider-box">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="col-md-6" style="padding-top: 20px;">
                              <h4>Canon 638044</h4>
                              <span>دوربین کانن سری 6</span>
                              <p>دوربین کانن از سری 6 با لنز همراه.قابلیت تصویر برداری اچ دی.قابلیت تنظیم در حالت شب . دارای دو عدد باتری اضافی</p>
                           </div>
                           <div class="col-md-6">
                              <img src="img/p20lite-listimage-black.png" class="w-75" >
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="col-md-6" style="padding-top: 20px;">
                              <h4>Huawei Tab G45</h4>
                              <span>تبلت جی 5 هوآوی</span>
                              <p>تبلت 10 اینج هوآوی . با قابلیت نصب سه عدد سیمکارت همزمان . دارای شبکه فورجی و اتصال سریع . دارای باتری اتمی و دوربین 13 مگاپیکسل</p>
                           </div>
                           <div class="col-md-6">
                              <img src="img/p20lite-listimage-black.png" class="w-75" >
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--slider-box-->
            </div>
         </div>
      </div>
      <!----------------------------------> 
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div class="coopen">
                  <img src="img/coopen.png" class="w-100" />
               </div>
            </div>
            <div class="col-md-9">
               <div class="vizheh">
                  <div class="col-md-6">
                     <div class="vizheh-img">
                        <img src="img/p20lite-listimage-black.png" class="w-100" />
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="vizheh-content">
                        <div><del>729,000 تومان</del></div>
                        <h4>685,000 تومان</h4>
                        <h3>Huawei Tab Y300G2</h3>
                        <ul>
                           <li>حافظه داخلی 32 گیگابایت</li>
                           <li>دوربین 13 مگاپیکسل</li>
                        </ul>
                        <hr>
                        <span>زمان باقیمانده تا پایان سفارش</span> 
                        <div class="counter" data-minutes-left="1000"></div>
                     </div>
                  </div>
                  <div class="vizheh-tag">
                     <span>فرصت ویژه</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->   
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="two-slider">
                  <h4>کالای پر فروش</h4>
                  <div class="owl-carousel owl-theme ov2">
                  <?php    
                  $query = mysqli_query($connect, query:"SELECT * FROM product");
                  while ($row = mysqli_fetch_array($query)):
                  ?>
                     <div class="item">
                        <figure>
                           <a href="search.php?cat=<?php echo htmlspecialchars($row['id']) ?>"><img src="img/<?php echo $row ['image']  ?>" class="w-100" /></a>
                        </figure>
                        <h5><?php echo $row ['title']  ?></h5>
                        <span><?php echo $row ['price']  ?> تومان</span>
                     </div>
                     <?php endwhile; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!----------------------------------> 
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="book-baner">
                  <a href="#"><img src="img/book-baner.jpg" class="w-100" /></a>
                  <h4>کتاب های کنکور</h4>
               </div>
            </div>
         </div>
      </div>
      <!----------------------------------> 
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="two-slider">
                  <h4>دسته بندی ها</h4>
                  <div class="owl-carousel owl-theme ov2">
                  <?php    
                  $query = mysqli_query($connect, query:"SELECT * FROM category");
                  while ($row = mysqli_fetch_array($query)):
                  ?>
                     <div class="item">
                        <figure>
                           <a href="search.php?cat=<?php echo htmlspecialchars($row['id']) ?>"><img src="img/<?php echo $row ['cat_image']  ?>" class="w-100" /></a>
                        </figure>
                        <h5><?php echo $row ['cat_name']  ?></h5>
                        
                     </div>
                     <?php endwhile; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!----------------------------------> 
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="bodybulding-baner">
                  <a href="#"><img src="img/bodybulding-baner.jpg" class="w-100" /></a>
                  <h4>مکمل های ورزشی</h4>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->  
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="two-slider">
                  <h4>کالای پر فروش</h4>
                  <div class="owl-carousel owl-theme ov2">
                  <?php    
                  $query = mysqli_query($connect, query:"SELECT * FROM product WHERE bazdid = '1'");
                  while ($row = mysqli_fetch_array($query)):
                  ?>
                     <div class="item">
                        <figure>
                           <a href="search.php?cat=<?php echo htmlspecialchars($row['id']) ?>"><img src="img/<?php echo $row ['image']  ?>" class="w-100" /></a>
                        </figure>
                        <h5><?php echo $row ['title']  ?></h5>
                        <span><?php echo $row ['price']  ?> تومان</span>
                     </div>
                     <?php endwhile; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!----------------------------------> 
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="blog-content">
                  <figure>
                     <img src="img/off/watch/1.jpg" class="w-100">
                  </figure>
                  <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                  <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل گوش...</p>
                  <ul>
                     <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                     <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                     <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                  </ul>
                  <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>	
               </div>
            </div>
            <div class="col-md-4">
               <div class="blog-content">
                  <figure>
                     <img src="img/off/watch/1.jpg" class="w-100">
                  </figure>
                  <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                  <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل گوش...</p>
                  <ul>
                     <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                     <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                     <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                  </ul>
                  <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>	
               </div>
            </div>
            <div class="col-md-4">
               <div class="blog-content">
                  <figure>
                     <img src="img/off/watch/1.jpg" class="w-100">
                  </figure>
                  <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                  <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل گوش...</p>
                  <ul>
                     <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                     <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                     <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                  </ul>
                  <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>	
               </div>
            </div>
         </div>
      </div>
      <!----------------------------------> 
      <div class="tab-box">
         <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#watch"><i class="fa fa-gift"></i>ساعت مچی</a></li>
            <li><a data-toggle="tab" href="#badaligat"><i class="fa fa-gift"></i>بدلیجات</a></li>
            <li><a data-toggle="tab" href="#behdashti"><i class="fa fa-gift"></i>آرایشی و بهداشتی</a></li>
            <li><a data-toggle="tab" href="#bazi"><i class="fa fa-gift"></i>اسباب بازی</a></li>
            <li><a data-toggle="tab" href="#varzesh"><i class="fa fa-gift"></i>تجهیزات ورزشی</a></li>
            <li><a data-toggle="tab" href="#lebas"><i class="fa fa-gift"></i>لباس فصل</a></li>
         </ul>
         <div class="container">
            <div class="row">
               <div class="tab-content">
                  <div id="watch" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="badaligat" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="behdashti" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="bazi" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="varzesh" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                     </div>
                  </div>
                  <div id="lebas" class="tab-pane fade">
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      <!---------------------------------->  
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