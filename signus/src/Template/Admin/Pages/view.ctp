<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Page']), ['action' => 'edit', $page->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Page']), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Pages']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Page']), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pages view col-lg-10 col-md-9">
    <h3><?= h($page->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Title</th>
            <td><?= h($page->title) ?></td>
        </tr>
        <tr>
            <th>Url</th>
            <td><?= h($page->url) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($page->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Body</h4>
        <?= $this->Text->autoParagraph(h($page->body)); ?>
    </div>
</div>
