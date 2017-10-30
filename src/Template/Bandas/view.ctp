<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banda $banda
 */
?>
<div class="container">
    <div class="bandas col-12 mt-xs-20 mt-sm-5">
        <h3><?= h($banda->nome_banda) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Telefone') ?></th>
                <td><?= h($banda->telefone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($banda->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Data Inicio') ?></th>
                <td><?= h($banda->data_inicio) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Endereco') ?></th>
                <td><?= $this->Text->autoParagraph(h($banda->endereco)); ?></td>
            </tr>
        </table>
    </div>
    <div class="videos col-12 mt-xs-20 mt-sm-5">
        <div class="row">
        <?php foreach($videos as $video): ?>
            <div class="video col-12 col-sm-6 col-md-3 mt-xs-20">
                <iframe src="<?= convertYoutube($video->url) ?>" frameborder="0" width="100%" height="200px"></iframe>
                <div class="nome">
                    <?= $video->nome; ?>
                </div>
                <?php if(isset($is_owner)): ?>
                <div class="editar">
                    <a href="<?= LOCAL_HOST ?>/videos/edit/<?= $video->id ?>"
                    class="btn btn-warning">Editar Vídeo</a>
                </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>