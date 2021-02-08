# Test technique pour le poste de développeur Full Stack basé à Kerpape
<hr style="background-color:orange">

## Solution soumise à l'entreprise et mise en place pour réplication
Cloner ou télécharger le zip du dépôt (puis le dézipper)
```sh
git clone https://github.com/Slashflex/test_technique_kerpape.git
```
Se positionner dans le dossier cloné (ou dézippé)
```sh
cd test_technique_kerpape
```
Une librairie permettant de prendre en charge l'affichage de Tooltips est à installer à l'aide de la commande suivante :
```sh 
npm i # ou npm install
```
Pour le bon fonctionnement du test, deux fichiers sont a modifier afin de prendre en compte le mot de passe et le nom de votre utilisateur MySQL.
il s'agît des fichiers ```includes/functions.php (ligne 48)``` ainsi que ```classes/Database.php (ligne 6 et 7)```.<br /><br />
Une fois cette étape réalisée, vous pouvez lancer un serveur PHP en local qui pointera sur le point d'entrée du programme ```index.php```, à l'aide de la commande suivante :
```sh 
php -S localhost:1234
```
Vous pouvez désormais accéder à ma réalisation en vous rendant sur votre navigateur et en entrant ```localhost:1234``` dans la barre d'URL.
<hr style="background-color:orange">

## Objectif
L'objectif de ce test est de vérifier quelques éléments essentiels du développement web.
Le but est de faire le plus possible, éventuellement contourner un point si celui -ci est
bloquant.
Une attention particulière sera apportée à la propreté du code et la gestion des erreurs.
<hr style="background-color:orange">

## Conditions
- Le test doit être réalisé en PHP pour le côté serveur, MySQL pour la base de
  données, HTML, CSS et Javascript pour le côté client.
- L’utilisation de Wampserver est conseillée
- La durée approximative de ce test doit être de 2-3 heures maximum
- Le test doit être réalisé seul
- L'utilisation de ressources (php.net, Stackoverflow, etc.) est possible et conseillée
- L'utilisation de Boostrap pour le CSS est conseillée
- L'utilisation de Tooltipster pour l'affichage des tootlips est demandée
  Ne pas utiliser de Framework (Symfony,...etc)
<hr style="background-color:orange">

## Sujet
L'objectif est de créer un écran avec une liste de patients et un certain nombre de filtres.<br />
Il est fourni en annexe le script permettant d'initialiser la base de données.<br />
La table patients peut contenir plusieurs lignes pour un même patient, chaque ligne
correspondant à une venue du patient dans l'établissement.<br />
Le but de l'écran est d'afficher la venue la plus récente pour chaque patient de la base (donc
1 ligne par patient).<br />
Il doit apparaître au minimum un filtre sur le nom, le prénom, la ville et le statut (présent
actuellement ou non).<br />
Les filtres doivent mettre à jour la liste sans recharger la page et sans bouton de
validation.<br /><br />
Écran attendu :
![Ecran attendu](https://i.imgur.com/WiOYMU0.png)
Le survol sur la date d'arrivée et de départ doit faire apparaître l'heure (utilisation du plugin
Tooltipster) :
<img src="https://i.imgur.com/mCfy04m.png" style="width: 60%; display: block; margin: 0 auto" alt="Tooltip">
<hr style="background-color:orange">

## Attendu
Un répertoire contenant tout le code et toutes les ressources. Le projet devra fonctionner en
déposant le répertoire sur un serveur web et en affichant la page index.php dans un
navigateur. Ne pas renvoyer la base de données.<br /><br />
Ressources
- JQuery
- Boostrap
- Tootlipster : http://calebjacob.github.io/tooltipster/
Le script test_technique.sql pour initialiser la base de données
<hr style="background-color:orange">

  # test_technique_kerpape
# test_technique_kerpape
