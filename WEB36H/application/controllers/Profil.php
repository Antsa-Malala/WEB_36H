<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {	
        public function pro()
        {
            session_start();
            $this->load->model('Objet_Model');
            $this->load->model('Utilisateur');
            $donnee=$this->Utilisateur->donneeUtilisateur($_SESSION['nom_utilisateur']);
            $adm['objet']=$this->Objet_Model->objet_utilisateur($donnee['id']);
            $adm['nom']=$donnee['nom'];
            $this->load->view('profil1',$adm);
        }
       

        
}