<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {	
        public function inscrire()
        {

                $nom=$this->input->post('nom');
                $prenom=$this->input->post('prenom');
                $nom_utilisateur=$this->input->post('nom_utilisateur');
                $mot_de_passe=$this->input->post('mot_de_passe');
                $sql="INSERT INTO utilisateur (nom_utilisateur,mot_de_passe,estAdmin,nom,prenom) VALUES (%s,%s,0,%s,%s)";
                $sql=sprintf($sql,$this->db->escape($nom_utilisateur),$this->db->escape($mot_de_passe),$this->db->escape($nom),$this->db->escape($prenom));
                $this->db->query($sql);
                redirect(base_url('Page/accueil'));
        }
        
}