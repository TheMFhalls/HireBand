<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banda $banda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banda'), ['action' => 'edit', $banda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banda'), ['action' => 'delete', $banda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bandas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estilos'), ['controller' => 'Estilos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estilo'), ['controller' => 'Estilos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bandas view large-9 medium-8 columns content">
    <h3><?= h($banda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $banda->has('usuario') ? $this->Html->link($banda->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $banda->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Banda') ?></th>
            <td><?= h($banda->nome_banda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($banda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicio') ?></th>
            <td><?= h($banda->data_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($banda->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($banda->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Endereco') ?></h4>
        <?= $this->Text->autoParagraph(h($banda->endereco)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Estilos') ?></h4>
        <?php if (!empty($banda->estilos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($banda->estilos as $estilos): ?>
            <tr>
                <td><?= h($estilos->id) ?></td>
                <td><?= h($estilos->nome) ?></td>
                <td><?= h($estilos->created) ?></td>
                <td><?= h($estilos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Estilos', 'action' => 'view', $estilos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Estilos', 'action' => 'edit', $estilos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estilos', 'action' => 'delete', $estilos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estilos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
