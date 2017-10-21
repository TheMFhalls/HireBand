<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bandas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estilos'), ['controller' => 'Estilos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estilo'), ['controller' => 'Estilos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bandas form large-9 medium-8 columns content">
    <?= $this->Form->create($banda) ?>
    <fieldset>
        <legend><?= __('Add Banda') ?></legend>
        <?php
            echo $this->Form->control('usuario_id', ['options' => $usuarios]);
            echo $this->Form->control('nome_banda');
            echo $this->Form->control('data_inicio', ['empty' => true]);
            echo $this->Form->control('endereco');
            echo $this->Form->control('estilos._ids', ['options' => $estilos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
