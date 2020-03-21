<?php


namespace Source\App;


use League\Plates\Engine;
use Source\Models\User;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
        session_start();
    }

    public function login_view()
    {
        echo $this->view->render("login", ["title" => SITE]);
    }

    public function login($data):void
    {
        $senha = md5($data["passwd"]);
        $user = new User();
        $list = $user->find("email = :email AND password = :passwd", "email={$data["email"]}&passwd={$senha} ")->fetch(true);

        if (!empty($list)){
            foreach ($list as $item) {
                var_dump($item->data()->id);
                $_SESSION['UserAuth'] = ["UserId" => $item->data()->id];
            }
            if (isset($_SESSION['UserAuth']) == true){
                header("Location:".url("app"));
            }else{
                header("Location:".url(""));
            }
       }else{
            header("Location:".url(""));
        }
    }

    public function cadastro():void
    {
        echo "<h1>Cadastro</h1>";
    }

    public function error($data):void
    {
        echo "<h1>Error {$data["errcode"]}</h1>";
    }
}