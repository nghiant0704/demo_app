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
                        <a href="#" title="">Đăng kí</a>
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
                        <h3>Register</h3>
                    </div>
                    <?= $this->Form->create($user) ?>
                        <div class="form-box">
                            <label for="email-register">Email address * </label>
                            <input type="text" id="email-register" name="email">
                        </div><!-- /.form-box -->
                        <div class="form-box">
                            <label for="password-register">Password * </label>
                            <input type="password" id="password-register" name="password">
                        </div><!-- /.form-box -->
                        <div class="form-box">
                            <label for="repassword-register">RePassword * </label>
                            <input type="password" id="repassword-register" name="password_match">
                        </div><!-- /.form-box -->
                        <div class="form-box">
                            <label for="name-register">Họ và tên * </label>
                            <input type="text" id="name-register" name="name" >
                        </div><!-- /.form-box -->
                        <div class="form-box">
                            <label for="phone-register">Số điện thoại * </label>
                            <input type="text" id="phone-register" name="phone" >
                        </div><!-- /.form-box -->
                        <div class="form-box">
                            <label for="address-register">Địa chỉ * </label>
                            <input type="text" id="address-register" name="address" >
                        </div><!-- /.form-box -->
                        <div class="form-box">
                            <button type="submit" class="register">Register</button>
                        </div><!-- /.form-box -->
                    <?= $this->Form->end() ?><!-- /#form-register -->
                </div><!-- /.form-register -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-account -->
