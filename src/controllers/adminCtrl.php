<?php
session_start();
$loginError = '';
$passwordError = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    if (empty($login)) {
        $loginError = "L'identifiant est requis.";
    } elseif (strlen($login) < 3) {
        $loginError = "L'identifiant doit contenir au moins 3 caractères.";
    }
    if (empty($password)) {
        $passwordError = "Le mot de passe est requis.";
    } elseif (strlen($password) < 3) {
        $passwordError = "Le mot de passe doit contenir au moins 3 caractères.";
    }
    if (isset($_POST['login'], $_POST['password']) && $_POST['login'] === 'antoine2702' && $_POST['password'] === '123') {
        $_SESSION['login'] = true;
        if ($_SESSION['login'] == true) {
            header('Location: degustations.php');
        }
    }
    if (!empty($login) && !empty($password)) {
        if ($_POST['login'] != 'antoine2702' && $_POST['password'] != '123') {
            $error = "Identifiants ou mot de passe incorrect";
        }
    }
}
