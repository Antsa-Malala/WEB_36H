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
   
}
