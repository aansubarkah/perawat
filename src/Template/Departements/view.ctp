<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departement'), ['action' => 'edit', $departement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departement'), ['action' => 'delete', $departement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Departements'), ['controller' => 'Departements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Departement'), ['controller' => 'Departements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departements view large-9 medium-8 columns content">
    <h3><?= h($departement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Parent Departement') ?></th>
            <td><?= $departement->has('parent_departement') ? $this->Html->link($departement->parent_departement->name, ['controller' => 'Departements', 'action' => 'view', $departement->parent_departement->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($departement->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($departement->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lft') ?></th>
            <td><?= $this->Number->format($departement->lft) ?></td>
        </tr>
        <tr>
            <th><?= __('Rght') ?></th>
            <td><?= $this->Number->format($departement->rght) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $departement->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Departements') ?></h4>
        <?php if (!empty($departement->child_departements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departement->child_departements as $childDepartements): ?>
            <tr>
                <td><?= h($childDepartements->id) ?></td>
                <td><?= h($childDepartements->parent_id) ?></td>
                <td><?= h($childDepartements->lft) ?></td>
                <td><?= h($childDepartements->rght) ?></td>
                <td><?= h($childDepartements->name) ?></td>
                <td><?= h($childDepartements->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departements', 'action' => 'view', $childDepartements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departements', 'action' => 'edit', $childDepartements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departements', 'action' => 'delete', $childDepartements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childDepartements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($departement->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Group Id') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Fullname') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departement->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->fullname) ?></td>
                <td><?= h($users->active) ?></td>
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
