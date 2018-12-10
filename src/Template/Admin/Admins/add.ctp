<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('List Admins'), ['action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('List Admin Groups'), ['controller' => 'AdminGroups', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Admin Group'), ['controller' => 'AdminGroups', 'action' => 'add']) */?></li>
    </ul>
</nav>-->
<div class="admins form large-9 medium-8 columns content">
    <?= $this->Form->create($admin) ?>
    <fieldset>
        <legend><?= __('Add Admin') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('name');
            echo $this->Form->control('admin_group_id', ['options' => $adminGroups]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
