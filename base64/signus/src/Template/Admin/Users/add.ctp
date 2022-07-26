<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form col-md-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= 'Add User' ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->input('plan_id', ['options' => $plans, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
