<?php
session_start();
ob_start();
include("login.php");
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){   
    $user = $_POST['user'];
    $password = $_POST['password'];
    $role =  login($user,$password);
    $_SESSION['role'] = $role;
    if($_SESSION['role'] ==1){
        header('location:admin/index.php');
    }elseif($_SESSION['role'] == 2){
        echo '<script type="text/javascript">alert(" day la user")</script>';
    }else{
        echo '<script type="text/javascript">alert(" sai user hoac password")</script>';
    }
}
if((isset($_POST['dangky']))&&($_POST['dangky'])){ 
    include("dangky.php");
    $user = $_POST['user'];
    $password = $_POST['password'];
    dangky($user,$password,2);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header start-->
    <header class="header">
        <div class="header-top">
            <a href="index.php?page=home" class="logo"><span>DuyAnh</span>BookStore</a>
            <form action="" class="header-search">
                <input type="search" name="" placeholder="tìm kiếm..." id="search-box">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>
            <div class="header-icons">
                <div id="search-btn" class="fa-solid fa-magnifying-glass"></div>
                <a href="#" class="fa-regular fa-heart"></a>
                <a href="#" class="fas fa-cart-shopping"></a>
                <div class="fa-regular fa-user" id="login-btn"></div>
            </div>
        </div>
    <div class="header-navbar">
        <nav class="navbar">
            <a href="index.php?page=TV">sách tiếng việt</a>
            <a href="index.php?page=economic">sách kinh tế</a>
            <a href="index.php?page=TA">sách tiếng anh</a>
            <a href="index.php?page=TLH">sách tâm lý học</a>
            <a href="index.php?page=SGK">sách giáo khoa</a>
        </nav>
    </div>
    <div class="login-form" >
        <div class="close-btn fa-solid fa-xmark"></div>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <h3>Đăng nhập</h3>
            <span>User</span>
            <input type="text" class="box" name="user" placeholder="nhập User" >
            <span>Mật Khẩu</span>
            <input type="password" class="box" name="password" placeholder="nhập mật khẩu" >
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <input type="submit" value="Đăng nhập" name="dangnhap" class="btn">
            <p><div  id="register">đăng ký</div></p>
        </form>
    </div>
    <div class="register-form">
        <div class="close-btn fa-solid fa-xmark"></div>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <h3>Đăng ký</h3>
            <span>User</span>
            <input type="text" class="box" name="user" placeholder="nhập User" >
            <span>Mật Khẩu</span>
            <input type="password" class="box" name="password" placeholder="nhập mật khẩu" >
            <input type="submit" value="Đăng ký" name="dangky" class="btn">
            <p><div id="login">đăng nhập</div></p>
        </form>
    </div>
    </header>
       <!--header end-->
       <!--home start-->
       <?php include("switch.php") ?>
       <!--home end-->

       <!--footer start-->
       <footer class="footer">
        <div class="footer-container">
            <div class="box">
                <h3>vị trí</h3>
                <a href=""><i class="fa-solid fa-map"></i>Việt Nam</a>
                <a href=""><i class="fa-solid fa-map"></i>Mỹ</a>
                <a href=""><i class="fa-solid fa-map"></i>Italy</a>
                <a href=""><i class="fa-solid fa-map"></i>Japan</a>
                <a href=""><i class="fa-solid fa-map"></i>Russia</a>
                <a href=""><i class="fa-solid fa-map"></i>China</a>
            </div>
            <div class="box">
                <h3>địa điểm các cơ sở tại</h3>
                <a href=""><i class="fa-solid fa-map"></i>Việt Nam</a>
                <a href=""><i class="fa-solid fa-map"></i>Mỹ</a>
                <a href=""><i class="fa-solid fa-map"></i>Italy</a>
                <a href=""><i class="fa-solid fa-map"></i>Japan</a>
                <a href=""><i class="fa-solid fa-map"></i>Russia</a>
                <a href=""><i class="fa-solid fa-map"></i>China</a>
            </div>
            <div class="box">
                <h3>đường dẫn phụ</h3>
                <a href="index.php?page=home"><i class="fa-solid fa-house"></i>Home</a>
                <a href=""><i class="fa-solid fa-book"></i>sách tiếng việt</a>
                <a href="index.php?page=economic"><i class="fa-solid fa-book"></i>sách kinh tế</a>
                <a href=""><i class="fa-solid fa-book"></i>sách tiếng anh</a>
                <a href=""><i class="fa-solid fa-book"></i>sách giáo khoa</a>
                <a href=""><i class="fa-solid fa-book"></i>sách tâm lý học</a>
                <a href=""><i class="fa-solid fa-user"></i>tài khoản</a>
            </div>
            <div class="box">
                <h3>thông tin chúng tôi</h3>
                <a href=""><i class="fa-solid fa-phone"></i>0914xxxxxxx</a>
                <a href=""><i class="fa-solid fa-envelope"></i>masdasl60@gmail.com</a>
                <a href=""><i class="fa-solid fa-user"></i>Phan Duy Anh</a>
            </div>
        </div>
       </footer>
        <!--footer end-->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>