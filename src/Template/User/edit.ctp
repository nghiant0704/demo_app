<section class="flat-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li class="trail-item">
                        <a href="<?php echo $this->Url->build('/'); ?>" title="">Home</a>
                        <span><img src="<?php echo $this->Url->image('front/icons/arrow-right.png')?>" alt=""></span>
                    </li>
                    <li class="trail-end">
                        <a href="#" title="">Sửa thông tin cá nhân</a>
                    </li>
                </ul><!-- /.breacrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="flat-account background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="form-register">
                    <div class="title">
                        <h3>Sửa thông tin cá nhân</h3>
                    </div>

                    <?= $this->Form->create($user) ?>
                        <?php echo $this->Form->control('email'); ?>
                        <div class="form-box">
                            <label for="password-register">Password </label>
                            <input type="password" id="password-register" name="password" placeholder="Nếu cập nhật mật khẩu thì mới nhập giá trị">
                        </div><!-- /.form-box -->
                        <div class="form-box">
                            <label for="repassword-register">RePassword </label>
                            <input type="password" id="repassword-register" name="password_match" placeholder="Nếu cập nhật mật khẩu thì mới nhập giá trị">
                        </div><!-- /.form-box -->
                        <?php echo $this->Form->control('name'); ?>
                        <?php echo $this->Form->control('phone'); ?>
                        <?php echo $this->Form->control('address'); ?>
                        <div class="form-box">
                            <button type="submit" class="register">Cập nhật</button>
                        </div><!-- /.form-box -->
                        <?= $this->Form->end() ?><!-- /#form-register -->
                </div><!-- /.form-register -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-account -->
