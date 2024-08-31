<?php session_start(); ?>
<?php
require "./controllers/eventsCtrl.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/events.css">
    <title>event</title>
</head>

<body>
    <?php require "./ui/header.php" ?>
    <div class="content">
        <div class="box">
            <?php if (!empty($_SESSION['login'])) { ?>
                <div class="btn">
                    <a class="myButton myButtons" href="./events.php?id=<?= $event->id ?>&delete=true">x</a>
                </div>
            <?php } ?>
            <h1><?= $event->name ?></h1>
            <p><?= $event->description ?></p>
            <p><?= $event->date ?></p>
            <p><?= $event->start ?></p>
            <a href="./registerevents.php">
                <button class="myButton">S'inscrire</button>
            </a>
        </div>
    </div>
    <?php require "./ui/footer.php" ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>