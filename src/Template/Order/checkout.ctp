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
                        <span><img src="<?php echo $this->Url->image('front/icons/arrow-right.png')?>" alt=""></span>
                    </li>
                    <li class="trail-end">
                        <a href="#" title="">Checkout</a>
                    </li>
                </ul><!-- /.breacrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="flat-checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="box-checkout">
                    <h3 class="title">Checkout</h3>
                    <div class="checkout-login">
                        <?php if(isset($authUser)): ?>
                            Mua hàng với tên: <b><?php echo $authUser['name'] ?> </b>
                        <?php else: ?>
                            Bạn cần phải <a href="<?php echo $this->Url->build('/user/login') ?>" title="">Đăng nhập</a> để mua hàng
                        <?php endif; ?>
                    </div>
                    <?= $this->Form->create(null, [
                        'url' => ['controller' => 'Order', 'action' => 'checkout'],
                        'id' => 'my_form',
                        'class' => 'checkout',
                        'accept-charset' => 'utf-8'
                    ]) ?>
                        <div class="billing-fields">
                            <div class="fields-title">
                                <h3>Billing details</h3>
                                <span></span>
                                <div class="clearfix"></div>
                            </div><!-- /.fields-title -->
                            <div class="fields-content">
                                <div class="field-row">
                                    <label for="customer-name">Họ và tên * </label>
                                    <input type="text" id="customer-name" name="txtName" value="<?php echo isset($authUser) ? $authUser['name'] : '' ?>">
                                </div>
                                <div class="field-row">
                                    <p class="field-one-half">
                                        <label for="email-address">Email *</label>
                                        <input type="email" id="email-address" name="txtEmail" value="<?php echo isset($authUser) ? $authUser['email'] : '' ?>">
                                    </p>
                                    <p class="field-one-half">
                                        <label for="phone">Số điện thoại *</label>
                                        <input type="text" id="phone" name="txtPhone" value="<?php echo isset($authUser) ? $authUser['phone'] : '' ?>">
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="field-row">
                                    <label for="address">Địa chỉ nhận hàng *</label>
                                    <input type="text" id="address" name="txtAddress" value="<?php echo isset($authUser) ? $authUser['address'] : '' ?>">
                                </div>

                                <div class="field-row">
                                    <label for="notes">Order Notes</label>
                                    <textarea id="notes" placeholder="Nhập địa chỉ và thời gian giao hàng" name="txtNote"></textarea>
                                </div>
                            </div><!-- /.fields-content -->
                        </div><!-- /.billing-fields -->
                </div><!-- /.box-checkout -->
            </div><!-- /.col-md-7 -->
            <div class="col-md-5">
                <div class="cart-totals style2">
                    <h3>Your Order</h3>
                    <table class="product">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($carts['Orderproducts'] as $cart): ?>
                            <tr>
                                <td><?php echo $cart['name']; ?></td>
                                <td><?php echo $cart['quantity']; ?> x <?php echo number_format($cart['price']); ?>đ</td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table><!-- /.product -->
                    <table>
                        <tbody>
                        <tr>
                            <td>Total</td>
                            <td class="price-total"><?php echo number_format($carts['Order']['total']); ?>đ</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="btn-radio style2">
                        <div class="radio-info">
                            <input type="radio" id="cod" name="payment" value="cod" checked>
                            <label for="cod">Thanh toán khi nhận hàng</label>
                        </div>
                        <div class="radio-info">
                            <input type="radio" id="baokim" name="payment" value="baokim">
                            <label for="baokim">Bảo Kim</label>
                        </div>
                        <div class="radio-info">
                            <input type="radio" id="nganluong" name="payment" value="nganluong">
                            <label for="nganluong">Ngân Lượng</label>
                        </div>
                        <div class="radio-info">
                            <input type="radio" id="paypal" name="payment" value="paypal">
                            <label for="paypal">Paypal</label>
                        </div>
                    </div><!-- /.btn-radio style2 -->
                    <div class="btn-order">
                        <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">Place Order</a>
                    </div><!-- /.btn-order -->
                    <?= $this->Form->end() ?><!-- /.checkout -->
                </div><!-- /.cart-totals style2 -->
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-checkout -->