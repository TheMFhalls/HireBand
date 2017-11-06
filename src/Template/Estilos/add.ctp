<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container">
    <div class="estilos col-12 mt-xs-20 mt-sm-5">
        <?= $this->Form->create($estilo) ?>
        <fieldset>
            <legend>Adicionar Estilos</legend>
            <?php
            echo $this->Form->control('nome');
            //echo $this->Form->control('bandas._ids', ['options' => $bandas]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>