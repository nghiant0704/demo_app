<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminGroup[]|\Cake\Collection\CollectionInterface $adminGroups
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= __('Admin group') ?>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Admin group Table') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('sort_order') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($adminGroups as $adminGroup): ?>
                            <tr>
                                <td><?= $this->Number->format($adminGroup->id) ?></td>
                                <td><?= h($adminGroup->name) ?></td>
                                <td><?= $this->Number->format($adminGroup->sort_order) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $adminGroup->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adminGroup->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adminGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminGroup->id)]) ?>
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