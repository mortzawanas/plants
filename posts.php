<!DOCTYPE html>
<html>
<?php
include('config.php'); 
?>
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
                <a style="font-family: 'Tajawal', sans-serif !important;" href="index.php#Category">الأقسام</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="product.php">المنتجات</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="index.php#Deal">صفقات</a>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="index.php#Contact">اتصل بنا</a>
            </nav>
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" id="cart-btn"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-user" id="login-btn"></a>
            </div>
            
            <!--cart container starts-->
            <div class="cart-items-container">
                
                <div class="cart-item">
                    <span class="fas fa-times"></span>
                    <img src="./images/product1.jpg" alt="">
                    <div class="content">
                        <h3>
                            Cart item 01
                        </h3>
                        <div class="price">
                            $15.99
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <span class="fas fa-times"></span>
                    <img src="./images/product2.jpg" alt="">
                    <div class="content">
                        <h3>
                            Cart item 02
                        </h3>
                        <div class="price">
                            $15.99
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <span class="fas fa-times"></span>
                    <img src="./images/product3.jpg" alt="">
                    <div class="content">
                        <h3>
                            Cart item 03
                        </h3>
                        <div class="price">
                            $15.99
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <span class="fas fa-times"></span>
                    <img src="./images/product4.jpg" alt="">
                    <div class="content">
                        <h3>
                            Cart item 04
                        </h3>
                        <div class="price">
                            $15.99
                        </div>
                    </div>
                </div>
                <a href="#" class="btn">Checkout now</a>
            </div>
            <!--cart container  ends-->
        </div>
    </header>
    <!--Header section ends-->
    <!--userlogin-->
    <div class="login-form-container">
        <form action="">
            <div id="close-login-btn" class="fas fa-close"></div>
            <h3>Sign in</h3>
            <span>Username</span>
            <input type="email" class="box" name="" placeholder="Enter your username..." id="">
            <span>Password</span>
            <input type="password" class="box" name="" placeholder="Enter your password..." id="">
            <div class="check-box">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <input type="submit" value="Sign in" class="btn">
            <p>Forget password?<a href="#">click here</a></p>
            <p>Don't have an account ? <a href="#">Sign up</a></p>
        </form>
    </div>
    <!--user login ends-->

    <!--Home section starts-->

    <!--category section starts-->

    <!--category section ends-->
    <!--poduct section starts-->
    <section class="product" id="Product">
        <h1 style="font-family: 'Tajawal', sans-serif !important;" class="heading"> المنجات</h1>
        <div class="box-container">

        <?php $sql = "SELECT * from  posts ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
            <div class="box">
                <!-- <span class="discount">-10%</span> -->
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="./images/plant.jpg" alt="">
                <h3 style="font-family: 'Tajawal', sans-serif !important;"><?php echo htmlentities($result->FullName);?></h3>
                <p style="font-family: 'Tajawal', sans-serif !important; font-size:14px"><?php echo htmlentities($result->Category);?></p>
                <div class="stars">
                <?php if($result->rate == 5){
                    echo '<i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>';
                }elseif($result->rate == 4){
                echo '<i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>';
                }elseif($result->rate == 3){
                    echo '<i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>';
                    }
                    elseif($result->rate == 2){
                        echo '<i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>';
                        }
                        else{
                            echo '<i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>';
                            }
                ?>
                    
                </div>
                <div class="quantify">
                    <span style="font-family: 'Tajawal', sans-serif !important;">الكمية:</span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">
                <?php echo htmlentities($result->price);?>$
                </div>
                <a style="font-family: 'Tajawal', sans-serif !important;" href="#" class="btn">شراء</a>
            </div>
            <?php $cnt=$cnt+1; }} ?>
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