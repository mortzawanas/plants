<?php 
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['submit']))
  {
    $fullname=$_POST['fullname'];
$mobile=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$status=1;
    $password=md5($_POST['password']);
    $ret="select EmailId from users where EmailId=:email";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="INSERT INTO  users(FullName,MobileNumber,EmailId,Age,Gender,Address,status,Password) VALUES(:fullname,:mobile,:email,:age,:gender,:address,:status,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('تم انشاء الحساب بنجاح');</script>";
header('location:index.php');
}
else
{

echo "<script>alert('حدث خطأ');</script>";
header('location:index.php');
}
}
 else
{

echo "<script>alert('الايميل موجود');</script>";
header('location:index.php');
}
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>نباتاتي</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400&display=swap" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body dir="rtl" style="font-family: 'Tajawal', sans-serif !important;">
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
	<!-- page details -->
	<!-- //page details -->

	<!-- about -->
	<section class="about py-5">
		<div class="container py-xl-5 py-lg-3">
 <div class="login px-4 mx-auto mw-100">
                            <form  dir="rtl" action="#" method="post"  name="signup" onsubmit="return checkpass();">
                                <div class="form-group">
                                    <label style="font-family: 'Tajawal', sans-serif !important;" class="text-right">الاسم</label>
                                     <input type="text" class="form-control" name="fullname" id="fullname" >
                                </div>
                                <div class="form-group">
                                    <label style="font-family: 'Tajawal', sans-serif !important;" class="text-right">رقم الهاتف</label>
                                    <input type="text" class="form-control" name="mobileno" id="mobileno" required="true"  maxlength="10" pattern="[0-9]+">
                                </div>
                                
                                <div class="form-group">
                                    <label style="font-family: 'Tajawal', sans-serif !important;" class="mb-2 text-right">الايميل</label>
                                    <input type="email" name="emailid" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label style="font-family: 'Tajawal', sans-serif !important;" class="mb-2 text-right">العمر</label>
                                    <input type="text" class="form-control" name="age" id="age"  required="">
                                </div>
                                <div class="form-group">
                                    <label style="font-family: 'Tajawal', sans-serif !important;" class="mb-2 text-right">الجنس</label>
                                    <select name="gender" class="form-control" required>
<option style="font-family: 'Tajawal', sans-serif !important;" value="">اختر</option>
<option style="font-family: 'Tajawal', sans-serif !important;" value="Male">ذكر</option>
<option style="font-family: 'Tajawal', sans-serif !important;" value="Female">انثى</option>
</select>
                                </div>
                               
                                <div class="form-group">
                                    <label style="font-family: 'Tajawal', sans-serif !important;" class="text-right">العنوان</label>
                                    <input type="text" class="form-control" name="address" id="address" required="true" >
                                </div>
                                <div class="form-group">
                                    <label style="font-family: 'Tajawal', sans-serif !important;" class="text-right">كلمة المرور</label>
                                    <input type="password" class="form-control" name="password" id="password" required="">
                                </div>
                               
                                <button style="font-family: 'Tajawal', sans-serif !important;" type="submit" class="btn btn-success mb-4" name="submit">تسجيل</button>
                            
                            </form>
                        </div>
			
		</div>
	</section>
	<!-- //about -->



	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>