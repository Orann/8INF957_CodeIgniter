<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($posts)){
    
    foreach($posts as $post){
?>

<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><?= $post['titre'] ?></span>
                    <p><?= $post['contenu'] ?></p>
                </div>
                <div class="card-action">
                    <a href="#"><?= $post['prenom'] ?>  <?= $post['nom'] ?></a>
                    <a href="#"><?= $post['date'] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    }
}
?>
