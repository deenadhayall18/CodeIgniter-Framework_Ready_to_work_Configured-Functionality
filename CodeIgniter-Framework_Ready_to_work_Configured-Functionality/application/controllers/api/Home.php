<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';


class Home extends REST_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database(); 
		$this->load->library('upload');
		// $this->load->model('Sequence_model');
	}




	public function import_get(){
		$venuecode = $this->input->get('vcode');
		$examdate = $this->input->get('examdate');
		if(!empty($venuecode)and(!empty($examdate))){
			$query = $this->db->get_where('tbl_dummy_biometric', array('candvenuecode =' => $venuecode,'candexamdate = ' =>$examdate));
			$result=$query->result_array();
		}else{
			if(empty($venuecode)){
				$this->response([
					'status' => "0",
					'message' => "Invalid Venue Code..!",
					'Canddet'=>$result
				], REST_Controller::HTTP_OK);
			}
			if(empty($examdate)){
				$this->response([
					'status' => "0",
					'message' => "Invalid Exam Date..!",
					'Canddet'=>$result
				], REST_Controller::HTTP_OK);
			}
		}
		if(!empty($result) and count($result)>0){
			$k=0;foreach($result as $key => $seqValues){$k=$k+1;
				$result1[$key]["id"]=$k;
				$result1[$key]['candvenuecode'] = $seqValues['candvenuecode'];
				$result1[$key]['candctrlno'] = $seqValues['candctrlno'];
				$result1[$key]['candname'] = $seqValues['candname'];
				$result1[$key]['candexamdate'] = $seqValues['candexamdate'];
				$result1[$key]['candexambatch'] = $seqValues['candexambatch'];
				$result1[$key]['canddiscipline'] = $seqValues['canddiscipline'];
				$result1[$key]['candrollno'] = $seqValues['candrollno'];
				$result1[$key]['candcommunity'] = $seqValues['candcommunity'];
				$result1[$key]['canddob'] = $seqValues['canddob'];
				$result1[$key]['candroom'] = $seqValues['candroom'];
				$result1[$key]['candseat'] = $seqValues['candseat'];
				$result1[$key]['candphotofromurl'] = $seqValues['candphotofromurl'];
				$result1[$key]['candphotourl'] = $seqValues['candphotourl'];
				$result1[$key]['candphotobina'] = $seqValues['candphotobina'];
			}
			$this->response([
				'status' => "1",
				'message' => "Data Retrieved Successfully..!",
				'Canddet'=> $result1
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => "0",
				'message' => "No Records Found..!",
				'Canddet'=>$result
			], REST_Controller::HTTP_OK);
		}
	}

	public function import_all_get(){
		$venuecode = $this->input->get('vcode');
		$examdate = $this->input->get('examdate');
		if(!empty($venuecode)and(!empty($examdate))){
			$query = $this->db->get_where('tbl_dummy_biometric', array('candvenuecode =' => $venuecode,'candexamdate = ' =>$examdate));
			$result=$query->result_array();
		}else{
			if(empty($venuecode)){
				$this->response([
					'status' => "0",
					'message' => "Invalid Venue Code..!",
					'Canddet'=>$result
				], REST_Controller::HTTP_OK);
			}
			if(empty($examdate)){
				$this->response([
					'status' => "0",
					'message' => "Invalid Exam Date..!",
					'Canddet'=>$result
				], REST_Controller::HTTP_OK);
			}
		}
		if(!empty($result) and count($result)>0){
			$k=0;foreach($result as $key => $seqValues){$k=$k+1;
				$result1[$key]["id"]=$k;


				$result1[$key]['candvenuecode']=$seqValues['candvenuecode'];
				$result1[$key]['candexamdate']=$seqValues['candexamdate'];
				$result1[$key]['candexambatch']=$seqValues['candexambatch'];
				$result1[$key]['canddiscipline']=$seqValues['canddiscipline'];
				$result1[$key]['candrollno']=$seqValues['candrollno'];
				$result1[$key]['candname']=$seqValues['candname'];
				$result1[$key]['candcommunity']=$seqValues['candcommunity'];
				$result1[$key]['canddob']=$seqValues['canddob'];
				$result1[$key]['candroom']=$seqValues['candroom'];
				$result1[$key]['candseat']=$seqValues['candseat'];
				$result1[$key]['candphotofromurl']=$seqValues['candphotofromurl'];
				$result1[$key]['candphotourl']=$seqValues['candphotourl'];
				$result1[$key]['candphotobina']=$seqValues['candphotobina'];
				$result1[$key]['candimage']=$seqValues['candimage'];
				$result1[$key]['candfingerphotoone']=$seqValues['candfingerphotoone'];
				$result1[$key]['candfingerrawone']=$seqValues['candfingerrawone'];
				$result1[$key]['candfingerphototwo']=$seqValues['candfingerphototwo'];
				$result1[$key]['candfingerrawtwo']=$seqValues['candfingerrawtwo'];
				$result1[$key]['candfingerminone']=$seqValues['candfingerminone'];
				$result1[$key]['candfingermintwo']=$seqValues['candfingermintwo'];
				$result1[$key]['registerstatus']=$seqValues['registerstatus'];
				$result1[$key]['verifiystatus']=$seqValues['verifiystatus'];
				$result1[$key]['uploadstatus']=$seqValues['uploadstatus'];
				$result1[$key]['regmobileid']=$seqValues['regmobileid'];
				$result1[$key]['candctrlno']=$seqValues['candctrlno'];
				$result1[$key]['candregdate']=$seqValues['candregdate'];	

				// $result1[$key]['candvenuecode'] = $seqValues['candvenuecode'];
				// $result1[$key]['candctrlno'] = $seqValues['candctrlno'];
				// $result1[$key]['candname'] = $seqValues['candname'];
				// $result1[$key]['candexamdate'] = $seqValues['candexamdate'];
				// $result1[$key]['candexambatch'] = $seqValues['candexambatch'];
				// $result1[$key]['canddiscipline'] = $seqValues['canddiscipline'];
				// $result1[$key]['candrollno'] = $seqValues['candrollno'];
				// $result1[$key]['candcommunity'] = $seqValues['candcommunity'];
				// $result1[$key]['canddob'] = $seqValues['canddob'];
				// $result1[$key]['candroom'] = $seqValues['candroom'];
				// $result1[$key]['candseat'] = $seqValues['candseat'];
				// $result1[$key]['candphotofromurl'] = $seqValues['candphotofromurl'];
				// $result1[$key]['candphotourl'] = $seqValues['candphotourl'];
				// $result1[$key]['candphotobina'] = $seqValues['candphotobina'];
			}
			$this->response([
				'status' => "1",
				'message' => "Data Retrieved Successfully..!",
				'Canddet'=> $result1
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => "0",
				'message' => "No Records Found..!",
				'Canddet'=>$result
			], REST_Controller::HTTP_OK);
		}
	}



	// public function insert_post(){
	// 	$this->load->model('Sequence_model');
	// 	$data = array();
	// 	$data['candvenuecode'] = $this->input->post('candvenuecode');
	// 	$data['candexamdate'] =$this->input->post('candexamdate');
	// 	$data['candexambatch'] =$this->input->post('candexambatch');
	// 	$data['canddiscipline'] =$this->input->post('canddiscipline');
	// 	$data['candrollno'] =$this->input->post('candrollno');
	// 	$data['candname'] =$this->input->post('candname');
	// 	$data['candcommunity'] =$this->input->post('candcommunity');
	// 	$data['canddob'] =$this->input->post('canddob');
	// 	$data['candroom'] =$this->input->post('candroom');
	// 	$data['candseat'] =$this->input->post('candseat');
	// 	$data['candphotofromurl'] =$this->input->post('candphotofromurl');
	// 	$data['candphotourl'] =$this->input->post('candphotourl');
	// 	$data['candphotobina'] =$this->input->post('candphotobina');
	// 	$data['candimage'] =$this->input->post('candimage');
	// 	$data['candfingerphotoone'] =$this->input->post('candfingerphotoone');
	// 	$data['candfingerrawone'] =$this->input->post('candfingerrawone');
	// 	$data['candfingerphototwo'] =$this->input->post('candfingerphototwo');
	// 	$data['candfingerrawtwo'] =$this->input->post('candfingerrawtwo');
	// 	$data['registerstatus'] =$this->input->post('registerstatus');
	// 	$data['verifiystatus'] =$this->input->post('verifiystatus');
	// 	$data['uploadstatus'] =$this->input->post('uploadstatus');
	// 	$data['regmobileid'] =$this->input->post('regmobileid');
	// 	$result=$this->db->insert("tbl_dummy_biometric",$data);
	// 	if(!empty($data)){
	// 		if(!empty($result)){
	// 			$this->response([
	// 				'status' => 1,
	// 				'message' => 'Inserted Successfully'
	// 			], REST_Controller::HTTP_OK);
	// 		}else{
	// 			$this->response([
	// 				'status' => 0,
	// 				'message' => 'Not Inserted Successfully.'
	// 			], REST_Controller::HTTP_OK);
	// 		}
	// 	}else{
	// 		$this->response([
	// 			'status' => 0,
	// 			'message' => 'Invalid Input'
	// 		], REST_Controller::HTTP_OK);
	// 	}
	// }


	public function view_post(){

		$result=$this->db->query('select * from tbl_dummy_biometric')->result_array();

		if(!empty($result)){
			if(!empty($result)){
				$this->response([
					'status' => 1,
					'message' => 'Retrieved Successfully',
					'result' => $result
				], REST_Controller::HTTP_OK);
			}else{
				$this->response([
					'status' => 0,
					'message' => 'Not Retrieved Successfully.'
				], REST_Controller::HTTP_OK);
			}
		}else{
			$this->response([
				'status' => 0,
				'message' => 'Invalid Data'
			], REST_Controller::HTTP_OK);
		}
	}

	public function delete_post(){

		$this->load->model('Sequence_model');
		$arr = array();
		$arr['id'] = $this->input->post('id');
		$this->db->where('id',$arr['id']);
		$result = $this->db->delete("tbl_dummy_biometric");
		if(!empty($result)){
			$this->response(['status'=>1,'message'=>'Deleted Successfully'],REST_Controller::HTTP_OK);
		}

	}

	public function login_post(){
		// $this->load->model('Sequence_model');
		$username = $this->input->post('username');
		$password =$this->input->post('password');
		$result=$this->db->select("*")->from("tbl_dummy_admin")->where('username',$username)->where('password',$password)->get()->result_array();
		if(!empty($username)and !empty($password)){
			if(!empty($result)){
				$this->response([
					'status' => 1,
					'message' => 'Login Success',
					'result' => $result,
				], REST_Controller::HTTP_OK);
			}else{
				$this->response([
					'status' => 0,
					'message' => 'Invalid Login.'
				], REST_Controller::HTTP_OK);
			}
		}else{
			$this->response(['status' => 0, 'message' => 'Invalid Input'], REST_Controller::HTTP_OK); 
		}
	}





	public function export_post(){
		$this->load->library('upload');
		$data = array();
		// where data
		if(!empty($this->post('candrollno'))){
			$candrollno =$this->post('candrollno');
		}else{
			$this->response([	'status' => 0, 'message' => 'Invalid Input'],REST_Controller::HTTP_OK); } 

			//List of Params to be updated
			$data['candvenuecode'] = $this->post('candvenuecode');
			$data['candregdate'] = time();
			$data['candctrlno'] =$this->post('candctrlno');
			$data['candexamdate'] =$this->post('candexamdate');
			$data['candexambatch'] =$this->post('candexambatch');
			$data['canddiscipline'] =$this->post('canddiscipline');
			$data['candname'] =$this->post('candname');
			$data['candcommunity'] =$this->post('candcommunity');			
			$data['canddob'] =$this->post('canddob');
			$data['candroom'] =$this->post('candroom');
			$data['candseat'] =$this->post('candseat');
			$data['candphotofromurl'] =$this->post('candphotofromurl');

			// $data['candphotourl'] =base_url().'assets/uploads/photos';
			$data['candphotourl'] =$this->post('candphotourl');
			$data['candphotobina'] =$this->post('candphotobina');
			// $data['candimage'] =$this->post('candimage');
			// $data['candfingerphotoone'] =$this->post('candfingerphotoone');
			// $data['candfingerrawone'] =$this->post('candfingerrawone');
			// $data['candfingerphototwo'] =$this->post('candfingerphototwo');
			// $data['candfingerrawtwo'] =$this->post('candfingerrawtwo');
			$data['registerstatus'] =$this->post('registerstatus');
			$data['verifiystatus'] =$this->post('verifiystatus');
			$data['uploadstatus'] =$this->post('uploadstatus');
			$data['regmobileid'] =$this->post('regmobileid');

			

			//CANDIMAGE
			if(!empty($_FILES['candimage']['name'])){
				$config_candImage = array();
				$config_candImage['upload_path']   = './assets/uploads/cand_image/'; 
				$config_candImage['allowed_types'] = 'jpeg|jpg|png'; 
				$config_candImage['overwrite'] = TRUE;
				$this->load->library('upload',$config_candImage,'candimage');
				$this->candimage->initialize($config_candImage);
				$data['candimage'] = $_FILES['candimage']['name'];
				$candImageSuccess = $this->candimage->do_upload('candimage');
			// if(!$candImageSuccess){
			// 	$error_candImage = $this->candimage->display_errors();
			// 	$this->response(['status' => 0, 'ImageName'=>'candimage', 'message' => $error_candImage], REST_Controller::HTTP_OK);
			// }else{
			// 	$error_candImage="";
			// }
			}
			



      //CANDFINGERPHOTOONE
			if(!empty($_FILES['candfingerphotoone']['name'])){
				$config_candFpsOne = array();
				$config_candFpsOne['upload_path']   = './assets/uploads/cand_fps_one/'; 
				$config_candFpsOne['allowed_types'] = 'jpeg|jpg|png'; 
				$config_candFpsOne['overwrite'] = TRUE;
				$this->load->library('upload',$config_candFpsOne,'candfingerphotoone');
				$this->candfingerphotoone->initialize($config_candFpsOne);
				$data['candfingerphotoone'] = $_FILES['candfingerphotoone']['name'];
				$candfingerphotooneSuccess = $this->candfingerphotoone->do_upload('candfingerphotoone');
			// if(!$candfingerphotooneSuccess){
			// 	$error_candFpsOne = $this->candfingerphotoone->display_errors();
			// 	$this->response([	'status' => 0,'ImageName'=>'candfingerphotoone', 'message' => $error_candFpsOne],REST_Controller::HTTP_OK);
			// }else{
			// 	$error_candFpsOne ="";
			// }
			}
			


       //CANDFINGERPHOTOTWO
			if(!empty($_FILES['candfingerphototwo']['name'])){
				$config_candFpsTwo = array();
				$config_candFpsTwo['upload_path']   = './assets/uploads/cand_fps_two/'; 
				$config_candFpsTwo['allowed_types'] = 'jpeg|jpg|png'; 
				$config_candFpsTwo['overwrite'] = TRUE;
				$this->load->library('upload',$config_candFpsTwo,'candfingerphototwo');
				$this->candfingerphototwo->initialize($config_candFpsTwo);
			// $data['candfingerphototwo'] = $_FILES['candfingerphototwo']['name'];
				$data['candfingerphototwo'] = $_FILES['candfingerphototwo']['name'];
				$candfingerphototwoSuccess = $this->candfingerphototwo->do_upload('candfingerphototwo');
			// if(!$candfingerphototwoSuccess){
			// 	$error_candFpsTwo = $this->candfingerphototwo->display_errors();
			// 	$this->response([	'status' => 0,'ImageName'=>'candfingerphototwo','message' => $error_candFpsTwo],REST_Controller::HTTP_OK);
			// }else{
			// 	$error_candFpsTwo ="";
			// }
			}
			

      //CANDFINGERRAWTWO 
			if(!empty($_FILES['candfingerrawtwo']['name'])){
				$config_candFpsRawOne = array();
				$config_candFpsRawOne['upload_path']   = './assets/uploads/cand_raw_two'; 
				$config_candFpsRawOne['allowed_types'] = 'jpeg|jpg|png|min'; 
				$config_candFpsRawOne['overwrite'] = TRUE;
				$this->load->library('upload',$config_candFpsRawOne,'candfingerrawtwo');
				$this->candfingerrawtwo->initialize($config_candFpsRawOne);
			// $data['candfingerrawtwo'] = $_FILES['candfingerrawtwo']['name'];
				$data['candfingerrawtwo'] = $_FILES['candfingerrawtwo']['name'];
				$candfingerrawtwoSuccess = $this->candfingerrawtwo->do_upload('candfingerrawtwo');
			// if(!$candfingerrawtwoSuccess){
			// 	$error_candFpsRawOne = $this->candfingerrawtwo->display_errors();
			// 	$this->response([	'status' => 0,'ImageName'=>'candfingerrawtwo', 'message' => $error_candFpsRawOne],REST_Controller::HTTP_OK);
			// }else{
			// 	$error_candFpsRawOne ="";
			// 	
			}
			




     //CANDFINGERRAWONE
			if(!empty($_FILES['candfingerrawone']['name'])){
				$config_candFpsRawTwo = array();
				$config_candFpsRawTwo['upload_path']   = './assets/uploads/cand_raw_one/'; 
				$config_candFpsRawTwo['allowed_types'] = 'jpeg|jpg|png|min'; 

				$config_candFpsRawTwo['overwrite'] = TRUE;
				$this->load->library('upload',$config_candFpsRawTwo,'candfingerrawone');
				$this->candfingerrawone->initialize($config_candFpsRawTwo);
			// $data['candfingerrawone'] = $_FILES['candfingerrawone']['name'];
				$data['candfingerrawone'] = $_FILES['candfingerrawone']['name'];
				$candfingerrawone = $this->candfingerrawone->do_upload('candfingerrawone');
				// if(!$candfingerrawone){
				// 	$error_candFpsRawTwo = $this->candfingerrawone->display_errors();
				// 	$this->response([	'status' => 0,'ImageName'=>'candfingerrawone','message' => $error_candFpsRawTwo],REST_Controller::HTTP_OK);
				// }else{
				// 	$error_candFpsRawTwo ="";
				// }
			}
			




 //CANDFINGERRAWONE
			if(!empty($_FILES['candfingerrawone']['name'])){
				$config_candFpsRawTwo = array();
				$config_candFpsRawTwo['upload_path']   = './assets/uploads/cand_raw_one/'; 
				$config_candFpsRawTwo['allowed_types'] = 'jpeg|jpg|png|min'; 
				$config_candFpsRawTwo['overwrite'] = TRUE;
				$this->load->library('upload',$config_candFpsRawTwo,'candfingerrawone');
				$this->candfingerrawone->initialize($config_candFpsRawTwo);
			// $data['candfingerrawone'] = $_FILES['candfingerrawone']['name'];
				$data['candfingerrawone'] = $_FILES['candfingerrawone']['name'];
				$candfingerrawone = $this->candfingerrawone->do_upload('candfingerrawone');
				// if(!$candfingerrawone){
				// 	$error_candFpsRawTwo = $this->candfingerrawone->display_errors();
				// 	$this->response([	'status' => 0,'ImageName'=>'candfingerrawone','message' => $error_candFpsRawTwo],REST_Controller::HTTP_OK);
				// }else{
				// 	$error_candFpsRawTwo ="";
				// }

			}
			




 //CANDFINGERMINONE
			if(!empty($_FILES['candfingerminone']['name'])){
				$config_candfingerminone = array();
				$config_candfingerminone['upload_path']   = './assets/uploads/cand_min_one/'; 
				$config_candfingerminone['allowed_types'] = 'jpeg|jpg|png|min|raw'; 
				$config_candfingerminone['overwrite'] = TRUE;
				$this->load->library('upload',$config_candfingerminone,'candfingerminone');
				$this->candfingerminone->initialize($config_candfingerminone);
			// $data['candfingerminone'] = $_FILES['candfingerminone']['name'];
				$data['candfingerminone'] = $_FILES['candfingerminone']['name'];
				$candfingerminone = $this->candfingerminone->do_upload('candfingerminone');
				// if(!$candfingerminone){
				// 	$error_candFpsRawTwo = $this->candfingerminone->display_errors();
				// 	$this->response([	'status' => 0,'ImageName'=>'candfingerminone','message' => $error_candFpsRawTwo],REST_Controller::HTTP_OK);
				// }else{
				// 	$error_candFpsRawTwo ="";
				// }
			}
			



 //CANDFINGERMINONE
			if(!empty($_FILES['candfingermintwo']['name'])){
				$config_candfingermintwo = array();
				$config_candfingermintwo['upload_path']   = './assets/uploads/cand_min_two/'; 
				$config_candfingermintwo['allowed_types'] = 'jpeg|jpg|png|raw|min'; 
				$config_candfingermintwo['overwrite'] = TRUE;
				//$config_candfingermintwo['max_size'] = '100';
				$this->load->library('upload',$config_candfingermintwo,'candfingermintwo');
				$this->candfingermintwo->initialize($config_candfingermintwo);
			// $data['candfingermintwo'] = $_FILES['candfingermintwo']['name'];
				$data['candfingermintwo'] = $_FILES['candfingermintwo']['name'];
				$candfingermintwo = $this->candfingermintwo->do_upload('candfingermintwo');
				// if(!$candfingermintwo){
				// 	$error_candFpsRawTwo = $this->candfingermintwo->display_errors();
				// 	$this->response(['status' => 0,'ImageName'=>'candfingermintwo','message' => $error_candFpsRawTwo],REST_Controller::HTTP_OK);
				// }else{
				// 	$error_candFpsRawTwo ="";
				// }	
			}





			// if(empty($error_candImage)and(empty($error_candFpsOne)and(empty($error_candFpsTwo))and(empty($error_candFpsRawOne))and(empty($error_candFpsRawTwo)))){
			// 	$this->response([
			// 		'status'=>1,
			// 		'message'=>'All Images Uploaded Successfully'
			// 	],REST_Controller::HTTP_OK);
			// }

			foreach ($data as $key => $value) {
				if(!empty($value)){
					$data1[$key] = $value;
				}
			}



			$result = $this->db->where('candrollno',$candrollno);
			$result = $this->db->update("tbl_dummy_biometric",$data1);



			// $this->response([
			// 	'query'=>$this->db->last_query()
			// ]);



			if(!empty($data)){
				if(!empty($result)){
					$this->response([
						'status' => 1,
						'message' => 'Updated Successfully'
					], REST_Controller::HTTP_OK);
				}else{
					$this->response([
						'status' => 0,
						'message' => 'Not Updated Successfully.'
					], REST_Controller::HTTP_OK);
				}
			}else{
				$this->response([
					'status' => 0,
					'message' => 'Invalid Inputs'
				], REST_Controller::HTTP_OK);
			}
		}





	}
