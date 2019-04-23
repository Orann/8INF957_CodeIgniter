# Projet 8INF957 - CodeIgniter

# Installation

* Déplacer le dossier banque à l'endroit où vous avez installé votre serveur appache (pour xampp il s'agit du dossier xampp/htdocs par exemple)

* L'application PHP utilisant le framework MVC CodeIgniter 3 est maintenant accessible à l’adresse http://localhost/8INF957_CodeIgniter

# Configuration de la base de données
* Le SGBD utilisé est MariaDB 10.1.38
* Récuéprer le script projetdbdiagram.sql à la racine du projet afin d'importer la base de données dans votre sgbd.
* Pour configurer la base de données, vous devez modifier le fichier `/8INF957_CodeIgniter/application/config/database.php` afin de renseigner les paramètres de configuration lié à votre base de données

# Autres informations
Pour mener à bien notre projet, nous avons décidé d'utiliser les technologies suivantes : <br>
* PHP 7 comme langage de programmation libre orienté objet. Afin de faciliter le lien entre une base de données, des algorithmes et un affichage, nous utilisons une infrastructure de développement (framework) PHP MVC libre, simple et légère : CodeIgniter.
* HTML5/CSS3 comme langage de balisage libre afin de pouvoir afficher via un navigateur web notre interface utilisateur. Pour que notre interface soit un minimum design, nous avons décidé d'intégrer le Material Design qui est un ensemble de règles de design proposées par Google. Pour cela, nous utilisons un framework HTML5/CSS libre nommé materialize.css afin de faciliter l'intégration du Material Design.
* Une base de données libre MariaDB, pour stocker et interagir avec les données bancaire de l'utilisateur.   
