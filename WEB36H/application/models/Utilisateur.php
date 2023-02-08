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
    public function donneeAdmin()
    {
        $sql="SELECT * FROM utilisateur where estAdmin=1";
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }
    public function donneeUtilisateur($nom_utilisateur)
    {
        $sql="SELECT * FROM utilisateur where nom_utilisateur='%s'";
        $sql=sprintf($sql,$nom_utilisateur);
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }
    public function donneeUtilisateurId($id_utilisateur)
    {
        $sql="SELECT * FROM utilisateur where id=%d";
        $sql=sprintf($sql,$id_utilisateur);
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }
    
}
