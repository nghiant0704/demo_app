<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaction[]|\Cake\Collection\CollectionInterface $transactions
 */
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= __('Transactions') ?>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Transactions Table') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th><?= $this->Paginator->sort('user_id') ?></th>
                            <th><?= $this->Paginator->sort('user_name') ?></th>
                            <th><?= $this->Paginator->sort('user_email') ?></th>
                            <th><?= $this->Paginator->sort('user_phone') ?></th>
                            <th><?= $this->Paginator->sort('amount') ?></th>
                            <th><?= $this->Paginator->sort('payment') ?></th>
                            <th><?= $this->Paginator->sort('message') ?></th>
                            <th><?= $this->Paginator->sort('security') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transactions as $transaction): ?>
                            <tr>
                                <td><?= $this->Number->format($transaction->id) ?></td>
                                <td><?= $this->Number->format($transaction->status) ?></td>
                                <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->name, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
                                <td><?= h($transaction->user_name) ?></td>
                                <td><?= h($transaction->user_email) ?></td>
                                <td><?= h($transaction->user_phone) ?></td>
                                <td><?= $this->Number->format($transaction->amount) ?></td>
                                <td><?= h($transaction->payment) ?></td>
                                <td><?= h($transaction->message) ?></td>
                                <td><?= h($transaction->security) ?></td>
                                <td><?= h($transaction->created) ?></td>
                                <td>
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $transaction->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaction->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?>
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