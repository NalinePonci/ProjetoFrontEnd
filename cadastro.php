<?php
require "inc/inc.seo.php";

require "inc/inc.back.php";
?>

<section class="area-cad">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-4"></div>
            <div class="boxCadastro BoxButtons   col-md-4 ">
                <div class="HeadBox pt-5 pb-3">
                    <h3>CADASTRO</h3>
                    <label><i> Por favor preencha o formulário</i> </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-2">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-2">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-2">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Estado">
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-2">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-2">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-2">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirmar Senha">
                        </div>
                    </div>
                </div>
                <div class="bodyBox mt-3 mb-1 txtCenter">
                    <a href="">
                        <button type="button" class="Btn2
                                    BtnVerify">
                            Entrar
                        </button>
                    </a>

                </div>
                <div class="txtCenter">
                    <label class=for=""> <i> Ja tem conta ? <a href="pagina-inicial"> Faça Login </a></i> </label>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>



<?php "inc/inc.footer.php" ?>