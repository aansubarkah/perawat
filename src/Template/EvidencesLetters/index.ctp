<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evidences Letter'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Letters'), ['controller' => 'Letters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Letter'), ['controller' => 'Letters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidencesLetters index large-9 medium-8 columns content">
    <h3><?= __('Evidences Letters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('evidence_id') ?></th>
                <th><?= $this->Paginator->sort('letter_id') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evidencesLetters as $evidencesLetter): ?>
            <tr>
                <td><?= $this->Number->format($evidencesLetter->id) ?></td>
                <td><?= $evidencesLetter->has('evidence') ? $this->Html->link($evidencesLetter->evidence->name, ['controller' => 'Evidences', 'action' => 'view', $evidencesLetter->evidence->id]) : '' ?></td>
                <td><?= $evidencesLetter->has('letter') ? $this->Html->link($evidencesLetter->letter->id, ['controller' => 'Letters', 'action' => 'view', $evidencesLetter->letter->id]) : '' ?></td>
                <td><?= h($evidencesLetter->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evidencesLetter->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evidencesLetter->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evidencesLetter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesLetter->id)]) ?>
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
