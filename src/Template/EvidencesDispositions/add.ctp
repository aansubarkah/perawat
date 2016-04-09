<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Evidences Dispositions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidencesDispositions form large-9 medium-8 columns content">
    <?= $this->Form->create($evidencesDisposition) ?>
    <fieldset>
        <legend><?= __('Add Evidences Disposition') ?></legend>
        <?php
            echo $this->Form->input('evidence_id', ['options' => $evidences]);
            echo $this->Form->input('disposition_id', ['options' => $dispositions]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
