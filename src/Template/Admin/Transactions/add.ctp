<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaction $transaction
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('List Transactions'), ['action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) */?></li>
        <li><?/*= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) */?></li>
    </ul>
</nav>-->
<div class="transactions form large-9 medium-8 columns content">
    <?= $this->Form->create($transaction) ?>
    <fieldset>
        <legend><?= __('Add Transaction') ?></legend>
        <?php
            echo $this->Form->control('status');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('user_name');
            echo $this->Form->control('user_email');
            echo $this->Form->control('user_phone');
            echo $this->Form->control('amount');
            echo $this->Form->control('payment');
            echo $this->Form->control('payment_info');
            echo $this->Form->control('message');
            echo $this->Form->control('security');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
