<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) */?> </li>
        <li><?/*= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) */?> </li>
        <li><?/*= $this->Html->link(__('List Products'), ['action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Product'), ['action' => 'add']) */?> </li>
        <li><?/*= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) */?> </li>
    </ul>
</nav>-->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Products
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= h($product->name) ?></h3>

        </div>
        <div class="box-body">
            <div class="products view large-9 medium-8 columns content">
                <table class="table table-bordered">
                    <tr>
                        <th scope="row"><?= __('Category') ?></th>
                        <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td><?= h($product->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Alias') ?></th>
                        <td><?= h($product->alias) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Image Link') ?></th>
                        <td><?= $this->Html->image('product_img/'.$product->image_link,['width' => '20%', 'height' => 'auto']) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Warranty') ?></th>
                        <td><?= h($product->warranty) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Gifts') ?></th>
                        <td><?= h($product->gifts) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Video') ?></th>
                        <td><?= h($product->video) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Feature') ?></th>
                        <td><?= h($product->feature) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($product->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Price') ?></th>
                        <td><?= $this->Number->format($product->price) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Discount') ?></th>
                        <td><?= $this->Number->format($product->discount) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('View') ?></th>
                        <td><?= $this->Number->format($product->view) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Total') ?></th>
                        <td><?= $this->Number->format($product->total) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Buyed') ?></th>
                        <td><?= $this->Number->format($product->buyed) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Rate Total') ?></th>
                        <td><?= $this->Number->format($product->rate_total) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Rate Count') ?></th>
                        <td><?= $this->Number->format($product->rate_count) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Created') ?></th>
                        <td><?= h($product->created) ?></td>
                    </tr>
                </table>
                <div class="row">
                    <h4><?= __('Content') ?></h4>
                    <?= $this->Text->autoParagraph(h($product->content)); ?>
                </div>
                <div class="row">
                    <h4><?= __('Image List') ?></h4>
                    <?php $image_list = json_decode($product->image_list);?>
                    <?php if(is_array($image_list)):?>
                        <?php foreach ($image_list as $img){
                            echo $this->Html->image('product_img/'.$img,['width' => '20%', 'height' => 'auto']);
                        }
                        ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->