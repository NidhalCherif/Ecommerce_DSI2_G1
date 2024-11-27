<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        })
    </script>
    <title>Document</title>
</head>

<body>
    <?php
    include "nav.php"; ?>
    <div class="container mt-3">

        <h1><?= $titre ?></h1>
        <?= $contenu ?>;
        <?php
        include "footer.php"; ?>
    </div>
</body>

</html>