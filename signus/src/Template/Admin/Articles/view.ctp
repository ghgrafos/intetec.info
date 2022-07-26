<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Article']), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Article']), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Articles']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Article']), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articles view col-lg-10 col-md-9">
    <h3><?= h($article->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Title</th>
            <td><?= h($article->title) ?></td>
        </tr>
        <tr>
            <th>Url</th>
            <td><?= h($article->url) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($article->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Body</h4>
        <?= $this->Text->autoParagraph(h($article->body)); ?>
    </div>
</div>
