<?php  $v->layout("_theme"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav">
                <li class="nav-item" id="text-l">
                    <h3 class="title-app">Seja bem vindo, <?= $nome; ?>.</h3>
                    <h5>Vamos gerenciar suas demandas?</h5>
                </li>
            </ul>
            <ul class="nav justify-content-end menu-app">
                <li class="nav-item">
                    <a class="nav-link " href="<?= url("app"); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= url("app/cadastro"); ?>">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("app/listar"); ?>">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary btn-app" href="<?= url("app/sair"); ?>">Sair</a>
                </li>
            </ul>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-12">
            <div class="content-user">
                <div class="col-md-12">
                    <h4>Dados usuário logado:</h4>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <h5>Nome: <?= $nome;?></h5>
                        <h5>Email: <?= $email;?></h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>