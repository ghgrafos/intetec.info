<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Comments'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comments form col-md-10 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= 'Edit Comment' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('comment');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
