<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Model {
    public function liste_objet() {
        $query = $this->db->get('objet');
        return $query->result_array();
    }
    public function liste_proposition_objet($prix=0)
    {
        $data=array();
        $i=0;
        $prixinf=$prix-5000;
        $prixsup=$prix+5000;
        $sql="SELECT * FROM objet where prix<=%d and prix>=%d";
        $sql=sprintf($sql,$prixinf,$prixsup);
        $query=$this->db->query($sql);
        foreach($query->result_array() as $row)
        {
            $data[$i]=$row;
            $i++;
        }
        return $data;
    }
   
    public function insert_propositon($idUtilisateur1,$idObjet1,$idUtilisateur2,$idObjet2){
        $sql="insert into proposition values(%d,%d,%d,%d)";
        $sql=sprintf($idUtilisateur1, $idUtilisateur2, $idObjet1, $idObjet2);
        $this->db->query($sql);
    }

    public function objet_utilisateur($iduser){
        $sql = $this->db->get_where('objet',array('idutilisateur' => $iduser));
        return $sql->result_array();
    }

    
}
