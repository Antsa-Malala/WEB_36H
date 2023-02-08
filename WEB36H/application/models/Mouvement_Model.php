<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mouvement_Model extends CI_Model {
    public function liste_mouvement()
    {
        $data=array();
        $i=0;
        $sql="SELECT * FROM mouvement";
        $query=$this->db->query($sql);
        foreach($query->result_array() as $row)
        {
            $data[$i]=$row;
            $i++;
        }
        return $data;
    }
    public function liste_mouvement_proposition()
    {
        $data=array();
        $i=0;
        $sql="SELECT * FROM mouvement_proposition";
        $query=$this->db->query($sql);
        foreach($query->result_array() as $row)
        {
            $data[$i]=$row;
            $i++;
        }
        return $data;
    }
    
}
