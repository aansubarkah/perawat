<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evidences Disposition'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidencesDispositions index large-9 medium-8 columns content">
    <h3><?= __('Evidences Dispositions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('evidence_id') ?></th>
                <th><?= $this->Paginator->sort('disposition_id') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evidencesDispositions as $evidencesDisposition): ?>
            <tr>
                <td><?= $this->Number->format($evidencesDisposition->id) ?></td>
                <td><?= $evidencesDisposition->has('evidence') ? $this->Html->link($evidencesDisposition->evidence->name, ['controller' => 'Evidences', 'action' => 'view', $evidencesDisposition->evidence->id]) : '' ?></td>
                <td><?= $evidencesDisposition->has('disposition') ? $this->Html->link($evidencesDisposition->disposition->id, ['controller' => 'Dispositions', 'action' => 'view', $evidencesDisposition->disposition->id]) : '' ?></td>
                <td><?= h($evidencesDisposition->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evidencesDisposition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evidencesDisposition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evidencesDisposition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesDisposition->id)]) ?>
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
