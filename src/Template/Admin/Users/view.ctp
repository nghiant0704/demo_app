<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) */?> </li>
        <li><?/*= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) */?> </li>
        <li><?/*= $this->Html->link(__('List Users'), ['action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New User'), ['action' => 'add']) */?> </li>
    </ul>
</nav>-->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Users
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= h($user->name) ?></h3>

        </div>
        <div class="box-body">
            <div class="users view large-9 medium-8 columns content">
                <h3></h3>
                <table class="table table-bordered">
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td><?= h($user->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Email') ?></th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Phone') ?></th>
                        <td><?= h($user->phone) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Address') ?></th>
                        <td><?= h($user->address) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Password') ?></th>
                        <td><?= h($user->password) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Created') ?></th>
                        <td><?= h($user->created) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
