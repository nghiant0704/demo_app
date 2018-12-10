<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminGroup $adminGroup
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Admin groups
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= h($adminGroup->name) ?></h3>

        </div>
        <div class="box-body">
            <div class="adminGroups view large-9 medium-8 columns content">
                <table class="vertical-table">
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td><?= h($adminGroup->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($adminGroup->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Sort Order') ?></th>
                        <td><?= $this->Number->format($adminGroup->sort_order) ?></td>
                    </tr>
                </table>
                <div class="row">
                    <h4><?= __('Permissions') ?></h4>
                    <?= $this->Text->autoParagraph(h($adminGroup->permissions)); ?>
                </div>
                <div class="related">
                    <h4><?= __('Related Admins') ?></h4>
                    <?php if (!empty($adminGroup->admins)): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Username') ?></th>
                                <th><?= __('Password') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Admin Group Id') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($adminGroup->admins as $admins): ?>
                                <tr>
                                    <td><?= h($admins->id) ?></td>
                                    <td><?= h($admins->username) ?></td>
                                    <td><?= h($admins->password) ?></td>
                                    <td><?= h($admins->name) ?></td>
                                    <td><?= h($admins->admin_group_id) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'view', $admins->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'edit', $admins->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'delete', $admins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admins->id)]) ?>
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
