<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_Model extends CI_Model {
    public function liste_categorie() {
        $query = $this->db->get('categorie');
        return $query->result_array();
    }
   
   
}
