<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Letter'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Senders'), ['controller' => 'Senders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sender'), ['controller' => 'Senders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vias'), ['controller' => 'Vias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Via'), ['controller' => 'Vias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="letters index large-9 medium-8 columns content">
    <h3><?= __('Letters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('sender_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('via_id') ?></th>
                <th><?= $this->Paginator->sort('number') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('isread') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($letters as $letter): ?>
            <tr>
                <td><?= $this->Number->format($letter->id) ?></td>
                <td><?= $letter->has('sender') ? $this->Html->link($letter->sender->name, ['controller' => 'Senders', 'action' => 'view', $letter->sender->id]) : '' ?></td>
                <td><?= $letter->has('user') ? $this->Html->link($letter->user->id, ['controller' => 'Users', 'action' => 'view', $letter->user->id]) : '' ?></td>
                <td><?= $letter->has('via') ? $this->Html->link($letter->via->name, ['controller' => 'Vias', 'action' => 'view', $letter->via->id]) : '' ?></td>
                <td><?= h($letter->number) ?></td>
                <td><?= h($letter->date) ?></td>
                <td><?= h($letter->created) ?></td>
                <td><?= h($letter->modified) ?></td>
                <td><?= h($letter->isread) ?></td>
                <td><?= h($letter->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $letter->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $letter->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $letter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $letter->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
