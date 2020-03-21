<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(ROOT);

$route->namespace("Source\App");

$route->group(null);
$route->get("/", "Web:login_view");
$route->post("/login", "Web:login");
$route->get("/cadastro", "Web:cadastro");

$route->group("/app");
$route->get("/", "App:home");
$route->get("/cadastro", "App:cadastro");
$route->post("/cadastrar", "App:cadastrar");
$route->get("/listar", "App:listar");
$route->get("/editar/{id}", "App:ticketEdit");
$route->post("/edit", "App:edit");
$route->get("/excluir/{id}", "App:ticketDelete");
$route->get("/sair", "App:logout");


$route->group("ops");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

if ($route->error()){
    $route->redirect("/ops/{$route->error()}");
}