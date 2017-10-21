<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabelecimento $estabelecimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estabelecimento'), ['action' => 'edit', $estabelecimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estabelecimento'), ['action' => 'delete', $estabelecimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estabelecimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estabelecimento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estabelecimentos view large-9 medium-8 columns content">
    <h3><?= h($estabelecimento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $estabelecimento->has('usuario') ? $this->Html->link($estabelecimento->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $estabelecimento->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Fantasia') ?></th>
            <td><?= h($estabelecimento->nome_fantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estabelecimento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estabelecimento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($estabelecimento->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Endereco') ?></h4>
        <?= $this->Text->autoParagraph(h($estabelecimento->endereco)); ?>
    </div>
</div>
