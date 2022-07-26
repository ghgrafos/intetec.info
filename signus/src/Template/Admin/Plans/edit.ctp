<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $plan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Plans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plans form col-md-10 columns content">
    <?= $this->Form->create($plan) ?>
    <fieldset>
        <legend><?= 'Edit Plan' ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('value');
            echo $this->Form->input('description');
            echo $this->Form->input('articles');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
