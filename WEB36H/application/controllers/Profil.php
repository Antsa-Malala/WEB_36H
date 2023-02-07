<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {	
        public function profil()
        {
            $this->load->model('Utilisateur');
            $adm['admin']=$this->Utilisateur->donneeAdmin();
            $this->load->view('profil',$adm);
        }

        
}