<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$CI = & get_instance();

$config = array(
  //Formulaire de connexion au site-------------------------------------------
  'action' => array(
    array(
      'field' => 'montant',
      'label' => 'montant',
      'rules' => 'required|greater_than[0]|montant_check'
    )
  )
);

$config['error_prefix'] = '<p class="error">';
$config['error_suffix'] = '</p>';