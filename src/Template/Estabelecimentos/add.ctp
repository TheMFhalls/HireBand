<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container">
    <div class="estabelecimentos col-12 mt-xs-20 mt-sm-5">
        <?= $this->Form->create($estabelecimento) ?>
        <fieldset>
            <legend>Adicionar Estabelecimento</legend>
            <?php
            echo $this->Form->control('nome_fantasia');
            echo $this->Form->control('endereco');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>