<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <?= $this->element('Front/head'); ?>
</head>
<body class="header_sticky">
<div class="boxed">

    <div class="overlay"></div>



    <?= $this->element('Front/header'); ?>

    <?= $this->Flash->render() ?>

    <!-- Content -->
    <?= $this->fetch('content') ?>
    <!-- End content -->

    <?= $this->element('Front/footer'); ?>


</div><!-- /.boxed -->

<!-- Javascript -->

<script type="text/javascript" src="<?php echo $this->Url->script('front/tether.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->script('front/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->script('front/waypoints.min.js')?>"></script>
<!-- <script type="text/javascript" src="javascript/jquery.circlechart.js"></script> -->
<script type="text/javascript" src="<?php echo $this->Url->script('front/easing.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->script('front/jquery.flexslider-min.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->script('front/owl.carousel.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->script('front/smoothscroll.js')?>"></script>
<!-- <script type="text/javascript" src="javascript/jquery-ui.js"></script> -->
<script type="text/javascript" src="<?php echo $this->Url->script('front/jquery.mCustomScrollbar.js')?>"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
<script type="text/javascript" src="<?php echo $this->Url->script('front/gmap3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->script('front/waves.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->script('front/jquery.countdown.js')?>"></script>

<script type="text/javascript" src="<?php echo $this->Url->script('front/main.js')?>"></script>

<script type="text/javascript">
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;

    $(document).ready(function(){
        $('.btn-add-cart').click(function(){
            var product_id = $(this).data("productid");
            $.ajax({
                url : "<?php echo $this->Url->build('/cart/add',true) ?>",
                method : "POST",
                data : {product_id: product_id},
                headers: {
                    'X-CSRF-Token': csrfToken
                },
                success: function(data){
                    $('#box-cart').html(data.html);
                    alert('Thêm sản phẩm vào giỏ hàng thành công.');
                }
            });
        });


        $('#box-cart').load("<?php echo $this->Url->build('/cart/load_cart');?>");


        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id");
            $.ajax({
                url : "<?php echo $this->Url->build('/product/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data.html);
                }
            });
        });
    });
</script>
</body>

</html>