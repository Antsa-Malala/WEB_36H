<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
    public function donneeAdmin()
    {
        $data=array();
        $i=0;
        $sql="SELECT * FROM utilisateur where estAdmin=1";
        $query=$this->db->query($sql);
        foreach($query->result_array() as $row)
        {
            $data[$i]=$row;
            break;
        }
        return $data;
    }
   
}
