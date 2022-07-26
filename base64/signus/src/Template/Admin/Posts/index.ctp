<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Post']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Category']), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts index col-md-10 columns content">
    <h3>Posts</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('url') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $this->Number->format($post->id) ?></td>
                <td><?= h($post->url) ?></td>
                <td><?= h($post->title) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $post->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class'=>'btn btn-danger btn-xs']) ?>
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