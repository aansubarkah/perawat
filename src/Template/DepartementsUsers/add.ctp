<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Departements Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departementsUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($departementsUser) ?>
    <fieldset>
        <legend><?= __('Add Departements User') ?></legend>
        <?php
            echo $this->Form->input('departement_id', ['options' => $departements]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('start');
            echo $this->Form->input('end');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
