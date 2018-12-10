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
                        <a href="#" title=""><?= __('Đăng nhập') ?></a>
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
                <div class="form-login">
                    <div class="title">
                        <h3>Login</h3>
                    </div>

                    <?= $this->Form->create(); ?>
                    <?= $this->Form->input('email'); ?>
                    <?= $this->Form->input('password'); ?>
                    <?= $this->Form->button('Login'); ?>
                    <?= $this->Form->end(); ?>
                </div><!-- /.form-login -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-account -->