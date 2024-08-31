<?php
if (empty($_GET['id'])) header('Location: degustations.php');

require "./models/Events.php";
$events = new Events();
$events->id = $_GET['id'];

if (!empty($_SESSION['login']) && !empty($_GET['delete']) && $_GET['delete'] == 'true') {
    if ($events->delete()) {
        header('Location: degustations.php?success=Evenement supprimé avec succès');
        exit;
    }
}

$event = $events->getEventById();

if (!$event) header('Location: degustations.php');

