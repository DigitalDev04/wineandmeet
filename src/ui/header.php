<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title></title>
</head>

<body>
  <nav>
    <h1><a href="../index.php">Wine & Meet</a></h1>
    <ul id="menu">
      <li><a href="../carte.php">Carte</a></li>
      <li><a href="../degustations.php">Dégustations</a></li>
      <?php if (!empty($_SESSION['login'])) { ?>
        <li><a href="../logout.php">Deconnexion</a></li> <?php } ?>
    </ul>
    <button id="menu-button">
      <div></div>
    </button>
    <div class="border"></div>
  </nav>
</body>

</html>