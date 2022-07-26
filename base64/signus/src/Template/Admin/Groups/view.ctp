<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Group']), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Group']), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Groups']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Group']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view col-lg-10 col-md-9">
    <h3><?= h($group->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($group->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($group->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($group->users)): ?>
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
            <?php foreach ($group->users as $users): ?>
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
