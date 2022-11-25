<?php
require_once "../../dao/pdo.php";
require_once "../../dao/user.php";
require "../../global.php";
// check_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = user_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ma_kh = $_POST['ma_kh'];
    $ho_ten = $_POST['ho_ten'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    $kich_hoat = $_POST['kich_hoat'];
    $vaitro = $_POST['vai_tro'];

    // Upload file lên host
    $Image = save_file('Image', "$UPLOAD_URL/users/");
    //insert vào db
    user_insert($ma_kh, $vaitro, $ho_ten, $kich_hoat, $mat_khau, $email, $Image);

    //show dữ liệu
    $items = user_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_kh = $_REQUEST['ma_kh'];
    $khach_hang_info = user_select_by_id($ma_kh);
    extract($khach_hang_info);

    //show dữ liệu
    $items = user_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_kh = $_REQUEST['ma_kh'];
    user_delete($ma_kh);
    //hiển thị danh sách

    $items = user_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_kh = $_POST['ma_kh'];
        user_delete($arr_ma_kh);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = user_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_kh = $_POST['ma_kh'];
    $ho_ten = $_POST['ho_ten'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    $kich_hoat = $_POST['kich_hoat'];
    $vaitro = $_POST['vai_tro'];


    $Image = save_file('Image', "$UPLOAD_URL/users/");
    // $Image = strlen($uphinh) > 0 ? $uphinh : $Image;

    user_update($ma_kh, $mat_khau, $ho_ten, $email, $Image, $kich_hoat, $vaitro);
    // khach_hang_update();
    //hiển thị danh sách

    $items = user_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
// $VIEW_NAME = "user/list.php";
require "../layout.php";