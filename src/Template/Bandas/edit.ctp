<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container">
    <div class="bandas col-12 mt-xs-20 mt-sm-5">
        <?= $this->Form->create($banda) ?>
        <fieldset>
            <legend>Editar Banda</legend>
            <?php
            echo $this->Form->control('nome_banda');
            echo $this->Form->control('data_inicio', ['empty' => true]);
            echo $this->Form->control('endereco');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
            echo $this->Form->control('estilos._ids', ['options' => $estilos]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>