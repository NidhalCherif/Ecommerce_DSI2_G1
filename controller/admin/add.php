
<?php
//2eme requête
if (isset($_POST['ok'])) {

    require_once "../../model/crud_produit.php";
    $crud = new crud_produit();
    //récupération des données du formulaire
    $lib = htmlspecialchars($_POST['lib']);
    $pu = htmlspecialchars($_POST['pu']);
    $qte = htmlspecialchars($_POST['qte']);
    $des = htmlspecialchars($_POST['des']);
    $img = htmlspecialchars($_POST['img']);
    $pro = htmlspecialchars($_POST['pro']);
    $produit = new produit(null, $lib, $pu, $qte, $des, $img, $pro);
    $res = $crud->add($produit);
    if ($res) {
        header("location:findAll.php");
        exit;
    }
} else //la première requête : affichage d'un formulaire vide
{
    include "../../view/admin/add.php";
}
