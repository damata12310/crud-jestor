<?php


namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Tickets extends DataLayer
{
    public function __construct()
    {
        parent::__construct("tickets", ["titulo", "descricao", "status"]);
    }
}