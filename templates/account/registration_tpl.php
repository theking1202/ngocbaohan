<div class="content-main wrap-content">
    <div class="title-main">
        <span><?= dangky ?></span>
        <span class="animate-border"></span>
        <p>Tạo tài khoản mới để trải nghiệm dịch vụ của chúng tôi</p>
    </div>

    <div class="group-contact">
        <div class="group-form">
            <div class="box-contact-left">
                <form class="contact-form validation-user" novalidate method="post" action="account/dang-ky"
                    enctype="multipart/form-data">

                    <?= $flash->getMessages("frontend") ?>

                    <div class="row-20">
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="text" class="text-sm input form-control" id="fullname" name="fullname"
                                    placeholder="<?= hovaten ?>" value="<?= $flash->get('fullname') ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                            </div>
                        </div>

                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="number" class="text-sm input form-control" id="phone" name="phone"
                                    placeholder="<?= sodienthoai ?>" value="<?= $flash->get('phone') ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                            </div>
                        </div>
                        
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="text" class="text-sm input form-control" id="address" name="address"
                                    placeholder="<?= diachi ?>" value="<?= $flash->get('address') ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                            </div>
                        </div>

                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="text" class="text-sm input form-control" id="username" name="username"
                                    placeholder="Tên đăng nhập" value="<?= $flash->get('username') ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhaptaikhoan ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="row-20">
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="password" class="text-sm input form-control" id="password" name="password"
                                    placeholder="<?= matkhau ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhapmatkhau ?></div>
                            </div>
                        </div>

                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="password" class="text-sm input form-control" id="repassword"
                                    name="repassword" placeholder="<?= nhaplaimatkhau ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhaplaimatkhau ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-input button-group">
                        <input type="submit" class="gr_btniconsubmit btn" name="registration-user"
                            value="<?= dangky ?>">
                    </div>

                </form>
            </div>

            <div class="box-contact-right">
                <div class="login-info">
                    <h4>Hướng dẫn đăng ký</h4>
                    <p><strong>Thông tin cần thiết:</strong></p>
                    <ul>
                        <li>Họ tên đầy đủ</li>
                        <li>Tên đăng nhập duy nhất</li>
                        <li>Mật khẩu và xác nhận</li>
                        <li>Số điện thoại</li>
                        <li>Địa chỉ</li>
                    </ul>

                    <p><strong>Đã có tài khoản?</strong></p>
                    <p><a class="text-decoration-none" href="account/dang-nhap" title="Đăng nhập">Đăng nhập ngay</a></p>
                </div>
            </div>
        </div>
    </div>
</div>