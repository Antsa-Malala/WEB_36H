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
        
}