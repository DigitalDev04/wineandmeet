<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/index.css" />

    <title>Wine & Meet</title>
  </head>

  <body>
    <?php include('./ui/header.php'); ?>

    <div class="accroche">
      <h2>Share And Discover</h2>
    </div>
    <div class="dessin">
      <img
        src="assets/img/pngegg(57).png"
        alt="dessin de vin & fromage"
        class="dessinimg"
      />
      <div class="textdessin">
        <p>
          Chez Wine & Meet nous vous proposons des assises pour déguster vos
          favoris et découvrir les spécificités de nos vins et de nos viandes.
        </p>
        <p>
          Vous pourrez également réserver des tables lors de nos différentes
          dates de dégustations proposés dans l'année.
        </p>
      </div>
    </div>
    <div class="conteneurgamme">
      <div class="contour">
        Nous vous proposons une large gamme de vins et de viandes à déguster
        pour tous vos gouts.
      </div>
      <img class="viande" src="assets/img/pngegg(34) 1.png" alt="viande" />
    </div>
    <?php include('./ui/footer.php') ?>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
