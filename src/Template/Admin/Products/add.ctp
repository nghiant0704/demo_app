<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('List Products'), ['action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) */?></li>
        <li><?/*= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) */?></li>
    </ul>
</nav>-->
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <div class="input select">
            <label for="category-id">Category</label>
            <select name="category_id" id="category-id">
                <option value="">Select category</option>
                <!-- kiem tra danh muc co danh muc con hay khong -->
                <?php foreach ($categories as $category):?>
                    <?php if(count($category->subs) > 1):?>
                        <optgroup label="<?php echo $category->name?>">
                            <?php foreach ($category->subs as $sub):?>
                                <option value="<?php echo $sub->id?>"> <?php echo $sub->name?> </option>
                            <?php endforeach;?>
                        </optgroup>
                    <?php else:?>
                        <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
                    <?php endif;?>
                <?php endforeach;?>
            </select>
        </div>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('alias');
            echo $this->Form->control('price');
            echo $this->Form->control('content');
            echo $this->Form->control('discount');
            echo $this->Form->control('image_link', ['type' => 'file']);

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
