<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_controller extends CI_Controller {	
	
    public function categorie()
    {
        $this->load->model('Categorie_Model');
        $adm['categorie']=$this->Categorie_Model->liste_categorie();
        $this->load->view('profil',$adm);
    }
    public function supprimer()
    {
        $idCategorie=$this->input->get('id');
        $this->load->model('Categorie_Model');
        $adm['categorie']=$this->Categorie_Model->supprimer_categorie($idCategorie);
        redirect(base_url("Page/categorie"));
    }
    public function ajout_categorie()
    {
        $categorie=$this->input->post('cate');
        $this->load->model('Categorie_Model');
        $adm['categorie']=$this->Categorie_Model->insert_Categorie($categorie);
        redirect(base_url("Page/categorie"));

    }
    public function liste_objet_categorie($idcategorie)
    {
        session_start();
        $this->load->model('Objet_Model');
        $this->load->model('Utilisateur');
        $donnee=$this->Utilisateur->donneeUtilisateur($_SESSION['nom_utilisateur']);
        $objet['zavatra']=$this->Objet_Model->liste_objet_categorie($idcategorie,$donnee['id']);
        $this->load->view('Objet_categorie',$objet);  
    }
        
}