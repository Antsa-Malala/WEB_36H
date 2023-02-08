<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposition_controller extends CI_Controller {	
	
    public function proposition($idObjet)
    {
        $this->load->model('Proposition_Model');
        $adm['proposition']=$this->Proposition_Model->liste_proposition_objet($idObjet);
        $this->load->view('proposition',$adm);
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