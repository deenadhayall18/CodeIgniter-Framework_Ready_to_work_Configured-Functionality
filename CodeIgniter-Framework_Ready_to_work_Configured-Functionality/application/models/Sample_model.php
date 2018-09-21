<?php 

class Sample_model extends CI_Model {
// to echo the query
	// echo $this->db->last_query(); die;

//select
	function query($data){		
		$query  = $this->db->select("*")->from("tbl_sample")->where("id",$data['id'])->where("password",$data['password'])->get()->result_array();
		return $query;
	}	
// get
	function getquery(){		
		$res = $this->db->get("tbl_sample")->result_array();
		return $res;
	}	
//get count 
	function samplecount() {
		return $this->db->count_all("tbl_sample");
	}

//insert 
	function SaveAnnouncementPdf($data){
		$res = $this->db->insert("tbl_sample",$data);
		return $res; 
	}


//update
	function updatequery($data){
		$this->db->where("id","sample");
		$this->db->set("status",'1');
		$res =$this->db->update("tbl_sample");
		return $res; 
	}
//delete 
	function deletequery($id){
		$res = $this->db->where("id",$id)->delete("tbl_sample");
		return $res;
	}

}
?>