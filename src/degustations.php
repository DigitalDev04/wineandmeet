<?php require 'controllers/degustationsCtrl.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/degustations.css">
    <title>Degustations</title>
</head>

<body>
    <?php require './ui/header.php' ?>
    <div class="flex">
        <h1><?= $month->toString(); ?></h1>
        <?php if (!empty($_GET['success'])) {
        if($_GET['success'] =="Evenement supprimé avec succès"){
            ?>
            <h3 class="red"><?= $_GET['success'] ?></h3>
        <?php
        }else{
            if($_GET['success'] =="Événement enregistré avec succès !"){
                ?>
                <h3 class="green"><?= $_GET['success'] ?></h3>
            <?php
            }
            
        }
        } ?>
        <div>
            <a href="degustations.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class="myButton">&lt;</a>
            <a href="degustations.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="myButton">&gt;</a>
        </div>
    </div>
    <div class="align">
        <table class="calendartable">
            <?php for ($i = 0; $i < $month->getWeeks(); $i++): ?>
                <tr>
                    <?php foreach ($month->days as $k => $day):
                        $date = (clone $start)->modify("+" . ($k + $i * 7) . "days"); ?>
                        <td class=" <?= $month->withinMonth($date) ? '' : 'othermonth'; ?>">
                            <?php if (!empty($_SESSION['login']) && $month->withinMonth($date)) { ?>
                                <a href="addevents.php?day=<?= $date->format('d'); ?>&month=<?= $month->month ?>&year=<?= $month->year ?>">
                                    <ion-icon name="add-outline"></ion-icon>
                                </a>
                            <?php } ?>
                            <?php if ($i === 0): ?>
                                <div class="weekday"><?= $day; ?><br></div>
                            <?php endif; ?>
                            <div class="day">
                                <?= $date->format('d'); ?>
                            </div>
                            <?php
                            if ($month->withinMonth($date)) {
                                $events = eventOnDate($date->format('Y-m-d'));
                                if ($events) { ?>
                                    <ul>
                                        <?php foreach ($events as $event) { ?>
                                            <ul><a href="events.php?id=<?= $event->id ?>"><?= $event->start ?> <?= $event->name ?></a></ul>
                                        <?php } ?>
                                    </ul>
                            <?php }
                            } ?>
                        </td>
                        </a>
                    <? endforeach; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
    <?php require './ui/footer.php' ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>