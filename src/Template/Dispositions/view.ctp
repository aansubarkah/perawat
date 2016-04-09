<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disposition'), ['action' => 'edit', $disposition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disposition'), ['action' => 'delete', $disposition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disposition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dispositions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disposition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Letters'), ['controller' => 'Letters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Letter'), ['controller' => 'Letters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipients'), ['controller' => 'Recipients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipient'), ['controller' => 'Recipients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dispositions view large-9 medium-8 columns content">
    <h3><?= h($disposition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Parent Disposition') ?></th>
            <td><?= $disposition->has('parent_disposition') ? $this->Html->link($disposition->parent_disposition->id, ['controller' => 'Dispositions', 'action' => 'view', $disposition->parent_disposition->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Letter') ?></th>
            <td><?= $disposition->has('letter') ? $this->Html->link($disposition->letter->id, ['controller' => 'Letters', 'action' => 'view', $disposition->letter->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $disposition->has('user') ? $this->Html->link($disposition->user->id, ['controller' => 'Users', 'action' => 'view', $disposition->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Recipient') ?></th>
            <td><?= $disposition->has('recipient') ? $this->Html->link($disposition->recipient->, ['controller' => 'Recipients', 'action' => 'view', $disposition->recipient->]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($disposition->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lft') ?></th>
            <td><?= $this->Number->format($disposition->lft) ?></td>
        </tr>
        <tr>
            <th><?= __('Rght') ?></th>
            <td><?= $this->Number->format($disposition->rght) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($disposition->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($disposition->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Isread') ?></th>
            <td><?= $disposition->isread ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Finish') ?></th>
            <td><?= $disposition->finish ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $disposition->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($disposition->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Dispositions') ?></h4>
        <?php if (!empty($disposition->child_dispositions)): ?>
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
            <?php foreach ($disposition->child_dispositions as $childDispositions): ?>
            <tr>
                <td><?= h($childDispositions->id) ?></td>
                <td><?= h($childDispositions->parent_id) ?></td>
                <td><?= h($childDispositions->letter_id) ?></td>
                <td><?= h($childDispositions->user_id) ?></td>
                <td><?= h($childDispositions->lft) ?></td>
                <td><?= h($childDispositions->rght) ?></td>
                <td><?= h($childDispositions->recipient_id) ?></td>
                <td><?= h($childDispositions->content) ?></td>
                <td><?= h($childDispositions->created) ?></td>
                <td><?= h($childDispositions->modified) ?></td>
                <td><?= h($childDispositions->isread) ?></td>
                <td><?= h($childDispositions->finish) ?></td>
                <td><?= h($childDispositions->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dispositions', 'action' => 'view', $childDispositions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dispositions', 'action' => 'edit', $childDispositions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dispositions', 'action' => 'delete', $childDispositions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childDispositions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Evidences') ?></h4>
        <?php if (!empty($disposition->evidences)): ?>
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
            <?php foreach ($disposition->evidences as $evidences): ?>
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
</div>
