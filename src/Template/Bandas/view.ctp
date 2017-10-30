<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banda $banda
 */
?>
<div class="container">
    <div class="bandas col-12 mt-xs-20 mt-sm-5">
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
                <th scope="row"><?= __('Telefone') ?></th>
                <td><?= h($banda->telefone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($banda->email) ?></td>
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
            <tr>
                <th scope="row"><?= __('Endereco') ?></th>
                <td><?= $this->Text->autoParagraph(h($banda->endereco)); ?></td>
            </tr>
        </table>
    </div>
</div>
