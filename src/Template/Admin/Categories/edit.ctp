<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
        */?></li>
        <li><?/*= $this->Html->link(__('List Categories'), ['action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) */?></li>
        <li><?/*= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) */?></li>
    </ul>
</nav>-->
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Edit Category') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('alias');
         ?>
        <div class="input select">
            <label for="parent-id">Parent</label>
            <select name="parent_id" id="parent-id">
                <option value="0">Là danh mục cha</option>
                <?php foreach ($parentCategories as $parent):?>
                    <option value="<?php echo $parent->id?>" <?php echo ($parent->id == $category->parent_id) ? 'selected' : '';?>><?php echo $parent->name?></option>
                <?php endforeach;?>
            </select>
        </div>
        <?php
            echo $this->Form->control('sort_order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
