<section class="flat-row flat-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider owl-carousel">
                    <div class="slider-item style2">
                        <div class="item-text">
                            <div class="header-item">
                                <p>Enhanced Technology</p>
                                <h2 class="name">SMART <span>TV</span></h2>
                            </div>
                            <div class="divider65"></div>
                            <div class="content-item">
                                <div class="price">
                                    <span class="sale">$1.589.99</span>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="regular">
                                    $2.500.99
                                </div>
                            </div>
                        </div>
                        <div class="item-image">
                            <div class="sale-off">
                                60 % <span>sale</span>
                            </div>
                            <img src="<?php echo $this->Url->image('front/slider/03.png')?>" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.slider -->
                    <div class="slider-item">
                        <div class="item-text">
                            <div class="header-item">
                                <p>Enhanced Technology</p>
                                <h2 class="name">SMART <span>TV</span></h2>
                                <p>The ship set ground on the shore of this uncharted desert isle
                                    with Gilligan the Skipper too the millionaire and his story.</p>
                            </div>
                            <div class="content-item">
                                <div class="price">
                                    <span class="sale">$1.589.99</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="regular">
                                    $2.500.99
                                </div>
                            </div>
                        </div>
                        <div class="item-image">
                            <img src="<?php echo $this->Url->image('front/slider/01.png')?>" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.slider -->
                    <div class="slider-item style2">
                        <div class="item-text">
                            <div class="header-item">
                                <p>Enhanced Technology</p>
                                <h2 class="name">SMART <span>TV</span></h2>
                            </div>
                            <div class="divider65"></div>
                            <div class="content-item">
                                <div class="price">
                                    <span class="sale">$1.589.99</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="regular">
                                    $2.500.99
                                </div>
                            </div>
                        </div>
                        <div class="item-image">
                            <div class="sale-off">
                                60 % <span>sale</span>
                            </div>
                            <img src="<?php echo $this->Url->image('front/slider/03.png')?>" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.slider -->
                    <div class="slider-item">
                        <div class="item-text">
                            <div class="header-item">
                                <p>Enhanced Technology</p>
                                <h2 class="name">SMART <span>TV</span></h2>
                                <p>The ship set ground on the shore of this uncharted desert isle
                                    with Gilligan the Skipper too the millionaire and his story.</p>
                            </div>
                            <div class="content-item">
                                <div class="price">
                                    <span class="sale">$1.589.99</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="regular">
                                    $2.500.99
                                </div>
                            </div>
                        </div>
                        <div class="item-image">
                            <img src="<?php echo $this->Url->image('front/slider/01.png')?>" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.slider -->
                    <div class="slider-item style2">
                        <div class="item-text">
                            <div class="header-item">
                                <p>Enhanced Technology</p>
                                <h2 class="name">SMART <span>TV</span></h2>
                            </div>
                            <div class="divider65"></div>
                            <div class="content-item">
                                <div class="price">
                                    <span class="sale">$1.589.99</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="regular">
                                    $2.500.99
                                </div>
                            </div>
                        </div>
                        <div class="item-image">
                            <div class="sale-off">
                                60 % <span>sale</span>
                            </div>
                            <img src="<?php echo $this->Url->image('front/slider/03.png')?>" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.slider -->
                    <div class="slider-item">
                        <div class="item-text">
                            <div class="header-item">
                                <p>Enhanced Technology</p>
                                <h2 class="name">SMART <span>TV</span></h2>
                                <p>The ship set ground on the shore of this uncharted desert isle
                                    with Gilligan the Skipper too the millionaire and his story.</p>
                            </div>
                            <div class="content-item">
                                <div class="price">
                                    <span class="sale">$1.589.99</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="regular">
                                    $2.500.99
                                </div>
                            </div>
                        </div>
                        <div class="item-image">
                            <img src="<?php echo $this->Url->image('front/slider/01.png')?>" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.slider -->
                </div><!-- /.slider -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-slider -->

