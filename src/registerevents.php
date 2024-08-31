<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php require './models/Calendar.php'; ?>
<?php $month = new Calendar($_GET['month'] ?? null, $_GET['year'] ?? null);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/addevents.css">
    <title>Création de compte</title>
</head>

<body>
    <?php include('./ui/header.php'); ?>
    <div class="profilcreate">
        <div class="create">
            <h2>M'inscrire à la dégustation</h2>
            <p>Prénom :<input type="text"></p>
            <p>Nom :<input type="text"></p>
            <p>Adresse mail :<input type="text"></p>
            <p>Telephone :<input type="text"></p>
            <a href="" class="myButton">Soumettre</a>
        </div>
        <img class="grill" src="assets/img/pngegg(2).png" alt="">
    </div>
    <?php include('./ui/footer.php') ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>