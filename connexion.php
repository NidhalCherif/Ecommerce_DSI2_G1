<?php
class connexion
{
    private $pdo;
    function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=ecommerce_l2dsi2_g1";
        $user = "root";
        $pw = "";
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    function getConnexion()
    {
        return $this->pdo;
    }
}
