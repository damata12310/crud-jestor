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
    <?php
        if (!empty($message)){
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              '.$message.'
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
        }
    ?>
    <div class="row">
        <div class="col-md-12">
        	<br />
        	<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Título</th>
			      <th scope="col">Descrição</th>
			      <th scope="col">Criado em:</th>
			      <th scope="col">Alterado em:</th>
			      <th scope="col">Status do ticket</th>
			      <th scope="col">Editar</th>
			      <th scope="col">Excluir</th>
			    </tr>
			  </thead>
			  <tbody>
              <?php
              if (!empty($data)){
                  foreach ($data as $t){
                      $date = new DateTime($t->data()->created_at);
                      $dateU = new DateTime($t->data()->updated_at);
                      echo '
                    <tr>
                      <th scope="row">'.$t->data()->id.'</th>
                      <td>'.$t->data()->titulo.'</td>
                      <td style="width: 40%;">'.$t->data()->descricao.'</td>
                      <td class="text-center">'.$date->format("d/m/Y").'</td>
                      <td class="text-center">'.$dateU->format("d/m/Y").'</td>
                      <td>'.$t->data()->status.'</td>
                      <td class="text-center"><a href="'.url("app/editar/".$t->data()->id).'"><i class="far fa-edit edit-verde"></i></a> </td>
                      <td class="text-center"><a href="'.url("app/excluir/".$t->data()->id).'"><i class="far fa-window-close delete-red"></i></a> </td>
                    </tr>
                  ';
                  }
              }
              ?>
			  </tbody>
			</table>
        </div>
    </div>
</div>