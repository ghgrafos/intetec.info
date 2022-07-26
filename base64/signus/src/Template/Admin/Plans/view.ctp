<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Plan']), ['action' => 'edit', $plan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Plan']), ['action' => 'delete', $plan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Plans']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Plan']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="plans view col-lg-10 col-md-9">
    <h3><?= h($plan->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Title</th>
            <td><?= h($plan->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($plan->id) ?></td>
        </tr>
        <tr>
            <th>'Value</th>
            <td><?= $this->Number->format($plan->value) ?></td>
        </tr>
        <tr>
            <th>'Articles</th>
            <td><?= $this->Number->format($plan->articles) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Description</h4>
        <?= $this->Text->autoParagraph(h($plan->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($plan->users)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Group Id</th>
                <th>Plan Id</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plan->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->plan_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
