<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $disposition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $disposition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dispositions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Letters'), ['controller' => 'Letters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Letter'), ['controller' => 'Letters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipients'), ['controller' => 'Recipients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipient'), ['controller' => 'Recipients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dispositions form large-9 medium-8 columns content">
    <?= $this->Form->create($disposition) ?>
    <fieldset>
        <legend><?= __('Edit Disposition') ?></legend>
        <?php
            echo $this->Form->input('parent_id', ['options' => $parentDispositions]);
            echo $this->Form->input('letter_id', ['options' => $letters]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('recipient_id', ['options' => $recipients]);
            echo $this->Form->input('content');
            echo $this->Form->input('isread');
            echo $this->Form->input('finish');
            echo $this->Form->input('active');
            echo $this->Form->input('evidences._ids', ['options' => $evidences]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
