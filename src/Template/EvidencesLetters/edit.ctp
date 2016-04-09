<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evidencesLetter->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evidencesLetter->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Evidences Letters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Letters'), ['controller' => 'Letters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Letter'), ['controller' => 'Letters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidencesLetters form large-9 medium-8 columns content">
    <?= $this->Form->create($evidencesLetter) ?>
    <fieldset>
        <legend><?= __('Edit Evidences Letter') ?></legend>
        <?php
            echo $this->Form->input('evidence_id', ['options' => $evidences]);
            echo $this->Form->input('letter_id', ['options' => $letters]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
