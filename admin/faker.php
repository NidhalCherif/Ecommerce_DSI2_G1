
<?php
require_once "../connexion.php";
$connexion = new connexion();
$pdo = $connexion->getConnexion();
$pdo->exec("delete from produit");
$sql = "";

for ($i = 1; $i < 100; $i++) {
    $lib = "Produit N°" . $i;
    $pu = random_int(2, 5000);
    $qte = random_int(1, 1000);
    $img = "https://picsum.photos/400/400/?random=$i";
    $des = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, delectus!";
    $pro = random_int(0, 1);
    $sql .= "insert into produit values(NULL,'$lib',$pu,$qte,'$des','$img',$pro);";
}
$pdo->exec($sql);
