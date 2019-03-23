<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

    private $data_for_header = array('title' => 'Accueil');

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
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
                    $session = array('id' => $utilisateur->login);
                    $this->session->set_userdata($session);
                    redirect('personne/');
                } else{
                    $erreur = array('erreur' => 'Login ou mot de passe incorrect.');
                }
            } else {
                $erreur = array('erreur' => 'Login ou mot de passe incorrect.');
            }
        }

        $this->load->view('accueil', $erreur);
        $this->load->view('footer');
    }

}
