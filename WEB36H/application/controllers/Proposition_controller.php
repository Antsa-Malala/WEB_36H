<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposition_controller extends CI_Controller {	
	
    public function proposition($idObjet)
    {
        $data=array();
        $idproposition=array();
        $utilisateur1=array();
        $utilisateur2=array();
        $objet1=array();
        $objet2=array();
        session_start();
        $this->load->model('Proposition_Model');
        $this->load->model('Objet_Model');
        $this->load->model('Utilisateur');
        $donnee=$this->Utilisateur->donneeUtilisateur($_SESSION['nom_utilisateur']);
        $objet=$this->Proposition_Model->liste_proposition_objet($idObjet);
        for($i=0;$i<count($objet);$i++)
        {
                $idproposition[$i]=$objet[$i]['idProposition'];
                $utilisateur1[$i]=$this->Utilisateur->donneeUtilisateurId($objet[$i]['idUtilisateur1']);
                $utilisateur2[$i]=$this->Utilisateur->donneeUtilisateurId($objet[$i]['idUtilisateur2']);
                $objet1[$i]=$this->Objet_Model->donneeObjetId($objet[$i]['idObjet1']);
                $objet2[$i]=$this->Objet_Model->donneeObjetId($objet[$i]['idObjet2']);

        }
        $data=array(
                'idproposition'=>$idproposition,
                'utilisateur1'=>$utilisateur1,
                'utilisateur2'=>$utilisateur2,
                'objet1'=>$objet1,
                'objet2'=>$objet2
        );
        $this->load->view('proposition',$data);
    }
    public function validation()
    {
        $idProposition=$this->input->get('id');
        $this->load->model('Proposition_Model');
        $adm['proposition']=$this->Proposition_Model->valider($idProposition);
        redirect(base_url("Page/proposition"));
    }
    public function refus()
    {
        $idProposition=$this->input->get('id');
        $this->load->model('Proposition_Model');
        $adm['proposition']=$this->Proposition_Model->refuser($idProposition);
        redirect(base_url("Page/proposition"));
    }
    public function insertion_proposition()
    {
        $this->load->model('Utilisateur');
        session_start();
        $idUtilisateur1=$this->input->get('user');
        $idObjet1=$this->input->get('id1');
        $idObjet2=$this->input->get('id2');
        $utilisateur2=$this->Utilisateur->donneeUtilisateur($_SESSION['nom_utilisateur']);
        $this->load->model('Proposition_Model');
        $this->Proposition_Model->insert_proposition($idUtilisateur1,$idObjet1,$utilisateur2['id'],$idObjet2);
        redirect(base_url("Page/accueil"));
    }
        
}