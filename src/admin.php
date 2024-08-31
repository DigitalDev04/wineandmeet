<?php require './controllers/adminCtrl.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/addevents.css">
    <title>Document</title>
</head>

<body>
    <?php require './ui/header.php' ?>
    <div class="profilcreate">

        <form class="create" method="POST">
            <h2>Connexion</h2>
            <label for="login">Email</label>
            <input type="login" name="login" placeholder="login">
            <?php if ($loginError): ?>
                <small><?= htmlspecialchars($loginError) ?></small>
            <?php endif; ?>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe">
            <?php if ($passwordError): ?>
                <small><?= htmlspecialchars($passwordError) ?></small>
            <?php endif; ?>
            <?php if ($error): ?>
                <small><?= htmlspecialchars($error) ?></small>
            <?php endif ?>
            <button class="myButton" name="type" value="login" type="submit">Connexion</button>
        </form>
    </div>
    <?php require './ui/footer.php' ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>