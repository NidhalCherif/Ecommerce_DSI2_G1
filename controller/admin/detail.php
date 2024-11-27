<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //Etape1 :communiquer avec le model
    require_once "../../model/crud_produit.php";
    $crud = new crud_produit();
    $produit = $crud->find($id);
    //Etape2 : transmettre $lesProduits à la vue: view/admin/findall.php
    include "../../view/admin/detail.php";
}
