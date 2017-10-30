<?php @session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>HireBand - Find your Band!</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <?= $this->Html->meta('icon', LOCAL_HOST."/img/favicon.png"); ?>
    <?= $this->Html->css("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css") ?>
    <?= $this->Html->script('https://code.jquery.com/jquery-3.2.1.slim.min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('helper.css') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg corPadrao">
    <div class="form-inline col-md-2" >
        <a class="navbar-brand" href="<?= LOCAL_HOST ?>">
            <img class="logo-menu" src="<?= LOCAL_HOST ?>/img/logo2.png" alt="Generic placeholder image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color:#FFFFFF"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav col-12">
            <li class="nav-item">
                <a class="nav-link" href="<?= LOCAL_HOST ?>"  style=" color:#FFFFFF" >Home</a>
            </li>
            <?php if(user_logged()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= LOCAL_HOST ?>/usuarios/edit/<?= $_SESSION["usuario"]->id ?>"  style="color:#FFFFFF" >Editar usuário</a>
            </li>
            <?php if(user_is_banda()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= LOCAL_HOST ?>/bandas/edit/<?= $_SESSION["usuario"]["banda"]->id ?>"  style=" color:#FFFFFF" >Editar Banda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= LOCAL_HOST ?>/bandas/view/<?= $_SESSION["usuario"]["banda"]->id ?>"  style=" color:#FFFFFF" >Visualizar Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= LOCAL_HOST ?>/videos/add"  style=" color:#FFFFFF" >Adicionar Vídeo</a>
            </li>
            <?php elseif(user_is_estabelecimento()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= LOCAL_HOST ?>/estabelecimentos/edit/<?= $_SESSION["usuario"]["estabelecimento"]->id ?>"  style=" color:#FFFFFF" >Editar Estabelecimento</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= LOCAL_HOST ?>/login/logout" style=" color:#FFFFFF" >Sair</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= LOCAL_HOST ?>/usuarios/add" style=" color:#FFFFFF" >Cadastre-se</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="<?= LOCAL_HOST ?>/login"  style=" color:#FFFFFF" >Login</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<?= $this->fetch('content') ?>
<?php if(isset($_SESSION['mensagem'])): ?>
    <div class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hireband</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"><?= $_SESSION['mensagem'] ?></div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.modal').modal('show');
        });
    </script>
<?php unset($_SESSION['mensagem']); ?>
<?php endif ?>
</body>
</html>