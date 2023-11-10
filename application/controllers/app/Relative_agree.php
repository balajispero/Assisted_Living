<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require APPPATH.'controllers/General.php'; 

class Relative_agree extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		/*$this->load->model("app/ipd_model");
		$this->load->model("app/patient_model");
		$this->load->model("app/doctor_model");
		$this->load->model("app/physio_model");
		$this->load->model("General_model");
		if(General::is_logged_in() == FALSE){
            redirect(base_url().'login');    
        }
		General::variable();	*/
		
	}
	
	

	public function conform(){
		$iop_no = $this->uri->segment("4");
		/*$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEval'] = $this->physio_model->get_physio_evaluation();*/
		
		$this->load->view("app/physio/relative_confirmation");	
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
