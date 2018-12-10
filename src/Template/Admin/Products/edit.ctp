<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product_get
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product_get->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product_get->id)]
            )
        */?></li>
        <li><?/*= $this->Html->link(__('List Products'), ['action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) */?></li>
    </ul>
</nav>-->
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product_get, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('name');
            echo $this->Form->control('alias');
            echo $this->Form->control('price');
            echo $this->Form->control('content');
            echo $this->Form->control('discount');
        ?>
        <div class="input file"><label for="image-link">Image Link</label><input type="file" name="image_link" id="image-link"></div>
        <?php

            echo $this->Form->control('image_list[]', [
                'type' => 'file',
                'multiple' => 'true',
                'label' => 'Image List',
                'class' => 'form-control'
            ]);
            echo $this->Form->control('view');
            echo $this->Form->control('warranty');
            echo $this->Form->control('total');
            echo $this->Form->control('buyed');
            echo $this->Form->control('rate_total');
            echo $this->Form->control('rate_count');
            echo $this->Form->control('gifts');
            echo $this->Form->control('video');
            echo $this->Form->control('feature');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
