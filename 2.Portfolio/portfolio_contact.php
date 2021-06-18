<?php
    $titre="contact";
    require_once 'portfolio_header.php';
?>

<!-- <form action="portfolio_reponse.php" method="GET">
    <label for="nom">Nom :</label>
    <input type="text" name="nom">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom">
    <br>
    Email : <input type="" name="user_mail">
    <br>
    Sujet : <input type="text" name="sujet">
    <br>
    Message : <input type="text" name="message">
    <br>
    Case à cocher : <input type="checkbox" name="cgu"> En validant ce formulaire, vous acceptez d’être contacté
    <br>
    <input type="submit" value="Envoyez">
    <input type="reset" value="Réinitialiser">
</form> -->


<div class="both_contact">
  <div class="left_contact">
    <h3 id="formu">Formulaire</h3>
<form action="Portfolio_PHP.php" method="GET">
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <br>
    <div class="date">
        <label for="date">Date de naissance :</label>
        <input type="date" id="date" name="date" min="1900-01-02" max="2100-01-01">
    </div>
    <br>
    <div class="sexe">
        <h4>Sexe :</h4>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Homme</label>
        <br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Femme</label>
        <br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Autre</label>
    </div>
    <br>
    <div class="file">
        <label for="upload">Upload fichier :</label>
        <input type="file" id="upload" name="upload">
     </div>
    <br>
    <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <br>
    <div>
        <label for="msg">Message :</label>
        <input type="text" name="message">
        <!-- <textarea id="msg" name="message"></textarea> -->
    </div>
    <br>
    <label for="cgu">Case à cocher : </label>
    <input type="checkbox" name="cgu"> <p>En validant ce formulaire, vous acceptez d’être contacté</p>
    <br>
    <div class="button">
        <input type="submit" value="Envoyez">
        <input type="reset" value="Réinitialiser">
    </div>
  </div>
</form>

  <div class="right_contact">
    <div class="contact_contact">
        <p>Tel : Mon numéro
            <br> <br>
           E-mail : Mon e-mail
           <br> <br>
           Porfolio GoogleSite :
        </p>
    </div>
  </div>
</div>


<?php
    require_once 'portfolio_footer.php';
?>