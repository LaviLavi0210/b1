<?php
session_start();
@include("./connetion/connet.php");

// Khởi tạo giỏ hàng nếu chưa có
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
$count = count($_SESSION["cart"]);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Giao diện chính</title>
    <link rel="stylesheet" type="text/css" href="style/giaodien.css">
</head>

<body>
    <div class="waper">
        <div class="banner">
            <img src="img/banner1.png" width="1000" height="150">
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <?php
                if (file_exists('menu/menu_top.php')) {
                    include 'menu/menu_top.php';
                }
                ?>
                <p style="line-height:45px; text-align:right; margin-right:10px;">
                    <a href="#" style="color:white;">Giỏ hàng có <?php echo $count; ?> sản phẩm</a>
                </p>
            </ul>
        </div>
        <div class="conten">
            <div class="left">
                <p style="text-align:center; background:#48dbfb; color:red; padding:7px; font-weight:bold;">Sản phẩm</p>
                <ul>
                    <li><a href="#">Máy tính bảng</a></li>
                    <li><a href="#">Điện thoại</a></li>
                    <li><a href="#">Máy tính xách tay</a></li>
                    <li><a href="#">Phụ kiện</a></li>
                </ul>
                <p style="text-align:center; background:#48dbfb; color:red; padding:7px; font-weight:bold;">Thương hiệu</p>
                <ul>
                    <?php
                    if (file_exists('menu/menu_left.php')) {
                        include 'menu/menu_left.php';
                    }
                    ?>
                </ul>
            </div>
            <div class="khungchinh">
                <p style="text-align:center; background:#09F; color:#FFF; padding:7px; font-weight:bold;">DANH SÁCH CÁC SẢN PHẨM</p>
                <div class="danhsachall">
                    <ul>
                        <?php
                        if (file_exists('layallsp.php')) {
                            include 'layallsp.php';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="right">
                <ul>
                    <li style="text-align:center; font-weight:bold; color:red;">Đăng nhập</li>
                    <li><input type="text" placeholder="Tài khoản" style="width:160px; height:25px;"></li>
                    <li><input type="password" placeholder="Mật khẩu" style="width:160px; height:25px;"></li>
                    <li><button style="width:160px; height:25px;">Đăng nhập</button></li>
                    <li><a href="dangky.php"><button style="width:160px; height:25px; margin-top:5px;">Đăng ký</button></a></li>
                </ul>
                <p style="text-align:center; background:#48dbfb; color:red; padding:7px; font-weight:bold;">Tìm kiếm</p>
                <p style="margin-left:10px;">
                    <input type="text" style="height:20px; width:120px;">
                    <a href="#"><img src="img/icontimkiem.png" height="25" width="25"></a>
                </p>
                <ul>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            <p style="text-align:center; color:#FFF; background:#27ae60; line-height:40px;">Copyright 2019</p>
        </div>
    </div>
</body>

</html>