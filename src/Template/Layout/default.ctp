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
        <!--
        <form class="form-inline col-md-6" style="">
            <input class="form-control col-10" type="text" placeholder="BUSCAR" aria-label="BUSCAR" style="">
        </form>
        -->
        <ul class="navbar-nav col-md-4 ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= LOCAL_HOST ?>"  style=" color:#FFFFFF" >Home</a>
            </li>
            <?php if(user_logged()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo LOCAL_HOST; ?>/login/logout" style=" color:#FFFFFF" >Sair</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo LOCAL_HOST; ?>/usuarios/add" style=" color:#FFFFFF" >Cadastre-se</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="<?php echo LOCAL_HOST; ?>/login"  style=" color:#FFFFFF" >Login</a>
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