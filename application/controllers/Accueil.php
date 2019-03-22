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

        if ($this->input->post('formulaire_connexion')) {
            $utilisateur = $this->Personne_model->get_personne($this->input->post('login'));

            if ($this->form_validation->run('connexion') & $utilisateur != NULL) {
                $verification_mot_de_passe = password_verify($this->input->post('mot_de_passe'), $utilisateur->mot_de_passe);

                if ($utilisateur->actif == 0) {
                    $this->session->set_flashdata('connexion_erreur', 'Votre compte n\'est pas activé, veuillez consulter votre boite mail.');
                } else if ($verification_mot_de_passe) {
                    if ($utilisateur->type == 1) {
                        $session = array(
                            'id' => $utilisateur->id,
                            'type' => 'admin'
                        );
                        $this->session->set_userdata($session);
                        redirect('admin');
                    } else if ($utilisateur->type == 2 && !strpos($this->input->post('mail'), '@')) {
                        $session = array(
                            'id' => $utilisateur->id,
                            'type' => 'interim'
                        );
                        $this->session->set_userdata($session);
                        if ($this->input->post('session_active')) {
                            $cookie = array('name' => 'interim', 'value' => $utilisateur->id, 'expire' => (86500 * 30));
                            set_cookie($cookie);
                            $cle_cookie = sha1(uniqid(mt_rand()));
                            $cookie_secure = array('name' => 'cupcake', 'value' => $cle_cookie, 'expire' => (86500 * 30));
                            set_cookie($cookie_secure);
                            $this->Site_vitrine_model->set_cle_cookie($utilisateur->id, $cle_cookie);
                        }
                        redirect('interim');
                    } else if ($utilisateur->type == 3) {
                        $session = array(
                            'id' => $utilisateur->id,
                            'type' => 'wouffeur'
                        );
                        $this->session->set_userdata($session);
                        if ($this->input->post('session_active')) {
                            $cookie = array('name' => 'wouffeur', 'value' => $utilisateur->id, 'expire' => (86500 * 30));
                            set_cookie($cookie);
                            $cle_cookie = sha1(uniqid(mt_rand()));
                            $cookie_secure = array('name' => 'cupcake', 'value' => $cle_cookie, 'expire' => (86500 * 30));
                            set_cookie($cookie_secure);
                            $this->Site_vitrine_model->set_cle_cookie($utilisateur->id, $cle_cookie);
                        }
                        redirect('wouffeur/accueil');
                    }
                } else {
                    $this->session->set_flashdata('connexion_erreur', 'Email ou mot de passe incorrect');
                }
            } else if ($this->input->post('mot_de_passe') != NULL || $this->input->post('mail') != NULL) {
                $this->session->set_flashdata('connexion_erreur', 'Email ou mot de passe incorrect');
            }
        }

        $this->load->view('accueil');
        $this->load->view('footer');
    }

}
