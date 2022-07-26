<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Comment']), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comments index col-md-10 columns content">
    <h3>Comments</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('url') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $comment): ?>
            <tr>
                <td><?= $this->Number->format($comment->id) ?></td>
                <td><?= h($comment->name) ?></td>
                <td><?= h($comment->email) ?></td>
                <td><?= h($comment->url) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comment->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>