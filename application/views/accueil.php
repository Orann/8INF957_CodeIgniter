<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Connexion</span>
                <form action="<?= site_url('accueil/connexion'); ?>" method="post">
                    <div class="row">
                        <?= ($this->session->flashdata('connexion_erreur')) ? "<p class=\"red-text text-lighten-1\">" . $this->session->flashdata('connexion_erreur') . "</p>" : "" ?>
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input name="login" id="login" type="text" class="validate">
                            <label for="login">Login</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Mot de passe</label>
                        </div>
                    </div>
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <div class="right-align">
                        <button class="btn waves-effect waves-light" value="connexion" type="submit" name="results">Se connecter
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>