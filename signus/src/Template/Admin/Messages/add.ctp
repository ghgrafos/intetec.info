<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Messages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="messages form col-md-10 columns content">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= 'Add Message' ?></legend>
        <?php
            echo $this->Form->input('sender');
            echo $this->Form->input('receiver');
            echo $this->Form->input('subject');
            echo $this->Form->input('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
