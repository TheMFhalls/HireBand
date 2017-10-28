<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliacao[]|\Cake\Collection\CollectionInterface $avaliacao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Avaliacao'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bandas'), ['controller' => 'Bandas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banda'), ['controller' => 'Bandas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacao index large-9 medium-8 columns content">
    <h3><?= __('Avaliacao') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avaliacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($avaliacao as $avaliacao): ?>
            <tr>
                <td><?= $this->Number->format($avaliacao->id) ?></td>
                <td><?= $avaliacao->has('banda') ? $this->Html->link($avaliacao->banda->id, ['controller' => 'Bandas', 'action' => 'view', $avaliacao->banda->id]) : '' ?></td>
                <td><?= $avaliacao->has('usuario') ? $this->Html->link($avaliacao->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $avaliacao->usuario->id]) : '' ?></td>
                <td><?= $this->Number->format($avaliacao->avaliacao) ?></td>
                <td><?= h($avaliacao->created) ?></td>
                <td><?= h($avaliacao->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $avaliacao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avaliacao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avaliacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacao->id)]) ?>
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
