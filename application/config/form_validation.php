<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$CI = & get_instance();

$config = array(
  //Formulaire de connexion au site-------------------------------------------
  'connexion' => array(
    array(
      'field' => 'login',
      'label' => 'login',
      'rules' => 'required'
    ),
    array(
      'field' => 'mot_de_passe',
      'label' => 'mot_de_passe',
      'rules' => 'required'  
    )
  )
);

$config['error_prefix'] = '<span class="red-text  text-lighten-1">';
$config['error_suffix'] = '</span>';