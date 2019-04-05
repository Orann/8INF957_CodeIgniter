<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Personne extends CI_Controller {

    private $data_for_header = array('title' => 'Posts');

    public function index() {
        $this->load->view('header', $this->data_for_header);
        $this->load->view('personne');
        $this->load->view('footer');
    }

}
