<?php
ob_start();
?>
<a href="../../controller/admin/add.php" class="btn btn-secondary btn-lg float-end">Ajouter un nouveau produit</a>
<table class="table" id="example">

    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Action</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($LesProduits as  $Produit) {
        ?>
            <tr>
                <td><?= $Produit[0] ?></td>
                <td><?= $Produit[1] ?></td>
                <td><?= $Produit[2] ?></td>
                <td><?= $Produit[3] ?></td>
                <td><a href="detail.php?id=<?= $Produit[0] ?>"
                        class="btn btn-info btn-sm">Voir détail...</a></td>
                <td><a href="delete.php?id=<?= $Produit[0] ?>"
                        class="btn btn-danger btn-sm">Supprimer</a></td>
                <td><a href="detail.php?id=<?= $Produit[0] ?>"
                        class="btn btn-dark btn-sm">Editer</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
$contenu = ob_get_clean();
$titre = "Liste des Produits";
include "layout.php";
?>