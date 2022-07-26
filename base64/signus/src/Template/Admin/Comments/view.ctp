<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Comment']), ['action' => 'edit', $comment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Comment']), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Comments']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Comment']), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comments view col-lg-10 col-md-9">
    <h3><?= h($comment->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($comment->name) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($comment->email) ?></td>
        </tr>
        <tr>
            <th>Url</th>
            <td><?= h($comment->url) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($comment->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Comment</h4>
        <?= $this->Text->autoParagraph(h($comment->comment)); ?>
    </div>
</div>
