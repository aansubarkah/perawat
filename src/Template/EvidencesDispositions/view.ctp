<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evidences Disposition'), ['action' => 'edit', $evidencesDisposition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evidences Disposition'), ['action' => 'delete', $evidencesDisposition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesDisposition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evidences Dispositions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidences Disposition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evidencesDispositions view large-9 medium-8 columns content">
    <h3><?= h($evidencesDisposition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Evidence') ?></th>
            <td><?= $evidencesDisposition->has('evidence') ? $this->Html->link($evidencesDisposition->evidence->name, ['controller' => 'Evidences', 'action' => 'view', $evidencesDisposition->evidence->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Disposition') ?></th>
            <td><?= $evidencesDisposition->has('disposition') ? $this->Html->link($evidencesDisposition->disposition->id, ['controller' => 'Dispositions', 'action' => 'view', $evidencesDisposition->disposition->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($evidencesDisposition->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $evidencesDisposition->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
