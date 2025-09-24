<div class="content-main wrap-content">
    <div class="title-main">
        <span><?= thongtincanhan ?></span>
        <span class="animate-border"></span>
        <p>Cập nhật thông tin cá nhân của bạn</p>
    </div>
    
    <div class="group-contact">
        <div class="group-form">
            <div class="box-contact-left">
                <form class="contact-form validation-user" novalidate method="post" action="account/thong-tin" enctype="multipart/form-data">
                    
                    <?= $flash->getMessages("frontend") ?>
                    
                    <div class="row-20">
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="text" class="text-sm input form-control" id="fullname" name="fullname" placeholder="<?= hoten ?>" value="<?= (!empty($flash->has('fullname'))) ? $flash->get('fullname') : $rowDetail['fullname'] ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                            </div>
                        </div>
                        
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="text" class="text-sm input form-control" id="username" name="username" placeholder="<?= taikhoan ?>" value="<?= $rowDetail['username'] ?>" readonly required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row-20">
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="password" class="text-sm input form-control" id="old-password" name="old-password" placeholder="<?= matkhaucu ?>">
                            </div>
                        </div>
                        
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="password" class="text-sm input form-control" id="new-password" name="new-password" placeholder="<?= matkhaumoi ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-input">
                        <div class="">
                            <input type="password" class="text-sm input form-control" id="new-password-confirm" name="new-password-confirm" placeholder="<?= nhaplaimatkhaumoi ?>">
                        </div>
                    </div>
                    
                    <div class="row-20">
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="email" class="text-sm input form-control" id="email" name="email" placeholder="Email" value="<?= (!empty($flash->has('email'))) ? $flash->get('email') : $rowDetail['email'] ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                            </div>
                        </div>
                        
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="number" class="text-sm input form-control" id="phone" name="phone" placeholder="<?= dienthoai ?>" value="<?= (!empty($flash->has('phone'))) ? $flash->get('phone') : $rowDetail['phone'] ?>" required>
                                <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row-20">
                        <div class="contact-input col-sm-12 col-20">
                            <div class="">
                                <input type="text" class="text-sm input form-control" id="birthday" name="birthday" placeholder="<?= ngaysinh ?>" value="<?= (!empty($flash->has('birthday'))) ? $flash->get('birthday') : date('d/m/Y', $rowDetail['birthday']) ?>" required autocomplete="off">
                                <div class="invalid-feedback"><?= vuilongnhapngaysinh ?></div>
                            </div>
                        </div>
                        
                        <div class="contact-input col-sm-12 col-20">
                            <div class="gender-selection">
                                <?php $flashGender = $flash->get('gender'); ?>
                                <label class="radio-label">
                                    <input type="radio" id="nam" name="gender" class="form-check-input" <?= (!empty($flashGender) && $flashGender == 1) ? 'checked' : (($rowDetail['gender'] == 1) ? 'checked' : '') ?> value="1" required>
                                    <span><?= nam ?></span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" id="nu" name="gender" class="form-check-input" <?= (!empty($flashGender) && $flashGender == 2) ? 'checked' : (($rowDetail['gender'] == 2) ? 'checked' : '') ?> value="2" required>
                                    <span><?= nu ?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-input">
                        <div class="">
                            <input type="text" class="text-sm input form-control" id="address" name="address" placeholder="<?= diachi ?>" value="<?= (!empty($flash->has('address'))) ? $flash->get('address') : $rowDetail['address'] ?>" required>
                            <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                        </div>
                    </div>
                    
                    <div class="contact-input button-group">
                        <input type="submit" class="gr_btniconsubmit btn" name="info-user" value="<?= capnhat ?>">
                    </div>
                    
                </form>
            </div>
            
            <div class="box-contact-right">
                <div class="login-info">
                    <h4>Hướng dẫn cập nhật</h4>
                    <p><strong>Thông tin có thể cập nhật:</strong></p>
                    <ul>
                        <li>Họ tên</li>
                        <li>Mật khẩu (tùy chọn)</li>
                        <li>Email</li>
                        <li>Số điện thoại</li>
                        <li>Ngày sinh</li>
                        <li>Giới tính</li>
                        <li>Địa chỉ</li>
                    </ul>
                    
                    <p><strong>Lưu ý:</strong></p>
                    <p>Tên đăng nhập không thể thay đổi</p>
                </div>
            </div>
        </div>
    </div>
</div>