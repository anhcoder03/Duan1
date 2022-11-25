<?php

require '../../global.php';
require '../../dao/user.php';

extract($_REQUEST);
$VIEW_NAME = "account/register.php";


extract($_REQUEST);

if (exist_param("btn_register")) {
    if ($ho_ten == "") {
        $MESSAGE = "Họ và tên không được bỏ trông";
    } else if ($ma_kh == "") {
        $MESSAGE = "Tên đăng nhập không đươc bỏ trống";
    } else if ($mat_khau == "") {
        $MESSAGE = "Mật khẩu không được bỏ trống";
    } else if ($mat_khau != $mat_khau2) {
        $MESSAGE = "Mật khẩu phải trùng nhau";
    } else if ($email == "") {
        $MESSAGE = "Email không được để trống";
    } else if (user_exist($ma_kh)) {
        $MESSAGE = "Tên đăng nhập đã tồn tại";
    } else {

        $file_name = save_file("Image", "$UPLOAD_URL/users/");
        $Image = $file_name ? $file_name : "";
        try {
            user_insert($ma_kh, $vaitro, $ho_ten, $kich_hoat, $mat_khau, $email, $Image);
            echo "<script>alert('Đăng ký thành viên thành công');</script>";
            $VIEW_NAME = "dangnhap-ui.php";
        } catch (Exception $exc) {
            echo "<script>alert('Đăng ký thành viên thất bại');</script>";
        }
    }
} else {
    global $ma_kh, $vaitro, $ho_ten, $kich_hoat, $mat_khau, $email, $Image, $mat_khau2;
    $VIEW_NAME = "account/register.php";
}

require '../layout.php';