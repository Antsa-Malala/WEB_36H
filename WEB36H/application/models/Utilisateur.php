<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Model {
    public function liste_utilisateur()
    {
        $data=array();
        $i=0;
        $sql="SELECT * FROM utilisateur";
        $query=$this->db->query($sql);
        foreach($query->result_array() as $row)
        {
            $data[$i]=$row;
            $i++;
        }
        return $data;
    }
   
}
