<section id="header" class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <ul class="flat-infomation">
                        <li class="phone">
                            Call Us: <a href="#" title="">(076) 810 4648</a>
                        </li>
                    </ul><!-- /.flat-infomation -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-2">
                    <?php if(isset($authUser)): ?>
                        <ul class="flat-unstyled">
                            <li class="account">
                                <a href="#" title="">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <?= $this->Html->link(__('Sửa thông tin cá nhân'), ['controller' => 'User', 'action' => 'edit']) ?>
                                    </li>
                                    <li>
                                        <?= $this->Html->link(__('Logout'), ['controller' => 'User', 'action' => 'logout']) ?>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- /.flat-unstyled -->
                    <?php else: ?>
                        <ul class="flat-support">
                            <li>
                                <?= $this->Html->link(__('Login'), ['controller' => 'User', 'action' => 'login']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(__('Register'), ['controller' => 'User', 'action' => 'register']) ?>
                            </li>
                        </ul><!-- /.flat-support -->
                    <?php endif; ?>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="logo" class="logo">
                        <a href="<?php echo $this->Url->build('/'); ?>" title="">
                            <img src="<?php echo $this->Url->image('front/logos/logo.png');?>" alt="">
                        </a>
                    </div><!-- /#logo -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-6">
                    <div class="top-search">
                        <form action="<?php echo $this->Url->build(["controller" => "Product", "action" => "search"]); ?>" method="get" class="form-search" accept-charset="utf-8">
                            <div class="box-search">
                                <input type="text" id="text_search" name="search" placeholder="Search what you looking for ?" value="<?php echo isset($key) ? $key : '' ?>">
                                <span class="btn-search">
											<button type="submit" class="waves-effect"><img src="<?php echo $this->Url->image('front/icons/search.png');?>" alt=""></button>
										</span>
                            </div><!-- /.box-search -->
                        </form><!-- /.form-search -->
                        <div id="txtAllowSearch"></div>
                    </div><!-- /.top-search -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-3">
                    <div class="box-cart" id="box-cart">

                    </div><!-- /.box-cart -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-middle -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-2">
                    <?= $this->element('Front/category'); ?>
                </div><!-- /.col-md-3 -->
                <div class="col-md-9 col-10">
                    <div class="nav-wrap">
                        <div id="mainnav" class="mainnav">
                            <ul class="menu">


                            </ul><!-- /.menu -->
                        </div><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                    <?php if(isset($authUser)): ?>
                        <div class="today-deal">
                            <span>Chào,</span> <a href="<?php echo $this->Url->build(["controller" => "User", "action" => "edit"]); ?>" title=""><?php echo $authUser['name'] ?></a>
                        </div><!-- /.today-deal -->
                    <?php endif; ?>
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-bottom -->
</section><!-- /#header -->