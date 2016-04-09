<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evidence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evidence->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Letters'), ['controller' => 'Letters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Letter'), ['controller' => 'Letters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidences form large-9 medium-8 columns content">
    <?= $this->Form->create($evidence) ?>
    <fieldset>
        <legend><?= __('Edit Evidence') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('name');
            echo $this->Form->input('extension');
            echo $this->Form->input('active');
            echo $this->Form->input('dispositions._ids', ['options' => $dispositions]);
            echo $this->Form->input('letters._ids', ['options' => $letters]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