<section class="flat-imagebox">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-tab">
                    <ul class="tab-list">
                        <li class="active">Mới nhất</li>
                        <li>Bán chạy</li>
                    </ul>
                </div><!-- /.product-tab -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="box-product">
            <div class="row">
                <?php foreach ($newproducts as $key => $newproduct): ?>
                    <?php if($key%2 == 0): ?>
                        <div class="col-lg-3 col-sm-6">
                    <?php endif; ?>
                    <div class="product-box">
                        <div class="imagebox">
                            <?php $image_list = json_decode($newproduct->image_list);?>
                            <ul class="box-image <?php if(is_array($image_list)):?> owl-carousel-1 <?php endif;?>">
                                <li>
                                    <a href="<?php echo $this->Url->build('/product/detail/'.$newproduct->id)?>" title="">
                                        <img src="<?php echo $this->Url->image('product_img/'.$newproduct->image_link);?>" alt="">
                                    </a>
                                </li>

                                <?php if(is_array($image_list)):?>
                                    <?php foreach ($image_list as $img):?>
                                        <li>
                                            <a href="<?php echo $this->Url->build('/product/detail/'.$newproduct->id)?>" title="">
                                                <img src="<?php echo $this->Url->image('product_img/'.$img);?>" alt="">
                                            </a>
                                        </li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul><!-- /.box-image -->
                            <div class="box-content">
                                <div class="cat-name">
                                    <a href="#" title="">Category</a>
                                </div>
                                <div class="product-name">
                                    <a href="<?php echo $this->Url->build('/product/detail/'.$newproduct->id)?>" title=""><?php echo $newproduct->name; ?></a>
                                </div>
                                <div class="price">
                                    <?php if($newproduct->discount > 0):?>
                                        <?php $price_new = $newproduct->price - $newproduct->discount;?>
                                        <span class="sale"><?php echo number_format($price_new)?> đ</span>
                                        <span class="regular"><?php echo number_format($newproduct->price); ?> đ</span>
                                    <?php else: ?>
                                        <span class="sale"><?php echo number_format($newproduct->price)?> đ</span>
                                    <?php endif; ?>
                                </div>
                            </div><!-- /.box-content -->
                            <div class="box-bottom">
                                <div class="btn-add-cart" data-productid="<?php echo $newproduct->id ?>">
                                    <a href="#" title="">
                                        <img src="<?php echo $this->Url->image('front/icons/add-cart.png')?>" alt="">Add to Cart
                                    </a>
                                </div>
                            </div><!-- /.box-bottom -->
                        </div><!-- /.imagebox -->
                    </div>
                    <?php if(!($key%2 == 0)): ?>
                        </div><!-- /.col-lg-3 col-sm-6 -->
                    <?php endif; ?>
                <?php endforeach; ?>

            </div><!-- /.row -->
            <div class="row">
                <?php foreach ($topbuyedproducts as $key => $topbuyedproduct): ?>
                <?php if($key%2 == 0): ?>
                <div class="col-lg-3 col-sm-6">
                    <?php endif; ?>
                    <div class="product-box">
                        <div class="imagebox">
                            <?php $image_list = json_decode($topbuyedproduct->image_list);?>
                            <ul class="box-image <?php if(is_array($image_list)):?> owl-carousel-1 <?php endif;?>">
                                <li>
                                    <a href="<?php echo $this->Url->build('/product/detail/'.$topbuyedproduct->id)?>" title="">
                                        <img src="<?php echo $this->Url->image('product_img/'.$topbuyedproduct->image_link);?>" alt="">
                                    </a>
                                </li>

                                <?php if(is_array($image_list)):?>
                                    <?php foreach ($image_list as $img):?>
                                        <li>
                                            <a href="<?php echo $this->Url->build('/product/detail/'.$topbuyedproduct->id)?>" title="">
                                                <img src="<?php echo $this->Url->image('product_img/'.$img)?>" alt="">
                                            </a>
                                        </li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul><!-- /.box-image -->
                            <div class="box-content">
                                <div class="cat-name">
                                    <a href="#" title="">Category</a>
                                </div>
                                <div class="product-name">
                                    <a href="<?php echo $this->Url->build('/product/detail/'.$topbuyedproduct->id)?>" title=""><?php echo $topbuyedproduct->name; ?></a>
                                </div>
                                <div class="price">
                                    <?php if($topbuyedproduct->discount > 0):?>
                                        <?php $price_new = $topbuyedproduct->price - $topbuyedproduct->discount;?>
                                        <span class="sale"><?php echo number_format($price_new)?> đ</span>
                                        <span class="regular"><?php echo number_format($topbuyedproduct->price); ?> đ</span>
                                    <?php else: ?>
                                        <span class="sale"><?php echo number_format($topbuyedproduct->price)?> đ</span>
                                    <?php endif; ?>
                                </div>
                            </div><!-- /.box-content -->
                            <div class="box-bottom">
                                <div class="btn-add-cart" data-productid="<?php echo $topbuyedproduct->id ?>">
                                    <a href="#" title="">
                                        <img src="<?php echo $this->Url->image('front/icons/add-cart.png')?>" alt="">Add to Cart
                                    </a>
                                </div>
                            </div><!-- /.box-bottom -->
                    </div><!-- /.imagebox -->
                </div>
                <?php if(!($key%2 == 0)): ?>
            </div><!-- /.col-lg-3 col-sm-6 -->
            <?php endif; ?>
            <?php endforeach; ?>

        </div><!-- /.row -->
    </div><!-- /.box-product -->
    </div><!-- /.container -->
