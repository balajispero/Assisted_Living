<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require APPPATH.'controllers/General.php'; 

class Relative_agree extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		
		
	}
	
	

	public function conform(){
		$eval_no = $this->uri->segment("4");
		$md5eval_no = $this->uri->segment("5");
		
		/*$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEval'] = $this->physio_model->get_physio_evaluation();*/
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
				redirect(base_url().'app/relative_agree/conform/'.$this->input->post('eval_no').'/'.md5($this->input->post('eval_no')),$this->data);
			
		}
		else{
		$this->load->view("app/physio/relative_confirmation",$this->data);
		}	
	}
	
	public function add_evaluation()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');
				 $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
				 $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['lastPreassesID'] = $this->physio_model->lastPreassesID();
		
		$this->load->view('app/physio/add_evaluation',$this->data);
	}
	
	


}
