<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Physio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	public function save_evaluation_details($data)
	{     
        $this->db->insert('physio_evaluation', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
	}
	public function get_physio_evaluation($eval_no=""){
		//$this->db->order_by("dDateTime","DESC");
		$query = $this->db->get_where("physio_evaluation",array(
			'InActive'	=>		0
		));	
		return $query->result();
	}
	public function get_evaluation_data($eval_no){
		$query = $this->db->get_where("physio_evaluation", array('eval_no' => $eval_no));	
		return $query->row();
	}
	

	public function lastPreassesID(){
		$this->db->select("(cValue + 1) as cValue");
		$this->db->where(array('cCode'=>'eval_no','InActive'=>0));
		$query = $this->db->get("system_option");
		return $query->row();	
	}
	public function updateAutoNum(){
		$this->db->where(array(
			'cCode'			=>		'eval_no',
			'InActive'		=>		0
		));	
		$this->data = array('cValue'	=>		$this->input->post('userID2'));
		$this->db->update("system_option",$this->data);
	}

	
	
}