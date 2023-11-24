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
	public function save_physio_eval_sent_mail(){
		@$cc ="kaushikpanditrao@ahpl.in" .", ". @$this->input->post('rel_email2');
		$this->data = array(
			'iop_id'	=>		$this->input->post('opd_no'),
			'patient_no'	=>		$this->input->post('patient_no'),
			'eval_no'	=>		$this->input->post('eval_no'),
			'mail_to'				=>		$this->input->post('mail_to'),
			'rel_email2'				=>		$this->input->post('rel_email2'),
			'patient_name'		=>		$this->input->post('patient_name'),
			'mail_from'		=>		!empty($this->input->post('mail_to')) ? $this->input->post('mail_to') : '',
			'mail_cc'			=>		@$cc,
			'rel_name'			=>		@$this->input->post('rel_name'),
			'eval_date'			=>		@$this->input->post('eval_date'),
			'treatment_goal'		=>		$this->input->post('treatment_goal'),
			'added_date'	=>		date("Y-m-d h:i:s a"),
			'sent_by'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);	
		return $this->db->insert('physio_evaluation_sent_mail',$this->data);
	
	}
	public function get_physio_eval_sent_mail($iop_no,$patient_no,$eval_no){
		//$this->db->order_by("dDateTime","DESC");
		
				$query = $this->db->get_where("physio_evaluation_sent_mail",array(
				'InActive'	=>		0,
				'iop_id'=>$iop_no,
				'patient_no'=>$patient_no,
				'eval_no'=>$eval_no
				));	
				
			//$query->result();
			//echo $this->db->last_query(); die;
		return $query->result();
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