</section><!-- /.flat-imagebox -->

<section class="flat-imagebox style1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flat-row-title">
                    <h3>Our Products</h3>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row ">
            <div class="col-md-12 owl-carousel-10">
                <?php foreach ($allproducts as $key => $allproduct): ?>
                    <?php if($key%2 == 0): ?>
                        <div class="owl-carousel-item">
                    <?php endif; ?>
                    <div class="product-box style1">
                        <div class="imagebox style1">
                            <div class="box-image">
                                <a href="<?php echo $this->Url->build('/product/detail/'.$allproduct->id)?>" title="">
                                    <img src="<?php echo $this->Url->image('product_img/'.$allproduct->image_link);?>" alt="">
                                </a>
                            </div><!-- /.box-image -->
                            <div class="box-content">
                                <div class="cat-name">
                                    <a href="#" title="">Category</a>
                                </div>
                                <div class="product-name">
                                    <a href="<?php echo $this->Url->build('/product/detail/'.$allproduct->id)?>" title=""><?php echo $allproduct->name; ?></a>
                                </div>
                                <div class="price">
                                    <?php if($allproduct->discount > 0):?>
                                        <?php $price_new = $allproduct->price - $allproduct->discount;?>
                                        <span class="sale"><?php echo number_format($price_new)?> đ</span>
                                        <span class="regular"><?php echo number_format($allproduct->price); ?> đ</span>
                                    <?php else: ?>
                                        <span class="sale"><?php echo number_format($allproduct->price)?> đ</span>
                                    <?php endif; ?>
                                </div>
                            </div><!-- /.box-content -->
                            <div class="box-bottom">
                                <div class="btn-add-cart" data-productid="<?php echo $allproduct->id ?>">
                                    <a href="#" title="">
                                        Add to Cart
                                    </a>
                                </div>
                            </div><!-- /.box-bottom -->
                        </div><!-- /.imagebox style1 -->
                    </div><!-- /.product-box style1 -->
                    <?php if(!($key%2 == 0)): ?>
                        </div><!-- /.owl-carousel-item -->
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-imagebox style1 -->


<section class="flat-imagebox style4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flat-row-title">
                    <h3>Most Viewed</h3>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel-3">
                    <?php foreach ($topviewproducts as $topviewproduct): ?>
                        <div class="imagebox style4">
                            <div class="box-image">
                                <a href="<?php echo $this->Url->build('/product/detail/'.$topviewproduct->id)?>" title="">
                                    <img src="<?php echo $this->Url->image('product_img/'.$topviewproduct->image_link);?>" alt="">
                                </a>
                            </div><!-- /.box-image -->
                            <div class="box-content">
                                <div class="cat-name">
                                    <a href="#" title="">Category</a>
                                </div>
                                <div class="product-name">
                                    <a href="<?php echo $this->Url->build('/product/detail/'.$topviewproduct->id)?>" title=""><?php echo $topviewproduct->name; ?></a>
                                </div>
                                <div class="price">
                                    <?php if($topviewproduct->discount > 0):?>
                                        <?php $price_new = $topviewproduct->price - $topviewproduct->discount;?>
                                        <span class="sale"><?php echo number_format($price_new)?>đ</span>
                                        <span class="regular"><?php echo number_format($topviewproduct->price); ?>đ</span>
                                    <?php else: ?>
                                        <span class="sale"><?php echo number_format($topviewproduct->price)?>đ</span>
                                    <?php endif; ?>
                                </div>
                            </div><!-- /.box-content -->
                        </div><!-- /.imagebox style4 -->
                    <?php endforeach; ?>
                </div><!-- /.owl-carousel-3 -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-imagebox style4 -->
