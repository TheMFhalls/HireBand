<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Avaliacao'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacao form large-9 medium-8 columns content">
    <?= $this->Form->create($avaliacao) ?>
    <fieldset>
        <legend><?= __('Add Avaliacao') ?></legend>
        <?php
            echo $this->Form->control('banda_id', ['options' => $bandas]);
            echo $this->Form->control('usuario_id', ['options' => $usuarios]);
            echo $this->Form->control('avaliacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
