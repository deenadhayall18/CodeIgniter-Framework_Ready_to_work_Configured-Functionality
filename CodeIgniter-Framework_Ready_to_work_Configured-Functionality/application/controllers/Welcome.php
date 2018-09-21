<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::___construct();
		$this->load->library("form_validation");
		$this->load->model("Admin_model");
		$this->emp=$this->load->database('emp', TRUE); //if more than one db used
		$this->load->helper(array('form', 'url')); 
		$this->load->library('session');
		$this->load->library('upload');		
		$this->load->helper('security');
		$this->load->library('pagination');
	}


	public function index()
	{
		$this->load->view('welcome_message');
	}
}
