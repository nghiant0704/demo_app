<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) */?> </li>
        <li><?/*= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) */?> </li>
        <li><?/*= $this->Html->link(__('List Orders'), ['action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Order'), ['action' => 'add']) */?> </li>
        <li><?/*= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) */?> </li>
        <li><?/*= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) */?> </li>
    </ul>
</nav>-->
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Order
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= h($order->id) ?></h3>

        </div>
        <div class="box-body">
            <div class="orders view large-9 medium-8 columns content">
                <table class="table table-bordered">
                    <tr>
                        <th scope="row"><?= __('Transaction') ?></th>
                        <td><?= $order->has('transaction') ? $this->Html->link($order->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $order->transaction->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Product') ?></th>
                        <td><?= $order->has('product') ? $this->Html->link($order->product->name, ['controller' => 'Products', 'action' => 'view', $order->product->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($order->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Qty') ?></th>
                        <td><?= $this->Number->format($order->qty) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Amount') ?></th>
                        <td><?= $this->Number->format($order->amount) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Status') ?></th>
                        <td><?= $this->Number->format($order->status) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
