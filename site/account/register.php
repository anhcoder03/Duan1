<div class="container-content">
    <h1 class="heading">ĐĂNG KÝ</h1>
    <div id="register" class="tabcontent">
        <form action="<?= $SITE_URL ?>/account/register-xuly.php" method="POST" enctype="multipart/form-data" id="form">
            <div class="form-group">
                <p>Họ và tên</p>
                <input type="text" name="ho_ten" placeholder="Họ tên">
                <p>Tên đăng nhập</p>
                <input type="text" name="ma_kh" placeholder="Username" />
                <p>Mật khẩu</p>
                <input type="text" name="mat_khau" placeholder="Password" />
                <p>Nhập lại mật khẩu</p>
                <input type="text" name="mat_khau2" placeholder="Re-password" />
                <p>Email</p>
                <input type="text" name="email" placeholder="Email" require />
                <p>Ảnh đại diện</p>
                <input type="file" name="Image" placeholder="Ảnh đại diện">
                <input type="hidden" name="kich_hoat" value="1">
                <input type="hidden" name="vaitro" value="0">
                <span class="message"><?= $MESSAGE ?></span>
            </div>
            <div class="form-submit">
                <button class="submit" name="btn_register">ĐĂNG KÝ</button>
                <span>Bạn đã có tài khoản? <a href="<?= $SITE_URL ?>/account/dangnhap.php">Đăng nhập</a></span>
            </div>
        </form>
    </div>
</div>