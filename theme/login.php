<?php $v->layout("_theme"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <section class="section-login">
                <div class="content-login">
                    <p class="title-login ">Sistema Tickets</p>
                    <p class="subtitle-login">Seja bem-vindo!</p>
                    <form class="form" name="" action="<?= url("login");?>" method="post"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwd" class="form-control" placeholder="Senha">
                        </div>

                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

