<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories form col-md-10 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= 'Edit Category' ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('images._ids', ['options' => $images]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
