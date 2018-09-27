<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::___construct();
		$this->load->library(array("form_validation",'session','upload','pagination'));
		$this->load->model("Admin_model");
		$this->emp=$this->load->database('emp', TRUE); //if more than one db used
		$this->load->helper(array('form', 'url','security')); 
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function pagenotfound(){
		$this->load->view('pagenotfound');
	}
}
