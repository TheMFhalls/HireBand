<div class="container">
    <div class="search col-12 mt-xs-20 mt-sm-5">
        <h3>

        </h3>
        <?php
        foreach($bandas as $banda){
            echo $banda->nome_banda." | ".$banda->estilos["nome"]."<br/>";
        }
        ?>
    </div>
</div>

