<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evidence'), ['action' => 'edit', $evidence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evidence'), ['action' => 'delete', $evidence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Letters'), ['controller' => 'Letters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Letter'), ['controller' => 'Letters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evidences view large-9 medium-8 columns content">
    <h3><?= h($evidence->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $evidence->has('user') ? $this->Html->link($evidence->user->id, ['controller' => 'Users', 'action' => 'view', $evidence->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($evidence->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Extension') ?></th>
            <td><?= h($evidence->extension) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($evidence->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($evidence->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($evidence->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $evidence->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dispositions') ?></h4>
        <?php if (!empty($evidence->dispositions)): ?>
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
            <?php foreach ($evidence->dispositions as $dispositions): ?>
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
        <h4><?= __('Related Letters') ?></h4>
        <?php if (!empty($evidence->letters)): ?>
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
            <?php foreach ($evidence->letters as $letters): ?>
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
</div>
