<div class="container">
    <div class="search col-12 mt-xs-20 mt-sm-5">
        <h3>
            Encontre a melhor atração para seu estabelecimento
        </h3>
        <div class="row">
        <?php
        foreach($bandas as $banda):
        ?>
            <div class="banda col-12 col-sm-6 col-md-3">
                <div class="image">
                    <img src="<?=LOCAL_HOST?>/img/banda.jpg" alt="Banda"
                    class="img-responsive">
                </div>
                <div class="description">
                    <p>
                    <?=$banda->nome_banda?>
                    </p>
                    <p>

                    </p>
                </div>
                <div class="button">
                    <a href="<?=LOCAL_HOST?>/bandas/view/<?=$banda->id?>" class="btn btn-success">Saiba Mais</a>
                </div>
            </div>
        <?php
        endforeach;
        ?>
        </div>
    </div>
</div>