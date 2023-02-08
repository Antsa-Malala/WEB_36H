<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_Model extends CI_Model {
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
    public function donneeAdmin()
    {
        $sql="SELECT * FROM utilisateur where estAdmin=1";
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }
    public function donneeUtilisateur($idUtilisateur=0)
    {

        
        $sql="SELECT * FROM utilisateur where id=%d";
        $sql=sprintf($sql,$idUtilisateur);
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }
    public function nbUser()
    {
        $sql="SELECT COUNT(*) FROM utilisateur where estAdmin=0";
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }
    public function nbEchange(){
        $sql="SELECT COUNT(*) FROM mouvement where etat=1";
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }
}
