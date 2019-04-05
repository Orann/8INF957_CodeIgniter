<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

    private $data_for_header = array('title' => 'Connexion');

    public function index() {
        $this->load->view('header', $this->data_for_header);
        $erreur = array();
        if ($this->input->post('formulaire_connexion')) {
            
            $this->load->model('Personne_model');
            $mot_de_passe_personne = $this->Personne_model->getPasswordPersonneFromLogin($this->input->post('login'));
            if ($this->form_validation->run('connexion') & $mot_de_passe_personne != NULL) {
                $verification_mot_de_passe = password_verify($this->input->post('mot_de_passe'), $mot_de_passe_personne->mot_de_passe);
                echo($verification_mot_de_passe);
                if ($verification_mot_de_passe) {
                    $session = array('id' => $this->input->post('login'));
                    $this->session->set_userdata($session);
                    redirect('personne/');
                } else{
                    $erreur = array('erreur' => 'Login ou mot de passe incorrect.');
                }
            } else {
                $erreur = array('erreur' => 'Login ou mot de passe incorrect.');
            }
        }

        $this->load->view('connexion', $erreur);
        $this->load->view('footer');
    }

}