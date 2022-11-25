<?php
require_once 'pdo.php';
function User_insert($ma_kh, $vaitro, $ho_ten, $kich_hoat, $mat_khau, $email, $Image)
{
    $sql = "INSERT INTO User(ma_kh,vaitro,ho_ten,kich_hoat,mat_khau,email,Image) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_kh, $vaitro, $ho_ten, $kich_hoat, $mat_khau, $email, $Image);
}
function User_update($ma_kh, $vaitro, $ho_ten, $kich_hoat, $mat_khau, $email, $Image)
{
    $sql = "UPDATE User SET mat_khau=?,ho_ten=?,email=?,Image=?,kich_hoat=?,vaitro=? WHERE ma_kh=?";
    pdo_execute($sql, $vaitro, $ho_ten, $kich_hoat, $mat_khau, $email, $Image, $ma_kh);
}
function user_delete($ma_kh)
{
    $sql = "DELETE FROM user WHERE ma_kh=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}
function User_select_all()
{
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
function User_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM user WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
function User_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM user WHERE ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function User_exist_email($email)
{
    $sql = "SELECT count(*) FROM user WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function User_change_password($ma_kh, $mat_khau_moi)
{

    $sql = "UPDATE User SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}
function name_user_select_by_id($ma_kh)
{
    $sql = "SELECT ho_ten FROM user WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}