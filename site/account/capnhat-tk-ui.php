<div class="container">
<h1 class="heading">CẬP NHẬT TÀI KHOẢN</h1>
<div class="content-update">
    <div class="content-img">
        <img src="<?= $UPLOAD_URL . '/users/' . $Image ?>" alt="">
    </div>
    <div class="content-main">
        <form action="<?= $SITE_URL . '/account/cap-nhat-tk.php' ?>" class="form-update" method="POST"
            enctype="multipart/form-data">
            <div class="form-group ">
                <label for="" class="title-update">Tên đăng nhập</label>
                <input type="text" name="ma_kh" id="" class="form-control" value="<?= $ma_kh ?>" readonly
                    aria-describedby="helpId">
            </div>
            <div class="form-group form">
                <label for="" class="title-update">Họ và tên</label>
                <input type="text" name="ho_ten" id="" class="form-control" value="<?= $ho_ten ?>"
                    aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="" class="title-update">Địa chỉ email</label>
                <input type="text" name="email" id="" class="form-control" value="<?= $email ?>"
                    aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="" class="title-update">Ảnh đại diện</label>
                <input type="file" name="Image" id="" class="form-control" aria-describedby="helpId">
            </div>
            <input name="vaitro" value="<?= $vaitro ?>" type="hidden">
            <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
            <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
            <input name="hinh" value="<?= $Image ?>" type="hidden">
            <div class="form-group">
                <button type="submit" name="btn_update" class="submit">Cập
                    nhật</button>
            </div>
        </form>
    </div>
</div>
</div>