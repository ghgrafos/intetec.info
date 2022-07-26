<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $image->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="images form col-md-10 columns content">
    <?= $this->Form->create($image) ?>
    <fieldset>
        <legend><?= 'Edit Image' ?></legend>
        <?php
            echo $this->Form->input('url');
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('categories._ids', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
