<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function getAllPosts() {
      return $this->db->select('*')
                      ->from('post')
                      ->join('personne', 'personne.id = post.id_personne')
                      ->get()
                      ->result_array();
    }   
}

