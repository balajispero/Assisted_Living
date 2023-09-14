<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'controllers/General.php'; 

class Dashboard extends General{
    private $limit = 10;

	function __construct(){
		parent::__construct();	
		$this->load->model("app/dashboard_model");
		$this->load->model("app/patient_model");
		$this->load->model("app/ipd_model");
		$this->load->model("app/Opd_model");
		if(General::is_logged_in() == FALSE){
            redirect(base_url().'login');    
        }
		General::variable();
	}
	
	public function index(){
		$this->dashboard();	
	}
	public function dashboard(){
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $id = $this->uri->segment("4");
		$this->data['latest_patient'] = $this->dashboard_model->latest_patient();		 
		$this->data['latest_visited_patient'] = $this->dashboard_model->getRoomstatus();		 
		$this->data['getTodayAppointment'] = $this->dashboard_model->getTodayAppointment();	
		//$this->data['getstatus'] = $this->dashboard_model->getstatus();
        // print_r($this->data['getTodayAppointment']);die;
		$this->load->view('app/dashboard',$this->data);	
	}
	
	public function view_details($id=0){
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $id = $this->uri->segment("4");
				 $iop_no = $this->uri->segment("5");
		$this->data['latest_patient'] = $this->dashboard_model->latest_patient();		 
		$this->data['latest_visited_patient'] = $this->dashboard_model->getRoomstatus();		 
		$this->data['getTodayAppointment'] = $this->dashboard_model->getTodayAppointment();	
		$this->data['patientInfo'] = $this->patient_model->getPatient($id);
		
		$this->data['patientDiagnosis'] = $this->ipd_model->patientDiagnosis($iop_no);
		$this->data['patientComplain'] = $this->Opd_model->patientComplain($iop_no);

		$uri_segment = 6;
		$offset_progress_note = $this->uri->segment($uri_segment);
		
		$patient = $this->Opd_model->getNurseProgressNote_pagination($this->limit, $offset_progress_note, $iop_no);
		
		$config5['base_url'] = base_url().'app/dashboard/view_details/'.$id.'/'.$iop_no;
 		$config5['total_rows'] = $this->Opd_model->getNurseProgressNote_cnt($iop_no);
 		$config5['per_page'] = $this->limit;
		
		
		$config5['uri_segment'] = $uri_segment;
		$config5['full_tag_open'] = '<ul class="pagination pagination no-margin pull-right">';
		$config5['full_tag_close'] = '</ul><!--pagination-->';

		$config5['first_link'] = '&laquo; First';
		$config5['first_tag_open'] = '<li class="prev page">';
		$config5['first_tag_close'] = '</li>';

		$config5['last_link'] = 'Last &raquo;';
		$config5['last_tag_open'] = '<li class="next page">';
		$config5['last_tag_close'] = '</li>';

		$config5['next_link'] = 'Next &rarr;';
		$config5['next_tag_open'] = '<li class="next page">';
		$config5['next_tag_close'] = '</li>';

		$config5['prev_link'] = '&larr; Previous';
		$config5['prev_tag_open'] = '<li class="prev page">';
		$config5['prev_tag_close'] = '</li>';

		$config5['cur_tag_open'] = '<li class="active"><a href="">';
		$config5['cur_tag_close'] = '</a></li>';

		$config5['num_tag_open'] = '<li class="page">';
		$config5['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config5);
		$this->data['pagination5'] = $this->pagination->create_links();
		$this->data['getNurseProgressNote'] = $this->Opd_model->getNurseProgressNote_pagination($this->limit, $offset_progress_note, $iop_no);
		
		$uri_segment = 6;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->Opd_model->getVital_pagination($this->limit, $offset, $iop_no);
		
		$config['base_url'] = base_url().'app/dashboard/view_details/'.$id.'/'.$iop_no;
 		$config['total_rows'] = $this->Opd_model->getVital_cnt($iop_no);
 		$config['per_page'] = $this->limit;
		
		
		$config['uri_segment'] = $uri_segment;
		$config['full_tag_open'] = '<ul class="pagination pagination no-margin pull-right">';
		$config['full_tag_close'] = '</ul><!--pagination-->';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$this->data['pagination2'] = $this->pagination->create_links();

		$this->data['getVital'] = $this->Opd_model->getVital_pagination($this->limit, $offset, $iop_no);

		//$this->data['getVital'] = $this->Opd_model->getVital($iop_no);
		//$this->data['getIntake'] = $this->ipd_model->getIntake($iop_no);
		$uri_segment = 6;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->ipd_model->getIntake_pagination($this->limit, $offset, $iop_no);
		
		$config['base_url'] = base_url().'app/dashboard/view_details/'.$id.'/'.$iop_no;
 		$config['total_rows'] = $this->ipd_model->getIntake_cnt($iop_no);
 		$config['per_page'] = $this->limit;
		
		
		$config['uri_segment'] = $uri_segment;
		$config['full_tag_open'] = '<ul class="pagination pagination no-margin pull-right">';
		$config['full_tag_close'] = '</ul><!--pagination-->';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$this->data['pagination3'] = $this->pagination->create_links();

		$this->data['getIntake'] = $this->ipd_model->getIntake_pagination($this->limit, $offset, $iop_no);


				$uri_segment = 6;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->ipd_model->getOutput_pagination($this->limit, $offset, $iop_no);
		
		$config['base_url'] = base_url().'app/dashboard/view_details/'.$id.'/'.$iop_no;
 		$config['total_rows'] = $this->ipd_model->getOutput_cnt($iop_no);
 		$config['per_page'] = $this->limit;
		
		
		$config['uri_segment'] = $uri_segment;
		$config['full_tag_open'] = '<ul class="pagination pagination no-margin pull-right">';
		$config['full_tag_close'] = '</ul><!--pagination-->';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$this->data['pagination4'] = $this->pagination->create_links();

		$this->data['getOutput'] = $this->ipd_model->getOutput_pagination($this->limit, $offset, $iop_no);


		//$this->data['getOutput'] = $this->ipd_model->getOutput($iop_no);
		$uri_segment = 6;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->Opd_model->given_medicine_chart_pagination($this->limit, $offset, $iop_no);
		
		$config['base_url'] = base_url().'app/dashboard/view_details/'.$id.'/'.$iop_no;
 		$config['total_rows'] = $this->Opd_model->given_medicine_chart_cnt($iop_no);
 		$config['per_page'] = $this->limit;
		
		
		$config['uri_segment'] = $uri_segment;
		$config['full_tag_open'] = '<ul class="pagination pagination no-margin pull-right">';
		$config['full_tag_close'] = '</ul><!--pagination-->';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$this->data['pagination'] = $this->pagination->create_links();

		$this->data['given_medicine'] = $this->Opd_model->given_medicine_chart_pagination($this->limit, $offset, $iop_no);

		// $this->data['given_medicine'] = $this->Opd_model->given_medicine_chart($iop_no);
		$this->data['getProgressNote'] = $this->Opd_model->getIndCarePlan($iop_no);

		$this->load->view('app/view_details',$this->data);	
	}
	
	public function view_detailss($id=0){
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $id = $this->uri->segment("4");
				 $iop_no = $this->uri->segment("5");
		$this->data['latest_patient'] = $this->dashboard_model->latest_patient();		 
		$this->data['latest_visited_patient'] = $this->dashboard_model->getRoomstatus();		 
		$this->data['getTodayAppointment'] = $this->dashboard_model->getTodayAppointment();	
		$this->data['patientInfo'] = $this->patient_model->getPatient($id);
		
		$this->data['patientDiagnosis'] = $this->ipd_model->patientDiagnosis($iop_no);
		$this->data['patientComplain'] = $this->Opd_model->patientComplain($iop_no);
		$this->data['getNurseProgressNote'] = $this->Opd_model->getNurseProgressNote($iop_no);
		$this->data['getVital'] = $this->Opd_model->getVital($iop_no);
		$this->data['getIntake'] = $this->ipd_model->getIntake($iop_no);
		$this->data['getOutput'] = $this->ipd_model->getOutput($iop_no);
		
		/*$uri_segment = 6;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->Opd_model->given_medicine_chart_pagination($this->limit, $offset, $iop_no);
		
		$config['base_url'] = base_url().'app/dashboard/view_details/'.$id.'/'.$iop_no;
 		$config['total_rows'] = $this->Opd_model->given_medicine_chart_cnt($iop_no);
 		$config['per_page'] = $this->limit;
		
		
		$config['uri_segment'] = $uri_segment;
		$config['full_tag_open'] = '<ul class="pagination pagination no-margin pull-right">';
		$config['full_tag_close'] = '</ul><!--pagination-->';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$this->data['pagination'] = $this->pagination->create_links();

		$this->data['given_medicine'] = $this->Opd_model->given_medicine_chart_pagination($this->limit, $offset, $iop_no);*/
 		$this->data['given_medicine'] = $this->Opd_model->given_medicine_chart($iop_no);
		$this->data['getProgressNote'] = $this->Opd_model->getIndCarePlan($iop_no);

		$this->load->view('app/view_details',$this->data);	
	}
	
}