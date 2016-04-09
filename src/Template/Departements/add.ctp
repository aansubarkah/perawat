<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Departements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Departements'), ['controller' => 'Departements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Departement'), ['controller' => 'Departements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departements form large-9 medium-8 columns content">
    <?= $this->Form->create($departement) ?>
    <fieldset>
        <legend><?= __('Add Departement') ?></legend>
        <?php
            echo $this->Form->input('parent_id', ['options' => $parentDepartements]);
            echo $this->Form->input('name');
            echo $this->Form->input('active');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
