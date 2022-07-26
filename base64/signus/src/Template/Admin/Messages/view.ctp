<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Message']), ['action' => 'edit', $message->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Message']), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Messages']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Message']), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="messages view col-lg-10 col-md-9">
    <h3><?= h($message->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Sender</th>
            <td><?= h($message->sender) ?></td>
        </tr>
        <tr>
            <th>Receiver</th>
            <td><?= h($message->receiver) ?></td>
        </tr>
        <tr>
            <th>Subject</th>
            <td><?= h($message->subject) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($message->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Message</h4>
        <?= $this->Text->autoParagraph(h($message->message)); ?>
    </div>
</div>
