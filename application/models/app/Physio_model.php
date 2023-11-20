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
	public function get_physio_evaluation($iop_no="",$rel_agree=""){
		//$this->db->order_by("dDateTime","DESC");
		if(!empty($rel_agree))
		{
			$query = $this->db->get_where("physio_evaluation",array(
				'InActive'	=>		0,
				'iop_no'=>$iop_no,
				'rel_agree'=>$rel_agree,
				/*'expert_recommendation'=>'Yes'*/
			));
		}
		else{
				$query = $this->db->get_where("physio_evaluation",array(
				'InActive'	=>		0,
				'iop_no'=>$iop_no
				));	
			}	
			//$query->result();
			//echo $this->db->last_query(); die;
		return $query->result();
	}
	
	public function get_evaluation_data($eval_no,$iop_no=""){
		if(!empty($iop_no))
		{
			$query = $this->db->get_where("physio_evaluation",array(
				'InActive'	=>		0,
				'iop_no'=>$iop_no,
				'eval_no'=>$eval_no
			));
		}
		else{
				$query = $this->db->get_where("physio_evaluation",array(
				'InActive'	=>		0,
				'eval_no'=>$eval_no
				));	
			}	
			//$query->result();
			//echo $this->db->last_query(); die;
		//return $query->result();	
		return $query->row();
	}
	public function update_evaluation_details($data)
		{   
			$this->db->where(array('InActive'=>0,'id'=>$this->input->post('id'),'eval_no'=>$this->input->post('eval_no'))); 
        	return  $this->db->update("physio_evaluation",$data);
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