<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personne_model extends CI_Model {

    public function getAllPersonne() {
      return $this->db->get('personne')->row_array();
    }
    
    public function getPasswordPersonneFromLogin($login){
        return $this->db->select('mot_de_passe')
                        ->limit(1)
                        ->where('login', $login)
                        ->get('personne')
                        ->row();
    }
    
    public function getSolde(){
        return $this->getCompte()['solde'];
    }

    public function setSolde($solde) {
        $solde_actuel = $this->getSolde();
	$this->db->update('compte', array('solde' => $solde_actuel+$solde));
    }    
}
