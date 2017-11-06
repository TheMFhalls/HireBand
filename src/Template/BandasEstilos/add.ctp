<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="container">
    <div class="bandasEstilos col-12 mt-xs-20 mt-sm-5">
        <?= $this->Form->create($bandasEstilo) ?>
        <fieldset>
            <legend>Adicionar Banda Estilos</legend>
            <?php
            echo $this->Form->control('banda_id', ['options' => $bandas]);
            echo $this->Form->control('estilo_id', ['options' => $estilos]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>