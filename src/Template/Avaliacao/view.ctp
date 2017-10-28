<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliacao $avaliacao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avaliacao'), ['action' => 'edit', $avaliacao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avaliacao'), ['action' => 'delete', $avaliacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avaliacao view large-9 medium-8 columns content">
    <h3><?= h($avaliacao->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Banda') ?></th>
            <td><?= $avaliacao->has('banda') ? $this->Html->link($avaliacao->banda->id, ['controller' => 'Bandas', 'action' => 'view', $avaliacao->banda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $avaliacao->has('usuario') ? $this->Html->link($avaliacao->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $avaliacao->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($avaliacao->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao') ?></th>
            <td><?= $this->Number->format($avaliacao->avaliacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($avaliacao->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($avaliacao->modified) ?></td>
        </tr>
    </table>
</div>
