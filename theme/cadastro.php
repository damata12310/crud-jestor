<?php  $v->layout("_theme"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
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
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <?php if (!empty($titulo)): ?>
                <form class="form" name="" action="<?= url('app/edit'); ?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?= $id; ?>">
                    <div class="form-group">
                        <label for="titulo">Título do Ticket</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="emailHelp" value="<?= $titulo; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="selectstatus">Status</label>
                        <select class="form-control" id="selectstatus" name="status">
                            <?php
                                if ($status == " "){
                                    echo '<option selected>Selecione um status</option>';
                                }else{
                                    echo '<option>Selecione um status</option>';
                                }
                            ?>
                            <?php
                                if ($status == "Ativo"){
                                    echo '<option value="Ativo" selected>Ativo</option>';
                                }else{
                                    echo '<option value="Ativo">Ativo</option>';
                                }
                            ?>
                            <?php
                                if ($status == "Inativo"){
                                    echo '<option value="Inativo" selected>Inativo</option>';
                                }else{
                                    echo '<option value="Inativo">Inativo</option>';
                                }
                            ?>
                            <?php
                                if ($status == "Aguardando"){
                                    echo '<option value="Aguardando" selected>Aguardando</option>';
                                }else{
                                    echo '<option value="Aguardando">Aguardando</option>';
                                }

                            ?>
                            <?php
                                if ($status == "Finalizado"){
                                    echo '<option value="Finalizado" selected>Finalizado</option>';
                                }else{
                                    echo '<option value="Finalizado">Finalizado</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="3"><?= $descricao; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            <?php else: ?>
                <form class="form" name="" action="<?= url("app/cadastrar"); ?>" method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titulo">Título do Ticket</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="form-group">
                        <label for="selectstatus">Status</label>
                        <select class="form-control" id="selectstatus" name="status">
                          <option selected>Selecione um status</option>
                          <option value="Ativo">Ativo</option>
                          <option value="Inativo">Inativo</option>
                          <option value="Aguardando">Aguardando</option>
                          <option value="Finalizado">Finalizado</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            <?php endif; ?>

        </div>
    </div>