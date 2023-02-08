<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_Model extends CI_Model {
    public function liste_categorie() {
        $query = $this->db->get('categorie');
        return $query->result_array();
    }
    public function supprimer_categorie($idCategorie)
    {
        $sql="DELETE FROM categorie WHERE id=%d ON DELETE CASCADE";
        $sql=sprintf($sql,$idCategorie);
        $this->db->query($sql);
    }
    public function insert_Categorie($categorie){
        $sql="insert into categorie(categorie) values('%s')";
        $sql=sprintf($sql,$categorie);
        $this->db->query($sql);
    }
   
}
