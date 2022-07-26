<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form col-md-10 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= 'Edit Article' ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
