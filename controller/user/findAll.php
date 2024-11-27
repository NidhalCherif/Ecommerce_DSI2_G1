    <?php
    //Etape1 :communiquer avec le model
    require_once "../../model/crud_produit.php";
    $crud = new crud_produit();
    $LesProduits = $crud->findAll();
    //Etape2 : transmettre $lesProduits à la vue: view/admin/findall.php
    include "../../view/user/findAll.php";
