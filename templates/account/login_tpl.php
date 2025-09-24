<div class="content-main wrap-content">
    <div class="title-main">
        <span><?= dangnhap ?></span>
        <span class="animate-border"></span>
        <p>Đăng nhập để truy cập tài khoản của bạn</p>
    </div>
    
    <div class="group-contact">
        <div class="group-form">
            <div class="box-contact-left">
                <form class="contact-form validation-user" novalidate method="post" action="account/dang-nhap" enctype="multipart/form-data">
                    
                    <?= $flash->getMessages("frontend") ?>
                    
                    <div class="contact-input">
                        <div class="">
                            <input type="text" class="text-sm input form-control" id="username" name="username" placeholder="<?= taikhoan ?>" required>
                            <div class="invalid-feedback"><?= vuilongnhaptaikhoan ?></div>
                        </div>
                    </div>
                    
                    <div class="contact-input">
                        <div class="">
                            <input type="password" class="text-sm input form-control" id="password" name="password" placeholder="<?= matkhau ?>" required>
                            <div class="invalid-feedback"><?= vuilongnhapmatkhau ?></div>
                        </div>
                    </div>
                    
                    <div class="contact-input">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember-user" id="remember-user" value="1">
                            <label class="form-check-label" for="remember-user"><?= nhomatkhau ?></label>
                        </div>
                    </div>
                    
                    <div class="contact-input button-group">
                        <input type="submit" class="gr_btniconsubmit btn" name="login-user" value="<?= dangnhap ?>">
                    </div>
                    
                </form>
            </div>
            
            <div class="box-contact-right">
                <div class="login-info">
                    <h4>Thông tin hỗ trợ</h4>
                    <p><strong>Quên mật khẩu?</strong></p>
                    <p><a href="account/dang-nhap" title="<?= quenmatkhau ?>" class="text-decoration-none"><?= quenmatkhau ?></a></p>
                    
                    <p><strong><?= banchuacotaikhoan ?></strong></p>
                    <p><a class="text-decoration-none" href="account/dang-ky" title="<?= dangkytaiday ?>"><?= dangkytaiday ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>