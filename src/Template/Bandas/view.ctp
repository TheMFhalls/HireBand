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
                <td><a href="tel:<?= h($banda->telefone) ?>"><?= h($banda->telefone) ?></a></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td>
                    <a href="mailto:<?= h($banda->email) ?>?subject=
                    Contratar serviços da banda '<?=h($banda->nome_banda)?>'
                    &body=Olá eu sou <?=$_SESSION['usuario']->nome?> e gostaria de contratar os seus serviços de banda.
                    Nosso meio de comunicação será este email.">
                        <?= h($banda->email) ?>
                    </a>
                </td>
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
                <div class="row">
                    <div class="editar col-12 col-sm-6">
                        <a href="<?= LOCAL_HOST ?>/videos/edit/<?= $video->id ?>"
                        class="btn btn-warning">Editar Vídeo</a>
                    </div>
                    <div class="deletar col-12 col-sm-6">
                        <a href="<?= LOCAL_HOST ?>/videos/delete/<?= $video->id ?>"
                       class="btn btn-danger">Deletar Vídeo</a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
