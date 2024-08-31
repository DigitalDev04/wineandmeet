<?php require './controllers/addeventsCtrl.php'; ?>
<!DOCTYPE html>
<html lang="fr">

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
        <form action="addevents.php?day=<?= $_GET['day'] ?>&month=<?= $_GET['month'] ?>&year=<?= $_GET['year'] ?>" class="create" method="POST">
            <h2>Déclarer l'évenement :</h2>
            <p>
                <label>Titre d'événement :</label>
                <input type="text" name="name" placeholder="Titre d'événement" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                <br><br>
                <?php if ($nameError): ?>
                    <small><?= htmlspecialchars($nameError) ?></small>
                <?php endif; ?>
            </p>
            <p>
                <label>Description :</label>
                <input type="text" name="description" value="<?= htmlspecialchars($_POST['description'] ?? '') ?>">
                <br><br>
                <?php if ($descriptionError): ?>
                    <small><?= htmlspecialchars($descriptionError) ?></small>
                <?php endif; ?>
            </p>
            <p>
                <label>Date :</label>
                <?= htmlspecialchars($_GET['day'] ?? '') ?> <?= htmlspecialchars($calendar->toString() ?? '') ?>
            </p>
            <p>
                <label>Heure :</label>
                <input type="time" name="start" value="<?= htmlspecialchars($_POST['start'] ?? '') ?>">
                <br><br>
                <?php if ($startError): ?>
                    <small><?= htmlspecialchars($startError) ?></small>
                <?php endif; ?>
            </p>
            <button class="myButton" type="submit" value="register">Register</button>
        </form>
        <img class="grill" src="assets/img/pngegg(2).png" alt="">
    </div>
    <?php include('./ui/footer.php') ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>