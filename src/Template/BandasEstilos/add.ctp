<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bandas Estilos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estilos'), ['controller' => 'Estilos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estilo'), ['controller' => 'Estilos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bandasEstilos form large-9 medium-8 columns content">
    <?= $this->Form->create($bandasEstilo) ?>
    <fieldset>
        <legend><?= __('Add Bandas Estilo') ?></legend>
        <?php
            echo $this->Form->control('banda_id', ['options' => $bandas]);
            echo $this->Form->control('estilo_id', ['options' => $estilos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
