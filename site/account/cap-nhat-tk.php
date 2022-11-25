<?php
require '../../global.php';
require '../../dao/user.php';


check_login();

extract($_REQUEST);

if (exist_param("btn_update")) {
    $file_name = save_file("Image", "$UPLOAD_URL/users/");
    $Image = $file_name ? $file_name : $Image;
    try {
        user_update($ma_kh, $mat_khau, $ho_ten, $email, $Image, $kich_hoat, $vaitro);
        echo "<script>alert('Cập nhật thành công !')</script>";
        $_SESSION['user'] = user_select_by_id($ma_kh);
    } catch (Exception $exc) {
        echo "<script>alert('Cập nhật thất bại!')</script>";
    }
} else {
    extract($_SESSION['user']);
}
$VIEW_NAME = "account/capnhat-tk-ui.php";
require '../layout.php';