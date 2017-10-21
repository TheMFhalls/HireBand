<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container">
    <div class="usuarios col-12 mt-xs-20 mt-sm-50">
        <?= $this->Form->create($usuario) ?>
        <fieldset>
            <legend>Alterar usuário</legend>
            <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->control('senha');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>