<?php
ob_start(); ?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-control">
    <label for="">Libellé</label><input type="text" name="lib" id="" class="form-control"></br>
    <label for="">Prix</label><input type="text" name="pu" id="" class="form-control"></br>
    <label for="">Quantité</label><input type="text" name="qte" id="" class="form-control"></br>
    <label for="">Description</label><input type="text" name="des" id="" class="form-control"></br>
    <label for="">Image</label><input type="text" name="img" id="" class="form-control"></br>
    <label for="">En Promo</label><input type="text" name="pro" value="0" id="" class="form-control"></br>
    <input type="submit" value="Ajouter" name="ok" class=" btn btn-success btn-xl">
</form>
<?php
if (isset($_POST['ok'])) {

    require_once "../classes/crud_produit.php";
    $crud = new crud_produit();
    $res = $crud->add($produit);
    if ($res) {
        header("location:all.php");
        exit;
    } else
        echo "pb d'insertion";
}
$titre = "Ajout d'un produit";
$contenu = ob_get_clean();
include "layout.php";
?>