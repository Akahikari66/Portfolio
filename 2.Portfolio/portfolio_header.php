<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8"/>
  <title>Portfolio Samantha Potel _ <?php echo $titre; ?></title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="portfolio_css.css" rel="stylesheet" type="text/css">
  <style>
      .active{
          color:green;
      }  
  </style>
</head>

<body>
    <!-- <nav>
        <a href="accueil.php" class="<?php if ($titre=="accueil") {echo "active";}?>">Accueil</a> 
        |
        <a href="cv.php" class="<?php if ($titre=="cv") {echo "active";}?>">CV</a>
        | 
        <a href="contact.php" class="<?php if ($titre=="contact") {echo "active";}?>">Contact</a>

    </nav> -->

<div class="header">
  <h1>Samantha Potel</h1>
  <h2>Mon site</h2>
</div>

<div class="navbar">
  <a href="portfolio_accueil.php">Accueil</a>
  <a href="portfolio_competences.php">Compétences</a>
  <a href="portfolio_hobbies.php">Hobbies</a>
  <a href="portfolio_contact.php" class="right">Contact</a>
</div>