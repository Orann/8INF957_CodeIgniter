<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title><?= $title ?></title>
        <!--Import Google Icon Font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>

    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                    <a href="<?= site_url('') ?>" class="brand-logo center">CodeIgniter MVC login+crud</a>
                    
                <?php if ($this->session->userdata('id')) { ?>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?= site_url('accueil/deconnexion') ?>"><i class="material-icons right">label_outline</i>Déconnexion</a></li>
                    </ul>
                <?php } else { ?>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?= site_url('connexion') ?>"><i class="material-icons right">label_outline</i>Connexion</a></li>
                    </ul>
                <?php } ?>
            </div>

        </nav>
