<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {	
	public function log()
        {
                $this->load->view('index');
        }
	public function index()
        {
                $this->load->view('index');
        }
        public function inscription()
        {
                $this->load->view('inscription');
        }
        public function categorie()
        {
                $this->load->model('Categorie_Model');
                $objet['categorie']=$this->Categorie_Model->liste_categorie();
                $this->load->view('categories',$objet);
        }
        public function accueil()
        {
                $this->load->model('Objet_Model');
                $objet['zavatra']=$this->Objet_Model->liste_object();
                $this->load->view('accueil',$objet);
        }
        public function insertion()
        {
                $this->load->view('insertion');
        }
        public function mes_proposition()
        {
                session_start();
                $this->load->model('Utilisateur');
                $donnee=$this->Utilisateur->donneeUtilisateur($_SESSION['nom_utilisateur']);
                $prix=$this->input->get('p');
                $id=$this->input->get('id');
                $idUtilisateur=$this->input->get('user');
                $this->load->model('Objet_Model');
                $liste['zavatra']=$this->Objet_Model->liste_proposition_objet($prix,$donnee['id']);
                $liste['id']=$id;
                $liste['idUtilisateur']=$idUtilisateur;
                $this->load->view('mes_propositions',$liste);
        }
        public function proposition()
        {
                $data=array();
                $utilisateur1=array();
                $utilisateur2=array();
                $objet1=array();
                $objet2=array();
                session_start();
                $this->load->model('Proposition_Model');
                $this->load->model('Objet_Model');
                $this->load->model('Utilisateur');
                $donnee=$this->Utilisateur->donneeUtilisateur($_SESSION['nom_utilisateur']);
                $objet=$this->Proposition_Model->liste_proposition_utilisateur1($donnee['id']);
                for($i=0;$i<count($objet);$i++)
                {
                        $utilisateur1[$i]=$this->Utilisateur->donneeUtilisateurId($objet[$i]['idUtilisateur1']);
                        $utilisateur2[$i]=$this->Utilisateur->donneeUtilisateurId($objet[$i]['idUtilisateur2']);
                        $objet1[$i]=$this->Objet_Model->donneeObjetId($objet[$i]['idObjet1']);
                        $objet2[$i]=$this->Objet_Model->donneeObjetId($objet[$i]['idObjet2']);

                }
                $data=array(
                        'utilisateur1'=>$utilisateur1,
                        'utilisateur2'=>$utilisateur2,
                        'objet1'=>$objet1,
                        'objet2'=>$objet2
                );
                $this->load->view('proposition',$data);
        }
        public function users()
        {
                $this->load->model('Utilisateur');
                $objet['user']=$this->Utilisateur->liste_utilisateur();
                $this->load->view('users',$objet);
        }
        public function deconnexion()
        {   
            session_destroy();
            redirect(base_url("Page/index"));
        }
        
        
}