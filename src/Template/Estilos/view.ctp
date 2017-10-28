<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estilo $estilo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estilo'), ['action' => 'edit', $estilo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estilo'), ['action' => 'delete', $estilo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estilo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estilos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estilo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estilos view large-9 medium-8 columns content">
    <h3><?= h($estilo->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($estilo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estilo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estilo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($estilo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bandas') ?></h4>
        <?php if (!empty($estilo->bandas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Nome Banda') ?></th>
                <th scope="col"><?= __('Data Inicio') ?></th>
                <th scope="col"><?= __('Endereco') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estilo->bandas as $bandas): ?>
            <tr>
                <td><?= h($bandas->id) ?></td>
                <td><?= h($bandas->usuario_id) ?></td>
                <td><?= h($bandas->nome_banda) ?></td>
                <td><?= h($bandas->data_inicio) ?></td>
                <td><?= h($bandas->endereco) ?></td>
                <td><?= h($bandas->created) ?></td>
                <td><?= h($bandas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bandas', 'action' => 'view', $bandas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bandas', 'action' => 'edit', $bandas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bandas', 'action' => 'delete', $bandas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bandas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
