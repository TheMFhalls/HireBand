<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container">
    <div class="usuarios col-12 mt-xs-20 mt-sm-50">
        <?= $this->Form->create($usuario) ?>
        <fieldset>
            <legend>Criar usuário</legend>
            <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->label('User.senha', 'Senha');
            echo $this->Form->password('senha');
            echo $this->Form->radio(
                'tipo',
                [
                    ['value' => 'banda', 'text' => 'Banda'],
                    ['value' => 'estabelecimento', 'text' => 'Estabelecimento']
                ]
            );
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>