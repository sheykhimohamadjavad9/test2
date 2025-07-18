<?php require_once 'db.php'  ?>
<?php 
$id = $_GET['id'];
$query = mysqli_query($connect,"SELECT * FROM product WHERE id = '$id'");
$row = mysqli_fetch_array($query);
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
      <!---------------------------------->          
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="single-box">
                  <div class="row">
                     <div class="col-md-7">
                        <h5><?php echo $row['title']; ?></h5>
                        <h6><?php echo $row['des']; ?></h6>
                        <hr>
                        <div class="row">
                           <div class="col-md-7">
                              <div class="single-content-right">
                                 <ul class="brand-ul">
                                    <li>برند : <a href="#">هوآوی</a></li>
                                    <li>دسته بندی : <a href="search.php?cat=<?php echo $row['cat_id'] ?>">
                                       <?php  
                                       $cat_id = $row['cat_id'];
                                       $get_cat_post = mysqli_query($connect, "SELECT * FROM category WHERE id = '$cat_id'");
                                       $get_cat_row = mysqli_fetch_array($get_cat_post);
                                       echo $get_cat_row['cat_name']
                                       ?>
                                    </a></li>
                                 </ul>
                                 <br>
                                 <span>مشخصات مختصر محصول :</span><br>
                                 <ul class="product-ul">
                                    
                                    <li><?php echo $row['des']  ?></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="single-content-left">
                                 <ul>
                                    <span>وضعیت : موجود در انبار</span><br><br>
                                    <li>گارانتی : <?php echo $get_cat_row['cat_name'] ?></li>
                                    <br>
                                    <li>
                                       رنگ بندی : 
                                       <ul>
                                          <li><i class="fa fa-square white"></i>سفید</li>
                                          <li><i class="fa fa-square black"></i>مشکی</li>
                                          <li><i class="fa fa-square silver"></i>نقره ای</li>
                                          <li><i class="fa fa-square gold"></i>طلایی</li>
                                       </ul>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <h3><?php  echo $row['price'] ?> تومان</h3>
                        <div  class="btn-single">
                           <a href="#"><i class="fa fa-cart-plus"></i>خرید آنلاین</a>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="single-img">
                           <figure>
                              <img src="img/<?php echo $row['image']  ?>" class="w-100 s-img" data-zoom-image="img/<?php echo $row['image']  ?>">
                           </figure>
                        </div>
                        <div class="single-img-slider">
                           <div class="owl-carousel owl-theme ov-single">
                             
                              <div class="item">
                                 <a data-fancybox="gallery"  href="img/<?php echo $row['image']  ?>"><img src="img/<?php echo $row['image']  ?>" class="w-100"></a>
                              </div>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->  
      <div class="container">
         <span class="releated-products">محصولات مرتبط</span>
         <hr>
         <div class="row">
            <div class="col-md-12">
               <div class="single-two-slider">
                  <div class="owl-carousel owl-theme ov-single-two">
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->  
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="single-tabs">
                  <ul class="nav nav-tabs">
                     <li class="active"><a data-toggle="tab" href="#one"><i class="fa fa-file"></i>مشخصات فنی</a></li>
                     <li><a data-toggle="tab" href="#two"><i class="fa fa-pencil"></i>نظرات کاربران</a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="one" class="tab-pane fade">
                        <p class="bg-light"><span>شرکت سازنده:</span>هوآوی</p>
                        <p class="bg-light"><span>مدل:</span>Tab G6</p>
                        <p class="bg-light"><span>گارانتی:</span>Huawei</p>
                        <p class="bg-light"><span>شبکه های تلفن:</span>4G-3G-LTE</p>
                        <p class="bg-light"><span>تعداد سیمکارت:</span>2</p>
                        <p class="bg-light"><span>حافظه داخلی:</span>32G</p>
                        <p class="bg-light"><span>پشتیبانی از کارت sd:</span>بله</p>
                        <p class="bg-light"><span>باتری:</span>1300 میلی آمپر</p>
                        <p class="bg-light"><span>باتری اضافی:</span>ندارد</p>
                        <p class="bg-light"><span>جک هدفون:</span>دارد</p>
                        <p class="bg-light"><span>گارد:</span>ندارد</p>
                     </div>
                     <div id="two" class="tab-pane fade">
                        نظری وجود ندارد...
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