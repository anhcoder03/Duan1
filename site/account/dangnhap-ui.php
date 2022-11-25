<div class="container-content">
    <h1 class="heading">ĐĂNG NHẬP</h1>

    <div id="login" class="tabcontent">
        <form action="<?= $SITE_URL ?>/account/dangnhap.php" id="form">
            <div class="form-group">
                <p>Tài khoản</p>
                <input type="text" name="ma_kh" placeholder="Username" />
                <p>Mật khẩu</p>
                <input type="password" name="mat_khau" placeholder="Password" />
                <span class="message"><?= $MESSAGE ?></span>
            </div>
            <div class="form-checkbox">
                <input type="checkbox" name="ghi_nho" checked />
                <label for="checkbox">Nhớ mật khẩu</label>3
            </div>
            <div class="form-submit">
                <button class="submit" name="btn_login">Đăng nhập</button>
                <a href="<?= $SITE_URL ?>/account/forgot-mk.php" class="forget-pass">Quên mật khẩu?</a>
                <span>Bạn chưa có tài khoản? <a href="<?= $SITE_URL ?>/account/register-xuly.php">Đăng ký</a></span>
            </div>
        </form>
    </div>
</div>