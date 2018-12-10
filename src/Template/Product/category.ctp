<section class="flat-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li class="trail-item">
                        <a href="<?php echo $this->Url->build('/'); ?>" title="">Home</a>
                        <span><img src="<?php echo $this->Url->image('front/icons/arrow-right.png')?>" alt=""></span>
                    </li>
                    <li class="trail-item">
                        <a href="#" title="">Shop</a>
                        <span><img src="<?php echo $this->Url->image('front/icons/arrow-right.png')?>" alt=""></span>
                    </li>
                    <li class="trail-end">
                        <a href="#" title=""><?php echo $categorya->name; ?></a>
                    </li>
                </ul><!-- /.breacrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<main id="shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="sidebar ">
                    <div class="widget widget-categories">
                        <div class="widget-title">
                            <h3>Categories<span class=""></span></h3>
                        </div>
                        <ul class="cat-list style1 widget-content" style="display: block;">
                            <?php foreach ($categories as $category): ?>
                                <li <?php if($category->id == $categorya->id ||$category->parent_id == $categorya->id): ?>class="active" <?php endif; ?>>
                                    <span><?php echo $category->name; ?></span>
                                    <?php if(!empty($category->subs)): ?>
                                        <ul class="cat-child" style="display: block;">
                                            <?php foreach ($category->subs as $sub): ?>
                                                <li>
                                                    <a href="<?php echo $this->Url->build('product/category/'.$sub->id); ?>" title=""><?php echo $sub->name; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul><!-- /.cat-list -->
                    </div><!-- /.widget-categories -->
                    <div class="widget widget-banner">
                        <div class="banner-box">
                            <div class="inner-box">
                                <a href="#" title="">
                                    <img src="<?php echo $this->Url->image('banner_boxes/06.png')?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div><!-- /.widget widget-banner -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-3 col-md-4 -->
            <div class="col-lg-9 col-md-8">
                <div class="main-shop">
                    <div class="wrap-imagebox">
                        <div class="flat-row-title">
                            <h3><?php echo $categorya->name; ?></h3>
                            <span>
										<?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
									</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sort-product">
                            <ul class="icons">
                                <li class="active">
                                    <img src="<?php echo $this->Url->image('front/icons/list-1.png')?>" alt="">
                                </li>
                                <li class="">
                                    <img src="<?php echo $this->Url->image('front/icons/list-2.png')?>" alt="">
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-product">
                            <div class="row sort-box">
                                <?php foreach ($products as $product): ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="imagebox">
                                                <?php $image_list = json_decode($product->image_list);?>
                                                <div class="box-image <?php if(is_array($image_list)):?>owl-carousel-1 <?php endif;?>">
                                                    <a href="<?php echo $this->Url->build('/product/detail/'.$product->id)?>" title="">
                                                        <img src="<?php echo $this->Url->image('product_img/'.$product->image_link);?>" alt="">
                                                    </a>
                                                    <?php if(is_array($image_list)):?>
                                                        <?php foreach ($image_list as $img):?>
                                                            <a href="<?php echo $this->Url->build('/product/detail/'.$product->id)?>" title="">
                                                                <img src="<?php echo $this->Url->image('product_img/'.$img)?>" alt="">
                                                            </a>
                                                        <?php endforeach;?>
                                                    <?php endif;?>
                                                </div><!-- /.box-image -->
                                                <div class="box-content">
                                                    <div class="cat-name">
                                                        <a href="#" title="">Cameras</a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="<?php echo $this->Url->build('/product/detail/'.$product->id)?>" title=""><?php echo $product->name; ?></a>
                                                    </div>
                                                    <div class="price">
                                                        <?php if($product->discount > 0):?>
                                                            <?php $price_new = $product->price - $product->discount;?>
                                                            <span class="sale"><?php echo number_format($price_new)?>đ</span>
                                                            <span class="regular"><?php echo number_format($product->price); ?>đ</span>
                                                        <?php else: ?>
                                                            <span class="sale"><?php echo number_format($product->price)?>đ</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div><!-- /.box-content -->
                                                <div class="box-bottom">
                                                    <div class="btn-add-cart" data-productid="<?php echo $product->id ?>">
                                                        <a href="#" title="">
                                                            <img src="<?php echo $this->Url->image('front/icons/add-cart.png')?>" alt="">Add to Cart
                                                        </a>
                                                    </div>
                                                </div><!-- /.box-bottom -->
                                            </div><!-- /.imagebox -->
                                        </div>
                                    </div><!-- /.col-lg-4 col-sm-6 -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div><!-- /.wrap-imagebox -->
                    <div class="blog-pagination">
								<span>
									<?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
								</span>
                        <ul class="flat-pagination style1">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div><!-- /.blog-pagination -->
                </div><!-- /.main-shop -->
            </div><!-- /.col-lg-9 col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</main>