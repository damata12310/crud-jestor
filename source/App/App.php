<?php


namespace Source\App;


use League\Plates\Engine;
use Source\Models\Tickets;
use Source\Models\User;

class App
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
        session_start();
    }

    public function home(): void
    {
        if (!empty($_SESSION["UserAuth"])){
            //Chama novo User
            $user = new User();
            //Busca os dados do usuário logado
            $list = $user->findById($_SESSION["UserAuth"]["UserId"]);
            echo $this->view->render("home",[
                "title" => SITE,
                "nome" => $list->name,
                "email" => $list->email
            ]);
        }else{
            echo $this->view->render("error", [
                "message" => "Acesso negado, por favor faça login para acessar a área administrativa. 
                <a href='".url("")."'>Login</a> "]);
        }

    }

    public function cadastro():void
    {
       if (!empty($_SESSION["UserAuth"])){
           echo $this->view->render("cadastro", [
               "title" => SITE
           ]);
       }else{
           echo $this->view->render("error", [
               "message" => "Acesso negado, por favor faça login para acessar a área administrativa. 
                <a href='".url("")."'>Login</a> "]);
       }
    }

    public function cadastrar($data):void
    {
        var_dump($_SESSION["UserAuth"]);
        if(!empty($data)){
            if($_SESSION["UserAuth"]){
                $tickets = new Tickets();
                $tickets->titulo =  $data['titulo'];
                $tickets->status = $data['status'];
                $tickets->descricao = $data['descricao'];
                $tickets->save();
                header("Location:".url("app/listar"));
            }else{
                header("Location:".url(""));
            }
        }else{
            echo $this->view->render("cadastro", [
                "title" => SITE
            ]);
        }
    }

    public function listar():void
    {
        if (!empty($_SESSION["UserAuth"])){
            $tickets = new Tickets();
            $t =  $tickets->find()->fetch(true);

            echo $this->view->render("listar", [
                "title" => SITE,
                "data" => $t
            ]);
        }else{
            echo $this->view->render("error", [
                "message" => "Acesso negado, por favor faça login para acessar a área administrativa. 
                <a href='".url("")."'>Login</a> "]);
        }
    }

    public function ticketEdit($data)
    {
        if (!empty($data)){
            $ticket = new  Tickets();
            $t = $ticket->findById($data['id']);
            echo $this->view->render("cadastro", [
                "title" => SITE,
                "id" => $t->id,
                "titulo" => $t->titulo,
                "status" => $t->status,
                "descricao" => $t->descricao
            ]);
        }
    }

    public function edit($data)
    {
        if (!empty($data)){
            $ticket = new Tickets();
            $edit = $ticket->findById($data['id']);
            $edit->titulo = $data['titulo'];
            $edit->status = $data['status'];
            $edit->descricao = $data['descricao'];
            $editId = $edit->save();
            header("Location:".url("app/listar"));
        }else{
            echo "<h1>Oooops, algo de errado aconteceu <a href='".url("app")."'>clique aqui</a> para voltar a home</h1>";
        }
    }

    public function ticketDelete($data)
    {
        if (!empty($data)){
            $ticket = new Tickets();
            $delete = $ticket->findById($data['id']);
            $delete->destroy();
            if (!empty($delete)){
                $tickets = new Tickets();
                $t =  $tickets->find()->fetch(true);

                echo $this->view->render("listar", [
                    "title" => SITE,
                    "data" => $t,
                    "message" => "O ticket de número ".$data['id']." foi excluído com sucesso! :)"
                ]);
            }
        }else{
            echo "<h1>Oooops, algo de errado aconteceu <a href='".url("app")."'>clique aqui</a> para voltar a home</h1>";
        }
    }

    public function logout():void
    {
        if ($_SESSION["UserAuth"]){
            session_destroy();
            header("Location:".url(""));
        }
        //echo "<h1>Bom ta chegando no controlador</h1>";
    }
}