<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container">
    <div class="bandas  col-12 mt-xs-20 mt-sm-5">
        <?= $this->Form->create($banda) ?>
        <fieldset>
            <legend><?= __('Add Banda') ?></legend>
            <?php
//            echo $this->Form->control('usuario_id', ['options' => $usuarios]);
            echo $this->Form->control('nome_banda');
            echo $this->Form->control('data_inicio', ['empty' => true]);
            echo $this->Form->control('estilos._ids', ['options' => $estilos]);
            echo $this->Form->control('endereco');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

