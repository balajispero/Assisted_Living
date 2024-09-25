<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require APPPATH.'controllers/General.php'; 

class Relative_agree extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		
		
	}
	
	public function conform(){
		//$eval_no = $this->uri->segment("4");
		$eval_no = base64_decode($this->uri->segment("4"));
	
		$this->data['message'] = $this->session->flashdata('message');
		if(isset($_POST['btnSubmit'])){
			$where = "(
		rel_agree= 'Yes' or
		rel_agree='No' 
		)
		and eval_no = '".$this->input->post('eval_no')."' 
		and InActive = 0";
		$this->db->where($where);
		$query = $this->db->get("physio_evaluation");
		
		if($query->num_rows() > 0)
		{
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>This link use for one time.</div>");
		}
		else{

				$this->data = array(
				'rel_agree'		=>		$this->input->post('agree')
				);

				$id=array('eval_no'=>$this->input->post('eval_no'),'InActive'=>0);	
				$query = $this->db->update('physio_evaluation',$this->data,$id);
				
				$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Thank you for your confirmation!</div>");
			}	
				$this->data['message'] = $this->session->flashdata('message');
				redirect(base_url().'app/relative_agree/conform/'.base64_encode($this->input->post('eval_no')),$this->data);
			
		}
		else{
		$this->load->view("app/physio/relative_confirmation",$this->data);
		}	
	}
	

}
