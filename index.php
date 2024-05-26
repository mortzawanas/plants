<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['login'])) 
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql ="SELECT id FROM users WHERE EmailId=:email and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['bbdmsdid']=$result->id;
}
$_SESSION['login']=$_POST['email'];
header('location:index.php');
} else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>نباتاتي</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400&display=swap" rel="stylesheet">
</head>

<body dir="rtl" style="font-family: 'Tajawal', sans-serif !important;">
    <!--Header section starts-->
    <header>
        <div class="header-1">
            <div class="share">
                <span style="font-family: 'Tajawal', sans-serif !important;">تابعنا:</span>
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
            <div class="share">
                <!-- <span>Call us:</span>
                <a href="#">+001-234-9878</a> -->
            </div>

        </div>
        <div class="header-2">
            <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="logo"><i class="fas fa-seedling"></i>نبا<span style="font-family: 'Tajawal', sans-serif !important;">تـــــــا</span>تي</a>
            <form action="" class="serach-bar-container">
                <input style="font-family: 'Tajawal', sans-serif !important;" type="search" id="search-bar" placeholder="ابحث هنا...">
                <label for="search-bar" class="fas fa-search"></label>

            </form>
        </div>
        <div class="header-3">
            <div id="menu-bar" class="fas fa-bars ">
            </div>
            <nav class="nav-bar" style="font-family: 'Tajawal', sans-serif !important;">
                <a style="font-family: 'Tajawal', sans-serif !important;" href="index.php#Home">الرئيسية</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="posts.php">المنتجات</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="index.php#Category">الأقسام</a>
                
                <a style="font-family: 'Tajawal', sans-serif !important;" href="index.php#Deal">صفقات</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="index.php#Contact">اتصل بنا</a>
            </nav>
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" id="cart-btn"></a>
                <a href="#" class="fas fa-heart"></a>
                <?php if ($_SESSION['bbdmsdid']) {?>
    <!-- Display logout link if user is logged in -->
    <a class="fa-sign-out" href="logout.php"><i style="color:red;" class="fa fa-sign-out"></i>تسجيل خروج</a>
<?php } else { ?>
    <!-- Display login button if user is not logged in -->
    <a href="#" class="fas fa-user" id="login-btn"></a>
<?php } ?>
            </div>
            
        </div>
    </header>
    <!--Header section ends-->
    <!--userlogin-->
    <div class="login-form-container">
    

                            
        <form style="font-family: 'Tajawal', sans-serif !important;" dir="rtl" action="">
            <div id="close-login-btn" class="fas fa-close"></div>
            <h3 style="font-family: 'Tajawal', sans-serif !important;">تسجيل الدخول</h3>
            <span style="font-family: 'Tajawal', sans-serif !important;">الايميل</span>
            <input style="font-family: 'Tajawal', sans-serif !important;" type="email" class="box" name="email" placeholder="ادخل الايميل .." id="">
            <span style="font-family: 'Tajawal', sans-serif !important;">الباسوورد</span>
            <input style="font-family: 'Tajawal', sans-serif !important;" type="password" class="box" name="password" placeholder="ادخل الباسوورد .." id="">
            <div style="font-family: 'Tajawal', sans-serif !important;" class="check-box">
                <input type="checkbox" name="" id="remember-me">
                <label style="font-family: 'Tajawal', sans-serif !important;" for="remember-me">تذكرني</label>
            </div>
            <button style="font-family: 'Tajawal', sans-serif !important;" type="submit" class="btn submit mb-4" name="login">Login</button>
            <p style="font-family: 'Tajawal', sans-serif !important;"> ليس لديك حساب ؟ <a href="sign-up.php" style="font-family: 'Tajawal', sans-serif !important;">انشاء حساب</a> </p>
        </form>
        
    </div>
    <!--user login ends-->

    <!--Home section starts-->
    <section class="Home" id="Home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background:url(./images/slider1.jpg);">
                        <div class="content">
                            <span style="font-family: 'Tajawal', sans-serif !important;">خصم ٧٥٪</span>
                            <h3 style="font-family: 'Tajawal', sans-serif !important;">عروض كبيرة على النباتات الكبيرة</h3>
                            <a href="#" class="btn" style="font-family: 'Tajawal', sans-serif !important;">تسوق الآن</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background:url(./images/slider2.jpg);">
                        <div class="content">
                            <span style="font-family: 'Tajawal', sans-serif !important;">خصم ٧٥٪</span>
                            <h3 style="font-family: 'Tajawal', sans-serif !important;">كافة انواع النباتات</h3>
                            <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">تسوق الآن</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background:url(./images/slider3.jpg);">
                        <div class="content">
                            <span style="font-family: 'Tajawal', sans-serif !important;">خصم ٧٥٪</span>
                            <h3 style="font-family: 'Tajawal', sans-serif !important;">نباتات موسمية</h3>
                            <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">تسوق الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--Home section ends-->
    <!--banner section start-->
    <section class="banner-container">
        <div class="banner">
            <img src="./images/banner1.jpg" alt="">
            <div class="content">
                <span style="font-family: 'Tajawal', sans-serif !important;">منتجات جديدة</span>
                <h3 style="font-family: 'Tajawal', sans-serif !important;">نباتات منزلية</h3>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">تسوق الآن</a>
            </div>
        </div>
        <div class="banner">
            <img src="./images/banner2.jpg" alt="">
            <div class="content">
                <span style="font-family: 'Tajawal', sans-serif !important;">منتجات جديدة</span>
                <h3 style="font-family: 'Tajawal', sans-serif !important;">نباتات مكتبية</h3>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">تسوق الآن</a>
            </div>
        </div>

    </section>
    <!--banner section ends-->
    <!--category section starts-->
    <section class="Category" id="Category">
        <h1 style="font-family: 'Tajawal', sans-serif !important;" class="heading">الاقسام</h1>
        <div class="box-container">
            <div class="box">
                <img src="./images/cat1.jpg" alt="">
                <div class="content">
                    <h3 style="font-family: 'Tajawal', sans-serif !important;">بونساي</h3>
                    <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">تسوق الآن</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/cat2.jpg" alt="">
                <div class="content">
                    <h3 style="font-family: 'Tajawal', sans-serif !important;">نباتات منزل</h3>
                    <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">تسوق الآن</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/cat3.jpg" alt="">
                <div class="content">
                    <h3 style="font-family: 'Tajawal', sans-serif !important;">نباتات مكتبية</h3>
                    <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">تسوق الآن</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/cat4.jpg" alt="">
                <div class="content">
                    <h3 style="font-family: 'Tajawal', sans-serif !important;">هدايا</h3>
                    <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">تسوق الآن</a>
                </div>
            </div>

        </div>

    </section>
    <!--category section ends-->
    <!--poduct section starts-->
    <section class="product" id="Product">
        <h1 style="font-family: 'Tajawal', sans-serif !important;" class="heading">منتج جديد</h1>
        <div class="box-container">
            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="./images/product1.jpg" alt="">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">احدث المنتجات</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantify">
                    <span style="font-family: 'Tajawal', sans-serif !important;">الكمية:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">
                    $14.70<span> $18.99</span>
                </div>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">اضافة الى السلة</a>
            </div>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="./images/product2.jpg" alt="">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">احدث المنتجات</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantify">
                    <span style="font-family: 'Tajawal', sans-serif !important;">الكمية:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">
                    $14.70<span> $18.99</span>
                </div>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">اضافة الى السلة</a>
            </div>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="./images/product3.jpg" alt="">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">احدث المنتجات</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantify">
                    <span style="font-family: 'Tajawal', sans-serif !important;">الكمية:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">
                    $14.70<span> $18.99</span>
                </div>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">اضافة الى السلة</a>
            </div>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="./images/product4.jpg" alt="">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">احدث المنتجات</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantify">
                    <span style="font-family: 'Tajawal', sans-serif !important;">الكمية:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">
                    $14.70<span> $18.99</span>
                </div>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">اضافة الى السلة</a>
            </div>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="./images/product5.jpg" alt="">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">احدث المنتجات</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantify">
                    <span style="font-family: 'Tajawal', sans-serif !important;">الكمية:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">
                    $14.70<span> $18.99</span>
                </div>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">اضافة الى السلة</a>
            </div>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="./images/product6.jpg" alt="">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">احدث المنتجات</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantify">
                    <span style="font-family: 'Tajawal', sans-serif !important;">الكمية:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">
                    $14.70<span> $18.99</span>
                </div>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">اضافة الى السلة</a>
            </div>
        </div>
    </section>

    <!--product section ends-->
    <!--icons section stars-->
    <section class="icons-container">
        <div class="icon">
            <img src="./images/icon1.png" alt="">
            <div class="content">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">توصيل مجاني</h3>
                <p style="font-family: 'Tajawal', sans-serif !important;">توصيل مجاني للطلبات</p>
            </div>
        </div>
        <div class="icon">
            <img src="./images/icon2.png" alt="">
            <div class="content">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">استرجاع كامل</h3>
                <p style="font-family: 'Tajawal', sans-serif !important;">لديك ٣٠ يوم لاسترجاع المنتج</p>
            </div>
        </div>
        <div class="icon">
            <img src="./images/icon3.png" alt="">
            <div class="content">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">الدفع بامان</h3>
                <p style="font-family: 'Tajawal', sans-serif !important;">وسائل دفع آمنه ١٠٠٪</p>
            </div>
        </div>
        <div class="icon">
            <img src="./images/icon4.png" alt="">
            <div class="content">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">دعم ٢٤/٧</h3>
                <p style="font-family: 'Tajawal', sans-serif !important;">تواصل معنا في اي وقت</p>
            </div>
        </div>
    </section>
    <!--icons section ends-->
    <!-- deal section starts  -->

    <section class="deal" id="Deal">

        <h1 style="font-family: 'Tajawal', sans-serif !important;" class="heading"> عروض اليوم </h1>

        <div class="row">

            <div class="content">
                <h3 class="title" style="font-family: 'Tajawal', sans-serif !important;"> لاتفوت هذا العرض </h3>
                <p style="font-family: 'Tajawal', sans-serif !important;">أطلب الآن أنواع النبات نباتات داخلية. نبتة البوتس و نبتة البامبو و نباتات الظل. بالإضافة إلى توفر الأصيص و أحواض الري الذاتي. كذلك المستلزمات الزراعية.
                </p>
                <div class="count-down">
                    <div class="box">
                        <h3 id="day">00</h3>
                        <span style="font-family: 'Tajawal', sans-serif !important;">يوم</span>
                    </div>
                    <div class="box">
                        <h3 id="hour">00</h3>
                        <span style="font-family: 'Tajawal', sans-serif !important;">ساعة</span>
                    </div>
                    <div class="box">
                        <h3 id="minute">00</h3>
                        <span style="font-family: 'Tajawal', sans-serif !important;">دقيقة</span>
                    </div>
                    <div class="box">
                        <h3 id="second">00</h3>
                        <span style="font-family: 'Tajawal', sans-serif !important;">ثانية</span>
                    </div>
                </div>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">افحص العرض</a>
            </div>

            <div class="image">
                <img src="images/deal-img.jpg" alt="">
            </div>

        </div>

    </section>

    <!-- deal section ends -->
    <!-- contact section starts  -->

    <section class="contact" id="Contact">

        <h1 class="heading" style="font-family: 'Tajawal', sans-serif !important;">تواصل معنا</h1>

        <div class="row">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.2238866422013!2d44.43028712488032!3d33.31296185640527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x155781858873d8fd%3A0xe0f5b9bcb5c4c898!2z2KzYp9mF2LnYqSDYqtmD2YbZiNmE2YjYrNmK2Kcg2KfZhNmF2LnZhNmI2YXYp9iqINmI2KfZhNin2KrYtdin2YTYp9iq!5e0!3m2!1sar!2siq!4v1707259197710!5m2!1sar!2siq" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen="" loading="lazy"></iframe>

            <form action="">

                <div class="inputBox">
                    <input type="text" required>
                    <label style="font-family: 'Tajawal', sans-serif !important;">الاسم</label>
                </div>
                <div class="inputBox">
                    <input type="email" required>
                    <label style="font-family: 'Tajawal', sans-serif !important;">البريد الالكتروني</label>
                </div>
                <div class="inputBox">
                    <input type="number" required>
                    <label style="font-family: 'Tajawal', sans-serif !important;">الرقم</label>
                </div>
                <div class="inputBox">
                    <textarea required name="" id="" cols="30" rows="10"></textarea>
                    <label style="font-family: 'Tajawal', sans-serif !important;">الرسالة</label>
                </div>

                <input style="font-family: 'Tajawal', sans-serif !important;" type="submit" value="ارسال" class="btn">

            </form>

        </div>

    </section>

    <!-- contact section ends -->
    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">عنا</h3>
                <p style="font-family: 'Tajawal', sans-serif !important;">متجر الكتروني لبيع جميع انواع النباتات</p>
            </div>
            <div class="box">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">الفروع</h3>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#">بغداد</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#">كربلاء</a>
            </div>
            <div class="box">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">روابط</h3>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#Home">الرئيسية</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="./admin/index.php">تسجيل دخول ادمن</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#Category">الاقسام</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#Product">المنتجات</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#Deal">عروض</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#Contact">اتصل بنا</a>
            </div>
            <div class="box">
                <h3 style="font-family: 'Tajawal', sans-serif !important;">تابعنا</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linked</a>
            </div>

        </div>

        <h1 style="font-family: 'Tajawal', sans-serif !important;" class="credit"> بوساطة <span style="font-family: 'Tajawal', sans-serif !important;"> مرتضى وعزيز </span>  |  جميع الحقوق محفوظة  </h1>

    </section>

    <!-- footer section ends -->
    <!-- scroll top button  -->
    <a href="#Home" class="scroll-top fas fa-angle-up"></a>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./js/script.js"></script>

</html>