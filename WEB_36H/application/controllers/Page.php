<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {	
	public function log()
        {
                $this->load->view('index');
        }
        public function inscription()
        {
                $this->load->view('inscription');
        }
        public function accueil()
        {
                $this->load->view('accueil');
        }
        public function verifie()
        {  
                $nom_utilisateur=$this->input->post('nom_utilisateur');
                $mot_de_passe=$this->input->post('mot_de_passe');
                session_start();
                $this->load->model('Utilisateur');
                $utilisateur=$this->Utilisateur->liste_utilisateur();
                for($i=0;$i<count($utilisateur);$i++)
                {
                        if($utilisateur[$i]['nom_utilisateur']==$nom_utilisateur&&$utilisateur[$i]['mot_de_passe']==$mot_de_passe)
                        {
                                $_SESSION['nom_utilisateur']=$nom_utilisateur;
                                $_SESSION['mot_de_passe']=$mot_de_passe;
                                redirect(base_url('Page/accueil/'));
                        }
                }
                redirect(base_url('Page/log/'));
        }
}