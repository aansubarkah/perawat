<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evidences Letter'), ['action' => 'edit', $evidencesLetter->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evidences Letter'), ['action' => 'delete', $evidencesLetter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesLetter->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evidences Letters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidences Letter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Letters'), ['controller' => 'Letters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Letter'), ['controller' => 'Letters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evidencesLetters view large-9 medium-8 columns content">
    <h3><?= h($evidencesLetter->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Evidence') ?></th>
            <td><?= $evidencesLetter->has('evidence') ? $this->Html->link($evidencesLetter->evidence->name, ['controller' => 'Evidences', 'action' => 'view', $evidencesLetter->evidence->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Letter') ?></th>
            <td><?= $evidencesLetter->has('letter') ? $this->Html->link($evidencesLetter->letter->id, ['controller' => 'Letters', 'action' => 'view', $evidencesLetter->letter->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($evidencesLetter->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $evidencesLetter->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
