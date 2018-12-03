<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminGroup $adminGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin Group'), ['action' => 'edit', $adminGroup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin Group'), ['action' => 'delete', $adminGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminGroup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admin Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminGroups view large-9 medium-8 columns content">
    <h3><?= h($adminGroup->name) ?></h3>
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
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Admin Group Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
