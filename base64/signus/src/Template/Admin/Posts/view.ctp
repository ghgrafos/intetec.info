<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Post']), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Post']), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Posts']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Post']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Category']), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view col-lg-10 col-md-9">
    <h3><?= h($post->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Url</th>
            <td><?= h($post->url) ?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?= h($post->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Description</h4>
        <?= $this->Text->autoParagraph(h($post->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Categories']) ?></h4>
        <?php if (!empty($post->categories)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->categories as $categories): ?>
            <tr>
                <td><?= h($categories->id) ?></td>
                <td><?= h($categories->title) ?></td>
                <td><?= h($categories->created) ?></td>
                <td><?= h($categories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
