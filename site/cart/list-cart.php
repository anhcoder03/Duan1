<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/user.php';
//-------------------------------//
extract($_REQUEST);
// var_dump($_REQUEST);
// die;
if (exist_param("form_invoice")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['ma_kh']);
        extract($kh);
        $VIEW_NAME = "../cart/form-invoice.php";
    } else {
        header("location:" . $SITE_URL . "/account/dangnhap.php");
    }
} else {
    $VIEW_NAME = "../cart/view_cart.php";
}
require '../layout.php';