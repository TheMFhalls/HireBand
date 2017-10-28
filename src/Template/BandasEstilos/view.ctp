<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BandasEstilo $bandasEstilo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bandas Estilo'), ['action' => 'edit', $bandasEstilo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bandas Estilo'), ['action' => 'delete', $bandasEstilo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bandasEstilo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bandas Estilos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bandas Estilo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estilos'), ['controller' => 'Estilos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estilo'), ['controller' => 'Estilos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bandasEstilos view large-9 medium-8 columns content">
    <h3><?= h($bandasEstilo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Banda') ?></th>
            <td><?= $bandasEstilo->has('banda') ? $this->Html->link($bandasEstilo->banda->id, ['controller' => 'Bandas', 'action' => 'view', $bandasEstilo->banda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estilo') ?></th>
            <td><?= $bandasEstilo->has('estilo') ? $this->Html->link($bandasEstilo->estilo->nome, ['controller' => 'Estilos', 'action' => 'view', $bandasEstilo->estilo->id]) : '' ?></td>
        </tr>
    </table>
</div>
