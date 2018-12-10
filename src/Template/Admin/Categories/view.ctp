<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) */?> </li>
        <li><?/*= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) */?> </li>
        <li><?/*= $this->Html->link(__('List Categories'), ['action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Category'), ['action' => 'add']) */?> </li>
        <li><?/*= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) */?> </li>
        <li><?/*= $this->Html->link(__('List Child Categories'), ['controller' => 'Categories', 'action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Child Category'), ['controller' => 'Categories', 'action' => 'add']) */?> </li>
        <li><?/*= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) */?> </li>
        <li><?/*= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) */?> </li>
    </ul>
</nav>
-->


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Categories
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= h($category->name) ?></h3>

        </div>
        <div class="box-body">
            <div class="categories view large-9 medium-8 columns content">
                <table class="table table-bordered">
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td><?= h($category->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Alias') ?></th>
                        <td><?= h($category->alias) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Parent Category') ?></th>
                        <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($category->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Sort Order') ?></th>
                        <td><?= $this->Number->format($category->sort_order) ?></td>
                    </tr>
                </table>
                <div class="related">
                    <h4><?= __('Related Categories') ?></h4>
                    <?php if (!empty($category->child_categories)): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Alias') ?></th>
                                <th><?= __('Parent Id') ?></th>
                                <th><?= __('Sort Order') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($category->child_categories as $childCategories): ?>
                                <tr>
                                    <td><?= h($childCategories->id) ?></td>
                                    <td><?= h($childCategories->name) ?></td>
                                    <td><?= h($childCategories->alias) ?></td>
                                    <td><?= h($childCategories->parent_id) ?></td>
                                    <td><?= h($childCategories->sort_order) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <h4><?= __('Related Products') ?></h4>
                    <?php if (!empty($category->products)): ?>
                        <table class="table table-bordered">
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Category Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Alias') ?></th>
                                <th><?= __('Price') ?></th>
                                <th><?= __('Content') ?></th>
                                <th><?= __('Discount') ?></th>
                                <th><?= __('Image Link') ?></th>
                                <th><?= __('Image List') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('View') ?></th>
                                <th><?= __('Warranty') ?></th>
                                <th><?= __('Buyed') ?></th>
                                <th><?= __('Gifts') ?></th>
                                <th><?= __('Video') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($category->products as $products): ?>
                                <tr>
                                    <td><?= h($products->id) ?></td>
                                    <td><?= h($products->category_id) ?></td>
                                    <td><?= h($products->name) ?></td>
                                    <td><?= h($products->alias) ?></td>
                                    <td><?= h($products->price) ?></td>
                                    <td><?= h($products->content) ?></td>
                                    <td><?= h($products->discount) ?></td>
                                    <td><?= h($products->image_link) ?></td>
                                    <td><?= h($products->image_list) ?></td>
                                    <td><?= h($products->created) ?></td>
                                    <td><?= h($products->view) ?></td>
                                    <td><?= h($products->warranty) ?></td>
                                    <td><?= h($products->buyed) ?></td>
                                    <td><?= h($products->gifts) ?></td>
                                    <td><?= h($products->video) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->