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
        public function accueil()
        {
                $this->load->view('accueil');
        }
        public function insertion()
        {
                $this->load->view('insertion');
        }
        public function users()
        {
                $this->load->view('users');
        }
        
        
}