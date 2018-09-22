<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';


class Home extends REST_Controller {

	function __construct()
	{
		parent::__construct();

		//add methods if required
	}




	public function sample_get(){
		$this->response(['status' => "0", 'message' => "samlpe!", ], REST_Controller::HTTP_OK);
	}




	public function view_post(){
		$this->response(['status'=>'1','message'=>'API works Successfully'],REST_Controller::HTTP_OK);
	}

	









}
