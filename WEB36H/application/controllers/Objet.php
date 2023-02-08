<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Controller {	
    
    public function objet($prix)
    {
        $this->load->model('Objet_Model');
        $adm['objet']=$this->Objet_Model->liste_proposition_objet($prix);
        $this->load->view('proposition',$adm);
    }
    public function objet_categorie($idcategorie)
    {
        $this->load->model('Objet_Model');
        $adm['object']=$this->Objet_Model->liste_objet_categorie($idcategorie);
        $this->load->view('profil',$adm);
    }
    public function liste_objet_client($idUtilisateur)
    {
        $this->load->model('Objet_Model');
        $objet['zavatra']=$this->Objet_Model->liste_objet_categorie($idcategorie,$donnee['id']);
        $this->load->view('Objet_categorie',$objet);  
    }
    public function liste_objet_utilisateur($idutilisateur)
    {
        $this->load->model('Objet_Model');
        $objet['zavatra']=$this->Objet_Model->liste_objet_utilisateur($idutilisateur);
        $this->load->view('Objet_categorie',$objet);  
    }
    public function liste_proposition_objet($idobjet)
    {
        $this->load->model('Objet_Model');
        $objet['zavatra']=$this->Objet_Model->liste_proposition_objet($idobjet);
        $this->load->view('Objet_categorie',$objet);  
    }
    public function insertion_objet()
    {
        
    }

        
}