<div class="container">
    <div class="formulario col-12 mt-xs-20 mt-sm-50">
        <div class="row">
            <form action="<?php echo LOCAL_HOST; ?>/login/sessao" method="post" class="col-xs-12">
                <div class="row">
                    <div class="col-6">
                        <label for="email">Informe seu email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="senha">Informe sua senha</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>
                    <div class="col-12 mt-10">
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>