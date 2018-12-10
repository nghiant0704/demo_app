<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('List Orders'), ['action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) */?></li>
        <li><?/*= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) */?></li>
    </ul>
</nav>-->
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->control('transaction_id', ['options' => $transactions]);
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('qty');
            echo $this->Form->control('amount');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
