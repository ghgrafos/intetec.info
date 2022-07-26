<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Category']), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Category']), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Category']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Images']), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Image']), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view col-lg-10 col-md-9">
    <h3><?= h($category->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Title</th>
            <td><?= h($category->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($category->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($category->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Images']) ?></h4>
        <?php if (!empty($category->images)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Url</th>
                <th>Title</th>
                <th>Description</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->images as $images): ?>
            <tr>
                <td><?= h($images->id) ?></td>
                <td><?= h($images->url) ?></td>
                <td><?= h($images->title) ?></td>
                <td><?= h($images->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
