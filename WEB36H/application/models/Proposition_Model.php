<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposition_Model extends CI_Model {
    public function liste_proposition_objet($idobjet) {
        $query = $this->db->get_where('proposition',array('idObjet1' => $idobjet));
        return $query->result_array();
    }
    public function donneeProposition($idProposition)
     {
         $sql="SELECT * FROM proposition where idProposition=%d";
         $sql=sprintf($sql,$idProposition);
         $query=$this->db->query($sql);
         $row=$query->row_array();
         return $row;
     }
    public function valider($idProposition)
   {
    $adm=$this->donneeProposition($idProposition);
    $sql1="UPDATE objet SET idUtilisateur=%d where id=%d";
    $sql1=sprintf($sql1,$adm['idUtilisateur1'],$adm['idObjet2']);
    $this->db->query($sql1);

    $sql2="UPDATE objet SET idUtilisateur=%d where id=%d";
    $sql2=sprintf($sql2,$adm['idUtilisateur2'],$adm['idObjet1']);
    $this->db->query($sql2);

    $rqt="INSERT INTO mouvement VALUES (%d,1)";
    $rqt=sprintf($rqt,$idProposition);
    $this->db->query($rqt);
   }
    public function refuser($idProposition)
   {

    $rqt="INSERT INTO mouvement VALUES (%d,0)";
    $rqt=sprintf($rqt,$idProposition);
    $this->db->query($rqt);
   }
    public function supprimer($idProposition)
   {
    $rqt="DELETE FROM proposition where id=%d";
    $rqt=sprintf($rqt,$idProposition);
    $this->db->query($rqt);
   } 

    public function liste_proposition_utilisateur1($idUser){
        $sql = $this->db->get_where('proposition',array('idutilisateur1' => $idUser));
        return $sql->result_array();
    } 
    public function liste_proposition_utilisateur2($idUser){
        $sql = $this->db->get_where('proposition',array('idutilisateur2' => $idUser));
        return $sql->result_array();
    } 
   public function liste_reponse_proposition($idUtilisateur)
   {
        $data=array();
        $liste=$this->liste_proposition_utilisateur2($idUtilisateur);
        $this->load->model('Mouvement_Model');
        $liste_mouvement=$this->Mouvement_Model->liste_mouvement();
        $liste_mouvement_proposition=$this->Mouvement_Model->liste_mouvement_proposition();
        for($i=0;$i<count($liste);$i++)
        {
            for($j=0;$j<count($liste_mouvement);$j++)
            {
                if($liste[$i]['idProposition']==$liste_mouvement[$j]['idProposition'])
                {
                    $data[$i]=$liste_mouvement[$j];
                }
            }
        }
   }
   public function insert_proposition($idUtilisateur1,$idObjet1,$idUtilisateur2,$idObjet2){
    $sql="insert into proposition(idUtilisateur1,idUtilisateur2,idObjet1,idObjet2) values(%d,%d,%d,%d)";
    $sql=sprintf($sql,$idUtilisateur1, $idUtilisateur2, $idObjet1, $idObjet2);
    $this->db->query($sql);
}
   
}
