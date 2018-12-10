<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= __('Products') ?>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Products Table') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('category_id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('alias') ?></th>
                            <th><?= $this->Paginator->sort('price') ?></th>
                            <th><?= $this->Paginator->sort('discount') ?></th>
                            <th><?= $this->Paginator->sort('image_link') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('view') ?></th>
                            <th><?= $this->Paginator->sort('warranty') ?></th>
                            <th><?= $this->Paginator->sort('buyed') ?></th>
                            <th><?= $this->Paginator->sort('rate_count') ?></th>
                            <th><?= $this->Paginator->sort('gifts') ?></th>
                            <th><?= $this->Paginator->sort('video') ?></th>
                            <th><?= $this->Paginator->sort('feature') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= $this->Number->format($product->id) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td><?= h($product->name) ?></td>
                                <td><?= h($product->alias) ?></td>
                                <td><?= $this->Number->format($product->price) ?></td>
                                <td><?= $this->Number->format($product->discount) ?></td>
                                <td><?= $this->Html->image('product_img/'.$product->image_link,['width' => '100%', 'height' => 'auto']) ?></td>
                                <td><?= h($product->created) ?></td>
                                <td><?= $this->Number->format($product->view) ?></td>
                                <td><?= h($product->warranty) ?></td>
                                <td><?= $this->Number->format($product->buyed) ?></td>
                                <td><?= $this->Number->format($product->rate_total) ?></td>
                                <td><?= h($product->gifts) ?></td>
                                <td><?= h($product->video) ?></td>
                                <td><?= h($product->feature) ?></td>
                                <td>
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="col-sm-5">
                        <div><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></div>
                    </div>
                    <div class="col-sm-7">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->