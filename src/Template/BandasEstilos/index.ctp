<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BandasEstilo[]|\Cake\Collection\CollectionInterface $bandasEstilos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bandas Estilo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estilos'), ['controller' => 'Estilos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estilo'), ['controller' => 'Estilos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bandasEstilos index large-9 medium-8 columns content">
    <h3><?= __('Bandas Estilos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('banda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estilo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bandasEstilos as $bandasEstilo): ?>
            <tr>
                <td><?= $bandasEstilo->has('banda') ? $this->Html->link($bandasEstilo->banda->id, ['controller' => 'Bandas', 'action' => 'view', $bandasEstilo->banda->id]) : '' ?></td>
                <td><?= $bandasEstilo->has('estilo') ? $this->Html->link($bandasEstilo->estilo->nome, ['controller' => 'Estilos', 'action' => 'view', $bandasEstilo->estilo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bandasEstilo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bandasEstilo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bandasEstilo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bandasEstilo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
