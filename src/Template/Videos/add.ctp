<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container">
    <div class="videos col-12 mt-xs-20 mt-sm-5">
        <?= $this->Form->create($video) ?>
        <fieldset>
            <legend><?= __('Add Video') ?></legend>
            <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('url');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

