<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_Model extends CI_Model {
    public function liste_object() {
        $query = $this->db->get('objet_donnee');
        return $query->result_array();
    }
    public function liste_objet() {
        $query = $this->db->get('objet');
        return $query->result_array();
    }
    public function liste_objet_categorie($idcategorie) {
        $query = $this->db->get_where('objet',array('idCategorie' => $idcategorie));
        return $query->result_array();
    }
    
    public function liste_proposition_objet($prix,$idUtilisateur)
    {
        $data=array();
        $i=0;
        $prixinf=$prix-5000;
        $prixsup=$prix+5000;
        $sql="SELECT * FROM objet where prix<=%d and prix>=%d and idUtilisateur=%d";
        $sql=sprintf($sql,$prixsup,$prixinf,$idUtilisateur);
        $query=$this->db->query($sql);
        foreach($query->result_array() as $row)
        {
            $data[$i]=$row;
            $i++;
        }
        return $data;
    }
    public function sary($idobjet) {
        $query = $this->db->get_where('sary',array('idobjet' => $idobjet));
        return $query->result_array();
    }
    public function objet_utilisateur($iduser){
        $sql = $this->db->get_where('objet',array('idutilisateur' => $iduser));
        return $sql->result_array();
    }
    public function donneeObjetId($idObjet)
    {
        $sql="SELECT * FROM objet where id=%d";
        $sql=sprintf($sql,$idObjet);
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }

    public function insert_Categorie($categorie){
        $sql="insert into categorie (categorie) values(%s)";
        $sql=sprintf($sql,$categorie);
        $this->db->query($sql);
    }


    public function liste_proposition_utilisateur($idUser){
        $sql = $this->db->get_where('proposition',array('idutilisateur' => $idUser));
        return $sql->result_array();
        
    }


    
   
}
