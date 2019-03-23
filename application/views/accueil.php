<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Connexion</span>
                <form action="<?= site_url(''); ?>" method="post">
                    <div class="row">
                        <?= (!empty($erreur)) ? "<p class=\"red-text text-lighten-1\">" . $erreur . "</p>" : "" ?>
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>  
                            <label for="login">Login</label>
                            <input name="login" id="login" type="text" class="validate">                              
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <label for="mot_de_passe">Mot de passe</label>
                            <input name="mot_de_passe" id="mot_de_passe" type="password" class="validate">                                                                                                           
                        </div>
                    </div>
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <div class="right-align">
                        <button class="btn waves-effect waves-light" value="connexion" type="submit" name="formulaire_connexion">Se connecter
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>