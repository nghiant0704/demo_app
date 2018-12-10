<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Admin
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= h($admin->name) ?></h3>

        </div>
        <div class="box-body">
            <div class="admins view large-9 medium-8 columns content">
                <table class="table table-bordered">
                    <tr>
                        <th scope="row"><?= __('Username') ?></th>
                        <td><?= h($admin->username) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Password') ?></th>
                        <td><?= h($admin->password) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td><?= h($admin->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Admin Group') ?></th>
                        <td><?= $admin->has('admin_group') ? $this->Html->link($admin->admin_group->name, ['controller' => 'AdminGroups', 'action' => 'view', $admin->admin_group->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($admin->id) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->