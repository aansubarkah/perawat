<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Departement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departements index large-9 medium-8 columns content">
    <h3><?= __('Departements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('parent_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departements as $departement): ?>
            <tr>
                <td><?= $this->Number->format($departement->id) ?></td>
                <td><?= $departement->has('parent_departement') ? $this->Html->link($departement->parent_departement->name, ['controller' => 'Departements', 'action' => 'view', $departement->parent_departement->id]) : '' ?></td>
                <td><?= h($departement->name) ?></td>
                <td><?= h($departement->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $departement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departement->id)]) ?>
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
