# Fonctionnement du repo (fichiers présents et leur rôle)

## Portfolio

### TP_PHP

Vous devez réaliser un portfolio de 3 pages :
Page accueil, contenant, une image (photo de vous) et un texte vous présentant (quelques lignes)
Page CV
Page contact

Le site contient une navigation entre les 3 pages via son header.


Le formulaire de la page Contact contient plusieurs entrées : Nom, Prénom, Email, Sujet, Message, Case à cocher "En validant ce formulaire, vous acceptez d’être contacté"

La validation du formulaire se fait via un bouton de type “submit” qui redirige vers une page de traitement (traitement.php)

Si la case est bien cochée, vous : afficherez un message de remerciement 

“Merci [Nom] [Prénom],
Nous allons prendre contact avec vous rapidement.

Cordialement”

Envoyez un email contenant un sujet (“contact via le site”) puis le contenu de chacun des champs (au pire juste le contenu du champ Message) .

Si la case n’est pas cochée, vous afficherez :“Merci de bien vouloir cocher les CGU”

Avant de coder, faites une liste des tâches à effectuer pour réaliser à bien cette tâche.

Le site devra être mis en ligne sur votre hébergement (alwaysdata ou autre).

Envoyez le lien vers notre hébergement + notre code source + notre TODO à son adresse mail.

Bonus : Dans la navigation, indiquer la page sur laquelle on est en l’écrivant en gras

### Dans mon Portfolio :

Mon Portfolio en PHP, HTML/CSS.

**J'ai intégré le TP dans Portfolio2.**

## Commandes terminal (Bash, Git, Docker...)

* git status  : détecte les changements
* git add  :
* git push : pour envoyer le commit sur GitHub
* git commit  : pour se laisser un message des changements ajouter au fichier
* git branch  : montre toutes les branches
* gitk  : afficher les commit (être dans le dépôt git)
* apt update  : affiche les update possible
* apt upgrade  : démarre les upgrade possible (demande l'autorisation o/n ou y/n avec mdp)


* ls  : liste en ligne
* ls -l (ou ll): liste en colonne 
* ls -la : afficher aussi les dossier caché dans la liste
* docker ps  : liste les conteneurs qui tourne sur la machine
* exit  : quitte la commande bash et le conteneur
* docker-machine --help
* docker-machine ls  : liste toutes les machines

Toujours suivi de ce que l'on veut :
* run
* push  : va chercher et télécharge (si manquant) l'objet voulu
* pull
* start  : démarre (un container ou autre)
* stop  : arrête (un container ou autre)
* rm  : supprimer
* apt install  : installer
