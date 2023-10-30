<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'controllers/General.php'; 

class Lab extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		$this->load->model("app/opd_model");
		$this->load->model("app/doctor_model");
		$this->load->model("app/preassessment_model");
		$this->load->model("app/lab_model");
		$this->load->model("General_model");
		if(General::is_logged_in() == FALSE){
			redirect(base_url().'login');    
		}
		General::variable();	
		
	}
	
	
	public function lab_sample_test_list($offset = 0){
		
		$this->session->set_userdata(array(
			'tab'			=>		'doctor',
			'module'		=>		'',
			'subtab'		=>		'',
			'submodule'	=>		''));
		
				// user restriction function
				$this->session->set_userdata('page_name','lab_sample');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		 
				
				 //print_r($this->session->userdata());die;
				$uri_segment = 4;
				$offset = $this->uri->segment($uri_segment);
				
				$patient = $this->lab_model->get_lab_sample_test($this->limit, $offset);
// 		print_r($patient);die;
				$config['base_url'] = base_url().'app/lab/lab_sample_test_list/';
				$config['total_rows'] = $this->lab_model->count_all_lab_sample_test();
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
				
				$tmpl = array('table_open' => '<table class="table table-hover table-striped">');
				$this->table->set_template($tmpl);
				$this->table->set_empty("&nbsp;");
				$this->table->set_heading('IOP No','Test Date','Test Name','Patient Name','Doctor','Action');
// 		$i = 0 + $offset;
				
				
				foreach ($patient as $patient)
				{	
				/*if($patient->nStatus == "Pending"){ 
					$nStatus = "Admitted";
				}else{ 
					$nStatus = "Discharged";
				}*/
				$ptn_name=$this->lab_model->get_ptn_name_by_patient_no($patient->patient_no);
				//print_r(@$ptn_name[0]->middlename);
				$doctor_name=$this->lab_model->getPreparedByDoctor($patient->doctor);
				//print_r(@$doctor_name);
				$this->table->add_row( 
					anchor('app/lab/view_lab_sample_report/'.$patient->io_lab_id,$patient->iop_id),
					$patient->dDate, 
					$patient->laboratory_id, 
					@$ptn_name[0]->middlename,
					@$doctor_name->cPreparedBy,  
					anchor('app/lab/add_lab_sample_report/'.$patient->io_lab_id,'Add'),
					anchor('app/lab/edit_lab_sample_report/'.$patient->io_lab_id,'Modify')
					
				);
			}
			$this->data['message'] = $this->session->flashdata('message');
			$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
			$this->load->view('app/lab/lab_sample_test_list',$this->data);	
		}
		
		public function add_lab_sample_report($id=0)
		{
			$this->session->set_userdata(array(
				'tab'			=>		'',
				'module'		=>		'',
				'subtab'		=>		'',
				'submodule'	=>		''));

			// user restriction function
				$this->session->set_userdata('page_name','lab_sample_add');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function
			$this->data['message'] = $this->session->flashdata('message');

			$this->data['lab_test_info'] = $this->lab_model->get_lab_sample_test_single($id);
			
			$this->load->view('app/lab/add_lab_sample_report',$this->data);
		}
		public function lab_sample_test_save()
		{
			$this->data = array(
				'lab_test_name'		=>		$this->input->post('sample_test_name'),
				'added_date_by_lab'		=>		date("Y-m-d h:i:s a"),
				'added_by_lab'		=>		$this->session->userdata('user_id')
			);
			$this->load->library('upload');

			/*********************Start Previous Discharge Report code*********************/
			$images = array();
			if (!empty($_FILES["previous_dischargefile"]["name"])) {
				
				for($i=0;$i<count($_FILES['previous_dischargefile']['name']);$i++){
					
					$_FILES['file']['name'] = $_FILES['previous_dischargefile']['name'][$i];
					$_FILES['file']['type'] = $_FILES['previous_dischargefile']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['previous_dischargefile']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['previous_dischargefile']['error'][$i];
					$_FILES['file']['size'] = $_FILES['previous_dischargefile']['size'][$i];
					
					$config['upload_path'] = realpath('public/lab_test_report'); 
					$config['allowed_types'] = '*';
					$config['max_size'] = 0;
          //$config['file_name'] = rand()."".$_FILES['files']['name'][$i];
					$config['file_name'] = $_FILES['previous_dischargefile']['name'][$i];
					
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('file')){
          	//echo $this->upload->do_upload('file');
						$uploadData = $this->upload->data();
            //$filename = $uploadData['file_name'];
						$images[] = $uploadData['file_name'];      
            //$images[] = $filename; 
						
					}
					
				}
				
				$this->data['lab_test_reports']=implode(',',$images);
			}
			/*********************End Previous Discharge Report code*********************/
			
			$this->db->where("io_lab_id",$this->input->post('sample_test_id'));
			$this->db->update("iop_laboratory",$this->data);

			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Sample test reports save successfully!</div>");
			redirect(base_url('app/lab/lab_sample_test_list'));
			
		}
		public function view_lab_sample_report($id=0)
		{
			$this->session->set_userdata(array(
				'tab'			=>		'',
				'module'		=>		'doctor',
				'subtab'		=>		'',
				'submodule'	=>		''));
			// user restriction function
				$this->session->set_userdata('page_name','lab_sample_view');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function
			$this->data['message'] = $this->session->flashdata('message');

			$this->data['lab_test_info'] = $this->lab_model->get_lab_sample_test_single($id);
			
			$this->load->view('app/lab/view_lab_sample_report',$this->data);
		}
		public function edit_lab_sample_report($id=0)
		{
			$this->session->set_userdata(array(
				'tab'			=>		'',
				'module'		=>		'doctor',
				'subtab'		=>		'',
				'submodule'	=>		''));
			// user restriction function
				$this->session->set_userdata('page_name','lab_sample_modify');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function
			$this->data['message'] = $this->session->flashdata('message');

			$this->data['lab_test_info'] = $this->lab_model->get_lab_sample_test_single($id);
			
			$this->load->view('app/lab/edit_lab_sample_report',$this->data);
		}
		public function lab_sample_test_update()
		{
			
			$this->data = array(
				'lab_test_name'		=>		$this->input->post('sample_test_name'),
				'updated_date_by_lab'		=>		date("Y-m-d h:i:s a"),
				'updated_by_lab'		=>		$this->session->userdata('user_id')
			);
			$this->load->library('upload');

			/*********************Start Lab Test Report code*********************/
			// $images = array();
			if (!empty($_FILES["previous_dischargefile"]["name"])) {
				$images = array();
				for($i=0;$i<count($_FILES['previous_dischargefile']['name']);$i++){
					
					$_FILES['file']['name'] = $_FILES['previous_dischargefile']['name'][$i];
					$_FILES['file']['type'] = $_FILES['previous_dischargefile']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['previous_dischargefile']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['previous_dischargefile']['error'][$i];
					$_FILES['file']['size'] = $_FILES['previous_dischargefile']['size'][$i];
					
					$config['upload_path'] = realpath('public/lab_test_report'); 
					$config['allowed_types'] = '*';
					$config['max_size'] = 0;
          //$config['file_name'] = rand()."".$_FILES['files']['name'][$i];
					$config['file_name'] = $_FILES['previous_dischargefile']['name'][$i];
					
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('file')){
						$uploadData = $this->upload->data();
            //$filename = $uploadData['file_name'];
						$images[] = $uploadData['file_name'];      
						
					}
					
				}
				if(!empty($images)){
				
				$this->data['lab_test_reports']=implode(',',$images);
			}
			}
			/*********************End Lab Test Report code*********************/
			
			$this->db->where("io_lab_id",$this->input->post('sample_test_id'));
			$this->db->update("iop_laboratory",$this->data);

			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Sample test reports updated successfully!</div>");
			redirect(base_url('app/lab/lab_sample_test_list'));

		}
		
		
		
	}