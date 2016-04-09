<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Letters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Senders'), ['controller' => 'Senders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sender'), ['controller' => 'Senders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vias'), ['controller' => 'Vias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Via'), ['controller' => 'Vias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dispositions'), ['controller' => 'Dispositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disposition'), ['controller' => 'Dispositions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidences'), ['controller' => 'Evidences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidence'), ['controller' => 'Evidences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="letters form large-9 medium-8 columns content">
    <?= $this->Form->create($letter) ?>
    <fieldset>
        <legend><?= __('Add Letter') ?></legend>
        <?php
            echo $this->Form->input('sender_id', ['options' => $senders]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('via_id', ['options' => $vias]);
            echo $this->Form->input('number');
            echo $this->Form->input('date');
            echo $this->Form->input('content');
            echo $this->Form->input('isread');
            echo $this->Form->input('active');
            echo $this->Form->input('evidences._ids', ['options' => $evidences]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
