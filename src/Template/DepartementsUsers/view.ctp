<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departements User'), ['action' => 'edit', $departementsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departements User'), ['action' => 'delete', $departementsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departementsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departements Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departements User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departementsUsers view large-9 medium-8 columns content">
    <h3><?= h($departementsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Departement') ?></th>
            <td><?= $departementsUser->has('departement') ? $this->Html->link($departementsUser->departement->name, ['controller' => 'Departements', 'action' => 'view', $departementsUser->departement->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $departementsUser->has('user') ? $this->Html->link($departementsUser->user->id, ['controller' => 'Users', 'action' => 'view', $departementsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($departementsUser->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Start') ?></th>
            <td><?= h($departementsUser->start) ?></td>
        </tr>
        <tr>
            <th><?= __('End') ?></th>
            <td><?= h($departementsUser->end) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $departementsUser->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
