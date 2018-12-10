<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaction $transaction
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->id]) */?> </li>
        <li><?/*= $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) */?> </li>
        <li><?/*= $this->Html->link(__('List Transactions'), ['action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Transaction'), ['action' => 'add']) */?> </li>
        <li><?/*= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) */?> </li>
        <li><?/*= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) */?> </li>
    </ul>
</nav>-->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Transactions
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= h($transaction->id) ?></h3>

        </div>
        <div class="box-body">
            <div class="transactions view large-9 medium-8 columns content">
                <table class="table table-bordered">
                    <tr>
                        <th scope="row"><?= __('User') ?></th>
                        <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->name, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('User Name') ?></th>
                        <td><?= h($transaction->user_name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('User Email') ?></th>
                        <td><?= h($transaction->user_email) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('User Phone') ?></th>
                        <td><?= h($transaction->user_phone) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Payment') ?></th>
                        <td><?= h($transaction->payment) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Message') ?></th>
                        <td><?= h($transaction->message) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Security') ?></th>
                        <td><?= h($transaction->security) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($transaction->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Status') ?></th>
                        <td><?= $this->Number->format($transaction->status) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Amount') ?></th>
                        <td><?= $this->Number->format($transaction->amount) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Created') ?></th>
                        <td><?= h($transaction->created) ?></td>
                    </tr>
                </table>
                <div class="row">
                    <h4><?= __('Payment Info') ?></h4>
                    <?= $this->Text->autoParagraph(h($transaction->payment_info)); ?>
                </div>
                <div class="related">
                    <h4><?= __('Related Orders') ?></h4>
                    <?php if (!empty($transaction->orders)): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th scope="col"><?= __('Transaction Id') ?></th>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Product Id') ?></th>
                                <th scope="col"><?= __('Qty') ?></th>
                                <th scope="col"><?= __('Amount') ?></th>
                                <th scope="col"><?= __('Data') ?></th>
                                <th scope="col"><?= __('Status') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($transaction->orders as $orders): ?>
                                <tr>
                                    <td><?= h($orders->transaction_id) ?></td>
                                    <td><?= h($orders->id) ?></td>
                                    <td><?= h($orders->product_id) ?></td>
                                    <td><?= h($orders->qty) ?></td>
                                    <td><?= h($orders->amount) ?></td>
                                    <td><?= h($orders->data) ?></td>
                                    <td><?= h($orders->status) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->