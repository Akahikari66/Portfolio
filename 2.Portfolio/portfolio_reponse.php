<?php
    $titre="reponse";
    require_once 'portfolio_header.php';
?>

<?php

$prenom=$_GET['prenom'];
$nom=$_GET['nom'];
$user_mail=$_GET['email'];
$sujet=$_GET['sujet'];
$message=$_GET['message'];

if (empty($_GET['nom']) AND empty($_GET['prenom']) AND empty($_GET['email']) AND empty($_GET['sujet']) AND empty($_GET['message'])) {
    echo 'ERREUR un champ est vide!';
}else{
    if (isset($_GET['cgu'])) {
        // echo "ok";
        echo "Merci $prenom $nom <br> Nous allons prendre contact avec vous rapidement. <br> Cordialement";
        mail('spotel@fabdunum.fr',"$sujet","De $nom $prenom ($user_mail) : $message");
    }else{
        echo "Merci de bien vouloir cocher les CGU";
    }
}
    

?>
<br>

<?php
    require_once 'portfolio_footer.php';
?>