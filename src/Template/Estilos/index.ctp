<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estilo[]|\Cake\Collection\CollectionInterface $estilos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estilo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estilos index large-9 medium-8 columns content">
    <h3><?= __('Estilos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estilos as $estilo): ?>
            <tr>
                <td><?= $this->Number->format($estilo->id) ?></td>
                <td><?= h($estilo->nome) ?></td>
                <td><?= h($estilo->created) ?></td>
                <td><?= h($estilo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estilo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estilo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estilo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estilo->id)]) ?>
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
