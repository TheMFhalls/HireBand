<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabelecimento[]|\Cake\Collection\CollectionInterface $estabelecimentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estabelecimento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estabelecimentos index large-9 medium-8 columns content">
    <h3><?= __('Estabelecimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_fantasia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estabelecimentos as $estabelecimento): ?>
            <tr>
                <td><?= $this->Number->format($estabelecimento->id) ?></td>
                <td><?= $estabelecimento->has('usuario') ? $this->Html->link($estabelecimento->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $estabelecimento->usuario->id]) : '' ?></td>
                <td><?= h($estabelecimento->nome_fantasia) ?></td>
                <td><?= h($estabelecimento->created) ?></td>
                <td><?= h($estabelecimento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estabelecimento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estabelecimento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estabelecimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimento->id)]) ?>
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
