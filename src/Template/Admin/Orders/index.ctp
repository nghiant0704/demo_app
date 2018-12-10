<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= __('Orders') ?>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Orders Table') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= $this->Paginator->sort('transaction_id') ?></th>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('product_id') ?></th>
                            <th><?= $this->Paginator->sort('qty') ?></th>
                            <th><?= $this->Paginator->sort('amount') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td><?= $order->has('transaction') ? $this->Html->link($order->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $order->transaction->id]) : '' ?></td>
                                <td><?= $this->Number->format($order->id) ?></td>
                                <td><?= $order->has('product') ? $this->Html->link($order->product->name, ['controller' => 'Products', 'action' => 'view', $order->product->id]) : '' ?></td>
                                <td><?= $this->Number->format($order->qty) ?></td>
                                <td><?= $this->Number->format($order->amount) ?></td>
                                <td><?= $this->Number->format($order->status) ?></td>
                                <td>
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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