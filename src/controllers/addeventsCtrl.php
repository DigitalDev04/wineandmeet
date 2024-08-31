<?php require './models/Calendar.php';
require './models/Events.php';
session_start();
$events = new Events();
if ((empty($_GET['day']) || empty($_GET['month']) || empty($_GET['year'])) // verifie l'existence de jour mois annee
    || (!ctype_digit($_GET['day']) || !ctype_digit($_GET['month']) || !ctype_digit($_GET['year'])) // verifie que les donnee soit en nombres
    || ($_GET['day'] <= 0 || $_GET['day'] > 31 || $_GET['month'] <= 0 || $_GET['month'] > 12)
) // verifie la validité des donnee 
    header('Location: degustations.php');

$calendar = new Calendar($_GET['month'] ?? null, $_GET['year'] ?? null);

// Initialisation des messages d'erreur
$nameError = '';
$descriptionError = '';
$startError = '';
$success = '';
// Traitement du formulaire lorsqu'il est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $start = $_POST['start'];

    // Validation des champs
    if (empty($name)) {
        $nameError = "Le titre de l'événement est requis.";
    } elseif (strlen($name) < 3) {
        $nameError = "Le titre de l'événement doit contenir au moins 3 caractères.";
    }

    if (empty($description)) {
        $descriptionError = "La description est requise.";
    } elseif (strlen($name) < 3) {
        $descriptionError = "Le titre de l'événement doit contenir au moins 3 caractères.";
    }

    if (empty($start)) {
        $startError = "L'heure de début est requise.";
    }
    if (empty($nameError) && empty($descriptionError) && empty($startError)) {

        $events->name = $_POST['name'];
        $events->description = $_POST['description'];
        $events->date =  $calendar->year . '-' . $calendar->month . '-' . $_GET['day'];
        $events->start = $_POST['start'];
        $events->max_users = 30;
        if ($events->create_event())  {
            header("Location: degustations.php?success=Événement enregistré avec succès !");
        }
    }
}
