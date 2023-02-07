<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {	
        public function utilisateur()
        {
            $this->load->model('Utilisateur');
            $adm['admin']=$this->Utilisateur->donneeUtilisateur(1);
            $this->load->view('profil',$adm);
        }

        
}