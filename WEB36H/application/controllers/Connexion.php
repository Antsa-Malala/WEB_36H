<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {	
	
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
                                if($utilisateur[$i]['estAdmin']==1)
                                {
                                    $_SESSION['estAdmin']=1;
                                    redirect(base_url('Page/accueil'));
                                }
                                else{
                                    $_SESSION['estAdmin']=0;
                                    redirect(base_url('Page/accueil'));
                                }
                        }
                }
                redirect(base_url('Page/log/'));
        }
        
}