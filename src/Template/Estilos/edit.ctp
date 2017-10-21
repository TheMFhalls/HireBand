<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estilo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estilo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estilos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estilos form large-9 medium-8 columns content">
    <?= $this->Form->create($estilo) ?>
    <fieldset>
        <legend><?= __('Edit Estilo') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('bandas._ids', ['options' => $bandas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
