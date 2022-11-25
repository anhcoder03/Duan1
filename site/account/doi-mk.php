<?php
require '../../global.php';
require '../../dao/user.php';
check_login();
extract($_REQUEST);
if (exist_param('btn_change')) {
    if ($mat_khau2 != $mat_khau3) {
        echo "<script>alert('Xác nhận mật khẩu mới không đúng !')</script>";
    } else {
        $user = user_select_by_id($ma_kh);
        if ($user) {
            if ($user['mat_khau'] == $mat_khau) {
                try {
                    user_change_password($ma_kh, $mat_khau2);
                    echo "<script>alert('Cập nhật mật khẩu thành công !')</script>";
                } catch (Exception $exc) {
                    echo "<script>alert('Cập nhật mật khẩu thất bại !')</script>";
                }
            } else {
                echo "<script>alert('Mật khẩu cũ không đúng !')</script>";
            }
        } else {
            echo "<script>alert('Sai tên dăng nhập!')</script>";
        }
    }
}
$VIEW_NAME = 'account/doi-mk-ui.php';
require '../layout.php';