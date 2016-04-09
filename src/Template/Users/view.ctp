<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Letters'), ['controller' => 'Letters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Letter'), ['controller' => 'Letters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Group') ?></th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dispositions') ?></h4>
        <?php if (!empty($user->dispositions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Letter Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('Recipient Id') ?></th>
                <th><?= __('Content') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Isread') ?></th>
                <th><?= __('Finish') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->dispositions as $dispositions): ?>
            <tr>
                <td><?= h($dispositions->id) ?></td>
                <td><?= h($dispositions->parent_id) ?></td>
                <td><?= h($dispositions->letter_id) ?></td>
                <td><?= h($dispositions->user_id) ?></td>
                <td><?= h($dispositions->lft) ?></td>
                <td><?= h($dispositions->rght) ?></td>
                <td><?= h($dispositions->recipient_id) ?></td>
                <td><?= h($dispositions->content) ?></td>
                <td><?= h($dispositions->created) ?></td>
                <td><?= h($dispositions->modified) ?></td>
                <td><?= h($dispositions->isread) ?></td>
                <td><?= h($dispositions->finish) ?></td>
                <td><?= h($dispositions->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dispositions', 'action' => 'view', $dispositions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dispositions', 'action' => 'edit', $dispositions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dispositions', 'action' => 'delete', $dispositions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dispositions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Evidences') ?></h4>
        <?php if (!empty($user->evidences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Extension') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->evidences as $evidences): ?>
            <tr>
                <td><?= h($evidences->id) ?></td>
                <td><?= h($evidences->user_id) ?></td>
                <td><?= h($evidences->name) ?></td>
                <td><?= h($evidences->extension) ?></td>
                <td><?= h($evidences->created) ?></td>
                <td><?= h($evidences->modified) ?></td>
                <td><?= h($evidences->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evidences', 'action' => 'view', $evidences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evidences', 'action' => 'edit', $evidences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evidences', 'action' => 'delete', $evidences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Letters') ?></h4>
        <?php if (!empty($user->letters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Sender Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Via Id') ?></th>
                <th><?= __('Number') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Content') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Isread') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->letters as $letters): ?>
            <tr>
                <td><?= h($letters->id) ?></td>
                <td><?= h($letters->sender_id) ?></td>
                <td><?= h($letters->user_id) ?></td>
                <td><?= h($letters->via_id) ?></td>
                <td><?= h($letters->number) ?></td>
                <td><?= h($letters->date) ?></td>
                <td><?= h($letters->content) ?></td>
                <td><?= h($letters->created) ?></td>
                <td><?= h($letters->modified) ?></td>
                <td><?= h($letters->isread) ?></td>
                <td><?= h($letters->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Letters', 'action' => 'view', $letters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Letters', 'action' => 'edit', $letters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Letters', 'action' => 'delete', $letters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $letters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Departements') ?></h4>
        <?php if (!empty($user->departements)): ?>
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
            <?php foreach ($user->departements as $departements): ?>
            <tr>
                <td><?= h($departements->id) ?></td>
                <td><?= h($departements->parent_id) ?></td>
                <td><?= h($departements->lft) ?></td>
                <td><?= h($departements->rght) ?></td>
                <td><?= h($departements->name) ?></td>
                <td><?= h($departements->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departements', 'action' => 'view', $departements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departements', 'action' => 'edit', $departements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departements', 'action' => 'delete', $departements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
