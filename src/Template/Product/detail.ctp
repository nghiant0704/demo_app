<section class="flat-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li class="trail-item">
                        <a href="<?php echo $this->Url->build('/') ?>" title="">Home</a>
                        <span><img src="<?php echo $this->Url->image('front/icons/arrow-right.png')?>" alt=""></span>
                    </li>
                    <li class="trail-item">
                        <a href="#" title="">Shop</a>
                    </li>
                </ul><!-- /.breacrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="flat-product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="<?php echo $this->Url->image('product_img/'.$product->image_link);?>">
                            <img src="<?php echo $this->Url->image('product_img/'.$product->image_link);?>" alt="image slider" />
                            <span>NEW</span>
                        </li>
                        <?php $image_list = json_decode($product->image_list);?>
                        <?php if(is_array($image_list)):?>
                            <?php foreach ($image_list as $img):?>
                                <li data-thumb="<?php echo $this->Url->image('product_img/'.$img);?>">
                                    <img src="<?php echo $this->Url->image('product_img/'.$img);?>" alt="image slider" />
                                </li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul><!-- /.slides -->
                </div><!-- /.flexslider -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="product-detail">
                    <div class="header-detail">
                        <h4 class="name"><?php echo $product->name; ?></h4>
                        <div class="category">
                            <?php echo $pdcategory->name; ?>
                        </div>
                        <div class="reviewed">

                            <?php if($product->warranty != ''): ?>
                                <div class="status-product">
                                    Bảo hành <span><?php echo $product->warranty; ?></span>
                                </div>
                            <?php endif; ?>
                        </div><!-- /.reviewed -->
                    </div><!-- /.header-detail -->
                    <div class="content-detail">
                        <div class="price">
                            <?php if($product->discount > 0):?>
                                <?php $price_new = $product->price - $product->discount;?>
                                <div class="regular">
                                    <?php echo number_format($product->price); ?> đ
                                </div>
                                <div class="sale">
                                    <?php echo number_format($price_new)?> đ
                                </div>
                            <?php else: ?>
                                <div class="sale">
                                    <?php echo number_format($product->price)?> đ
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="info-text">
                            <?php echo $product->content; ?>
                        </div>
                        <?php if($product->gifts != ''): ?>
                            <div class="product-id">
                                Quà tặng: <span class="id"><?php echo $product->gifts; ?></span>
                            </div>
                        <?php endif; ?>
                    </div><!-- /.content-detail -->
                    <div class="footer-detail">
                        <div class="box-cart style2">
                            <div class="btn-add-cart" data-productid="<?php echo $product->id ?>">
                                <a href="#" title=""><img src="<?php echo $this->Url->image('front/icons/add-cart.png')?>" alt="">Add to Cart</a>
                            </div>
                        </div><!-- /.box-cart -->

                    </div><!-- /.footer-detail -->
                </div><!-- /.product-detail -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-product-detail -->

<section class="flat-product-content">
    <ul class="product-detail-bar">
        <li class="active">Video</li>
    </ul><!-- /.product-detail-bar -->
    <div class="container">
        <div class="row">
            <div class="col-md-3"> </div>
            <div class="col-md-9">
                <iframe width="600" height="400"
                        src="<?php echo $product->video ?>">
                </iframe>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.flat-product-content -->


