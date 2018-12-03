<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminGroup $adminGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Admin Groups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($adminGroup) ?>
    <fieldset>
        <legend><?= __('Add Admin Group') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('sort_order');
            echo $this->Form->control('permissions');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
