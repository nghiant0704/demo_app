<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminGroup $adminGroup
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('List Admin Groups'), ['action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) */?></li>
    </ul>
</nav>-->
<div class="adminGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($adminGroup) ?>
    <fieldset>
        <legend><?= __('Add Admin Group') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('sort_order');
            //echo $this->Form->control('permissions');
        ?>
        <div class="row">
            <div class="col-xs-5">
                <h4>Permissions</h4>
                <select name="from[]" id="multiselect" class="form-control" size="8" multiple="multiple">
                    <option value="AdminGroups">Admin Groups</option>
                    <option value="Admins">Admins</option>
                    <option value="Categories">Categories</option>
                    <option value="Products">Products</option>
                    <option value="Orders">Orders</option>
                    <option value="Transactions">Transactions</option>
                    <option value="Users">Users</option>
                </select>
            </div>

            <div class="col-xs-2">
                <br />
                <button type="button" id="multiselect_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
                <button type="button" id="multiselect_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
                <button type="button" id="multiselect_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
                <button type="button" id="multiselect_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
            </div>

            <div class="col-xs-5">
                <h4>Enabled Permissions</h4>
                <select name="to[]" id="multiselect_to" class="form-control" size="8" multiple="multiple"></select>
            </div>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>