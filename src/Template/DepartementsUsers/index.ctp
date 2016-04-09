<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Departements User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departementsUsers index large-9 medium-8 columns content">
    <h3><?= __('Departements Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('departement_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('end') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departementsUsers as $departementsUser): ?>
            <tr>
                <td><?= $this->Number->format($departementsUser->id) ?></td>
                <td><?= $departementsUser->has('departement') ? $this->Html->link($departementsUser->departement->name, ['controller' => 'Departements', 'action' => 'view', $departementsUser->departement->id]) : '' ?></td>
                <td><?= $departementsUser->has('user') ? $this->Html->link($departementsUser->user->id, ['controller' => 'Users', 'action' => 'view', $departementsUser->user->id]) : '' ?></td>
                <td><?= h($departementsUser->start) ?></td>
                <td><?= h($departementsUser->end) ?></td>
                <td><?= h($departementsUser->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $departementsUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departementsUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departementsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departementsUser->id)]) ?>
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
