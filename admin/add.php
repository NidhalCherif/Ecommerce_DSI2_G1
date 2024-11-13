<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $sql = "insert into produit values(NULL,'cable type C',20,10,
    'vqvqqVQvqusqqnq','https://picsum.photos/200/200',1)";
    #envoi de la requête
    $connexion = new connexion();
    $pdo = $connexion->getConnexion();
    $res = $pdo->exec($sql);
    if ($res)
        echo "insertion réussite";
    else
        echo "pb d'insertion";

    ?>
</body>

</html>