<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'controllers/General.php'; 

class Nurse_module extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		$this->load->model("app/billing_model");
		$this->load->model("app/ipd_model");
		$this->load->model("app/opd_model");
		$this->load->model("app/doctor_model");
		$this->load->model("app/General_model");
		$this->load->model("app/patient_model");
		if(General::is_logged_in() == FALSE){
            redirect(base_url().'login');    
        }
		General::variable();	
	}
	/*********************Start Medication*********************/
	public function medications(){
	
		$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_medication',
				 'subtab'		=>		'',
				 'submodule'	=>		''));

				// user restriction function
				$this->session->set_userdata('page_name','nurse_medication_reports');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		 
				 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->doctor_model->getAll2($this->limit, $offset);
// 		print_r($patient);die;
		$config['base_url'] = base_url().'app/nurse_module/medications/';
 		$config['total_rows'] = $this->doctor_model->count_all2();
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
		$this->table->set_heading('Member No','Member Name','Date Admit','Member Type','Room & Bed No.','Incharge Doctor','Status');
// 		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				if($patient->nStatus == "Pending"){ 
					$nStatus = "Admitted";
				}else{ 
					$nStatus = "Discharged";
				}
				
				$this->table->add_row( 
									// anchor('app/ipd/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->IO_ID),
									anchor('app/nurse_module/medication/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." Bed No.".$patient->bed_name, 
									$patient->doctor,
									$nStatus
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
		$this->load->view('app/nurse_module/ipd',$this->data);	
	}
		public function medication(){
			
			// user restriction function
				$this->session->set_userdata('page_name','nurse_medication_reports');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
			
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_medication',
				 'subtab'		=>		'',
				 'submodule'	=>		''));

		
			
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			
			$this->data['message'] = $this->session->flashdata('message');
			$this->data['medicineCategory'] = $this->opd_model->medicineCategory();
			$this->data['patientMedication'] = $this->opd_model->patientMedication($iop_no);
			$this->data['medicinechart'] = $this->opd_model->medicinechart($iop_no);
			$this->data['medicine_chart'] = $this->opd_model->medicine_chart($iop_no);
			$this->data['given_medicine_chart'] = $this->opd_model->given_medicine_chart($iop_no);
			
			$this->load->view("app/nurse_module/medication",$this->data);	
	}
	/*********************End Medication*********************/
	
	/*public function medication(){
		
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			//delete session for abc
			// echo "hiii";die;
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			// print_r($this->data['patientInfo']);die;
			$this->data['message'] = $this->session->flashdata('message');
			$this->data['medicineCategory'] = $this->opd_model->medicineCategory();
			$this->data['patientMedication'] = $this->opd_model->patientMedication($iop_no);
			$this->data['medicinechart'] = $this->opd_model->medicinechart($iop_no);
			$this->data['medicine_chart'] = $this->opd_model->medicine_chart($iop_no);
			$this->data['given_medicine_chart'] = $this->opd_model->given_medicine_chart($iop_no);
			// print_r($this->data['patientMedication']);die;
			$this->load->view("app/nurse_module/medication",$this->data);	
		}else{
				// user restriction function
				// echo "hello";die;
				$this->session->set_userdata('page_name','nurse_medication_reports');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
			
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_medication',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Member Medication";
			$this->data['module'] = "medication";
			// print_r($this->data);die;
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}*/
	
	public function save_medication(){
		
		$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'medicine_id'	=>		$this->input->post('drug_name'),
			'instruction'	=>		$this->input->post('instruction'),
			'advice'		=>		$this->input->post('advice'),
			'days'			=>		$this->input->post('nDays'),
			'total_qty'		=>		$this->input->post('qty'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'dDate'			=>		date("Y-m-d h:i:s A"),
			'InActive'		=>		0
		);
		$this->db->insert("iop_medication",$this->data);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medication successfully Added!</div>");
		
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
	public function save_medication_chart(){
		 // print_r($_POST);die;
		foreach($_POST['dose'] as $key=>$row){
			foreach($row as $r){
				/*echo "Medicine id = ".$_POST['medicine_id'][$key];
				echo "iop id = ".$_POST['iop_id'][$key];
				echo "Dosage = ".$r;
				echo "<br>";*/
			}
			$dose2=@implode(",",$_POST['dose'][$key]);
			/***********Start code for add dosewise nurse name***********/
			 										$ci_obj = & get_instance();
												$ci_obj->load->model('app/general_model');
												$pages = $ci_obj->general_model->getPreparedBy($this->session->userdata('user_id'));
												
			for($sd_i=0;$sd_i<count($_POST['dose'][$key]);$sd_i++)
			{
			if($_POST['dose'][$key][$sd_i]=="M")
			{
				$mor_nurse=$pages->cPreparedBy;
			}
			if($_POST['dose'][$key][$sd_i]=="A")
			{
				$afternoon_nurse=$pages->cPreparedBy;
			}
			if($_POST['dose'][$key][$sd_i]=="N")
			{
				$night_nurse=$pages->cPreparedBy;
			}		
			}
			/***********End code for add dosewise nurse name***********/
		
			$where = "(
		iop_med_id= '".$_POST['medicine_id'][$key]."' and
		added_date like '%".date("Y-m-d")."%' 
		) 
		and InActive = 0";
		$this->db->where($where);
		$query = $this->db->get("iop_nurse_medicine");
		
		if($query->num_rows() > 0)
		{
			$this->data = array(
			 'dose'	=>		$dose2,
			 'mor_nurse'	=>		$mor_nurse,
			 'afternoon_nurse'	=>		$afternoon_nurse,
			 'night_nurse'	=>		$night_nurse,
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'updated_date'			=>		date("Y-m-d h:i:s A"),
		);

		$id=array('iop_med_id'=>$_POST['medicine_id'][$key],'iop_id'=>$_POST['iop_id'][$key],'given_date'=>date("Y-m-d"));
		$this->db->update('iop_nurse_medicine',$this->data,$id);
		}
		else{
			
			$this->data = array(
			'iop_id'		=>		$_POST['iop_id'][$key],
			'iop_med_id'		=>		$_POST['medicine_id'][$key],
			 'dose'	=>		$dose2,
			 'mor_nurse'	=>		$mor_nurse,
			 'afternoon_nurse'	=>		$afternoon_nurse,
			 'night_nurse'	=>		$night_nurse,
			 'given_date'			=>		date("Y-m-d h:i:s A"),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'added_date'			=>		date("Y-m-d h:i:s A"),
			'InActive'		=>		0
		);
			$this->db->insert("iop_nurse_medicine",$this->data);

		}
			
		}
		
		//die;
		//$iop_no = $this->input->post('iop_no');
		/*********************Start for mon*********************/
		/*foreach ($_POST as $k => $v) {

		if (strstr($k, 'monm_')) {
			$k = str_replace("monm_", "", $k);
			$k = str_replace("_", " ", $k);
			if ($v == 1) {
				$this->db->query("UPDATE medicine_" . date("Y") . " SET monm = 1 WHERE med_name = '$k' AND patient_no = '$iop_no' AND InActive = 0");
			}
		}
		
		if (strstr($k, 'mona_')) {
			$k = str_replace("mona_", "", $k);
			$k = str_replace("_", " ", $k);
			if ($v == 1) {
				$this->db->query("UPDATE medicine_" . date("Y") . " SET mona = 1 WHERE med_name = '$k' AND patient_no = '$iop_no' AND InActive = 0");
			}
		}
		
		if (strstr($k, 'monn_')) {
			$k = str_replace("monn_", "", $k);
			$k = str_replace("_", " ", $k);
			if ($v == 1) {
				$this->db->query("UPDATE medicine_" . date("Y") . " SET monn = 1 WHERE med_name = '$k' AND patient_no = '$iop_no' AND InActive = 0");
			}
		}

		}*/
		/*********************End for mon*********************/
		/*$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'medicine_id'	=>		$this->input->post('drug_name'),
			'instruction'	=>		$this->input->post('instruction'),
			'advice'		=>		$this->input->post('advice'),
			'days'			=>		$this->input->post('nDays'),
			'total_qty'		=>		$this->input->post('qty'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'dDate'			=>		date("Y-m-d h:i:s A"),
			'InActive'		=>		0
		);
		$this->db->insert("iop_medication",$this->data);*/
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medication successfully Added!</div>");
		
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
	
	public function delete_medication(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_medication set InActive = 1 where iop_med_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medication successfully Deleted!</div>");
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/medication/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	
	
	
	
	/*********************Start Input/Output Record*********************/
	public function intake_outputs(){
	
		$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_intake_output',
				 'subtab'		=>		'',
				 'submodule'	=>		''));

				// user restriction function
				$this->session->set_userdata('page_name','nurse_intake_output_reports');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		 
				 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->doctor_model->getAll2($this->limit, $offset);
// 		print_r($patient);die;
		$config['base_url'] = base_url().'app/nurse_module/intake_outputs/';
 		$config['total_rows'] = $this->doctor_model->count_all2();
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
		$this->table->set_heading('Member No','Member Name','Date Admit','Member Type','Room & Bed No.','Incharge Doctor','Status');
// 		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				if($patient->nStatus == "Pending"){ 
					$nStatus = "Admitted";
				}else{ 
					$nStatus = "Discharged";
				}
				
				$this->table->add_row( 
									// anchor('app/ipd/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->IO_ID),
									anchor('app/nurse_module/intake_output/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." Bed No.".$patient->bed_name, 
									$patient->doctor,
									$nStatus
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
		$this->load->view('app/nurse_module/ipd',$this->data);	
	}
		public function intake_output(){

			// user restriction function
				$this->session->set_userdata('page_name','nurse_intake_output_reports');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_intake_output',
				 'subtab'		=>		'',
				 'submodule'	=>		''));

		
			
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			// print_r($this->data['patientInfo']);die;
			$this->data['message'] = $this->session->flashdata('message');
			$this->data['medicineCategory'] = $this->opd_model->medicineCategory();
			$this->data['patientMedication'] = $this->opd_model->patientMedication($iop_no);
		
			$this->data['getIntake'] = $this->ipd_model->getIntake($iop_no);
			$this->data['getOutput'] = $this->ipd_model->getOutput($iop_no);
		
			$this->load->view("app/nurse_module/intake_output",$this->data);
	}
	/*********************End Start Input/Output Record*********************/
	
	
	/*public function intake_output(){
		
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			// print_r($this->data['patientInfo']);die;
			$this->data['message'] = $this->session->flashdata('message');
			$this->data['medicineCategory'] = $this->opd_model->medicineCategory();
			$this->data['patientMedication'] = $this->opd_model->patientMedication($iop_no);
		
			$this->data['getIntake'] = $this->ipd_model->getIntake($iop_no);
			$this->data['getOutput'] = $this->ipd_model->getOutput($iop_no);
		
			$this->load->view("app/nurse_module/intake_output",$this->data);
		}else{
				// user restriction function
				$this->session->set_userdata('page_name','nurse_intake_output_reports');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_intake_output',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Patient Intake/Output Record";
			$this->data['module'] = "intake_output";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
			
	}*/
	
	public function save_intake(){
		$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'particulars'	=>		$this->input->post('particular'),
			'IV_fluids'		=>		$this->input->post('fluids'),
			'oral'			=>		$this->input->post('oral'),
			'no_stool'		=>		!empty($this->input->post('no_stool')) ? $this->input->post('no_stool') : '',
			'no_urine'		=>		!empty($this->input->post('no_urine')) ? $this->input->post('no_urine') : '',
			'dDate'			=>		$this->input->post('dDate'),
			'dDateTime'		=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);	
		$this->db->insert("iop_intake_record",$this->data);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Intake Record successfully Added!</div>");
		
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/intake_output/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	public function save_output(){
		$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'urine'			=>		$this->input->post('urine'),
			'stool'		=>		!empty($this->input->post('no_stool')) ? $this->input->post('no_stool') : '',
			'remark'		=>		!empty($this->input->post('remark')) ? $this->input->post('remark') : '',
			'feaces'		=>		!empty($this->input->post('feaces')) ? $this->input->post('feaces') : '',
			'respitation'	=>		!empty($this->input->post('respitation')) ? $this->input->post('respitation') : '',
			'skin'			=>		!empty($this->input->post('skin')) ? $this->input->post('skin') : '',
			'dDate'			=>		$this->input->post('dDate2'),
			'dDateTime'		=>		$this->input->post('dDate2')." ".$this->input->post('cTime2'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);	
		$this->db->insert("iop_output_record",$this->data);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Output Record successfully Added!</div>");
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/intake_output/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	public function delete_intake(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_intake_record set InActive = 1 where intake_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Intake Record successfully Deleted!</div>");
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/intake_output/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function delete_output(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_output_record set InActive = 1 where output_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Output Record successfully Deleted!</div>");
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/intake_output/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	
	
	
	
	/*********************Start nurse progress note*********************/
	public function nurse_progress_notes(){
	
		$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 /*'module'		=>		'ipd_doctor',*/
				 'subtab'		=>		'',
				 'submodule'	=>		''));

				// user restriction function
				$this->session->set_userdata('page_name','nurse_progress_note_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		 
				 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->doctor_model->getAll2($this->limit, $offset);
// 		print_r($patient);die;
		$config['base_url'] = base_url().'app/nurse_module/nurse_progress_notes/';
 		$config['total_rows'] = $this->doctor_model->count_all2();
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
		$this->table->set_heading('Member No','Member Name','Date Admit','Member Type','Room & Bed No.','Incharge Doctor','Status');
// 		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				if($patient->nStatus == "Pending"){ 
					$nStatus = "Admitted";
				}else{ 
					$nStatus = "Discharged";
				}
				
				$this->table->add_row( 
									// anchor('app/ipd/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->IO_ID),
									anchor('app/nurse_module/nurse_progress_note/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." Bed No.".$patient->bed_name, 
									$patient->doctor,
									$nStatus
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
		$this->load->view('app/nurse_module/ipd',$this->data);	
	}
		public function nurse_progress_note(){

			// user restriction function
				$this->session->set_userdata('page_name','nurse_progress_note_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_progress_note',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->data['getNurseProgressNote'] = $this->opd_model->getNurseProgressNote($iop_no);
			$this->load->view("app/nurse_module/nurse_progress_note",$this->data);	
	}
	/*********************End nurse progress note*********************/
	
	/*public function nurse_progress_note(){
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
			
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->data['getNurseProgressNote'] = $this->opd_model->getNurseProgressNote($iop_no);
			$this->load->view("app/nurse_module/nurse_progress_note",$this->data);	
			
		}else{
			// user restriction function
				$this->session->set_userdata('page_name','nurse_progress_note_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_progress_note',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Patient Nurse Progress Note";
			$this->data['module'] = "nurse_progress_note";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}*/
	
	public function save_nurse_progress_note(){
			$this->data = array(
				'iop_id'		=>		$this->input->post('opd_no'),
				'dDate'			=>		$this->input->post('dDate'),
				'dDateTime'		=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
				'focus'			=>		$this->input->post('focus'),
				'notes'			=>		$this->input->post('notes'),
				'cPreparedBy'	=>		$this->session->userdata('user_id'),
				'InActive'		=>		0
			);
			$this->db->insert('iop_nurse_notes',$this->data);
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Notes successfully Added!</div>");
			$this->session->set_userdata("abc","1");
			redirect(base_url().'app/nurse_module/nurse_progress_note/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	public function delete_nurse_progress(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_nurse_notes set InActive = 1 where nurse_notes_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Notes successfully Deleted!</div>");
		
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/nurse_progress_note/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function drug_chart(){
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
			
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->data['getDrugChart'] = $this->opd_model->getDrugChart($iop_no);
			$this->load->view("app/nurse_module/drug_chart",$this->data);	
			
		}else{
			// user restriction function
				$this->session->set_userdata('page_name','nurse_progress_note_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'drug_chart',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Patient Drug Chart";
			$this->data['module'] = "drug_chart";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}
	public function save_drug_chart(){
			$this->data = array(
				'iop_id'		=>		$this->input->post('opd_no'),
				'dDate'			=>		$this->input->post('dDate'),
				'dDateTime'		=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
				'drug'			=>		$this->input->post('drug'),
				'morning'			=>		$this->input->post('morning'),
				'afternoon'			=>		$this->input->post('afternoon'),
				'night'			=>		$this->input->post('night'),
				'cPreparedBy'	=>		$this->session->userdata('user_id'),
				'InActive'		=>		0
			);
			$this->db->insert('iop_drug_chart',$this->data);
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Drug successfully Added!</div>");
			$this->session->set_userdata("abc","1");
			redirect(base_url().'app/nurse_module/drug_chart/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	public function delete_drug_chart(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_drug_chart set InActive = 1 where drug_chart_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Drug successfully Deleted!</div>");
		
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/drug_chart/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	
	
	
	
	
	/*********************Start vital sign*********************/
	public function vitalSigns(){
	
		$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_vital_sign',
				 'subtab'		=>		'',
				 'submodule'	=>		''));

				// user restriction function
				$this->session->set_userdata('page_name','nurse_vital_sign_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		 
				 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->doctor_model->getAll2($this->limit, $offset);
// 		print_r($patient);die;
		$config['base_url'] = base_url().'app/nurse_module/vitalSigns/';
 		$config['total_rows'] = $this->doctor_model->count_all2();
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
		$this->table->set_heading('Member No','Member Name','Date Admit','Member Type','Room & Bed No.','Incharge Doctor','Status');
// 		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				if($patient->nStatus == "Pending"){ 
					$nStatus = "Admitted";
				}else{ 
					$nStatus = "Discharged";
				}
				
				$this->table->add_row( 
									// anchor('app/ipd/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->IO_ID),
									anchor('app/nurse_module/vitalSign/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." Bed No.".$patient->bed_name, 
									$patient->doctor,
									$nStatus
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
		$this->load->view('app/nurse_module/ipd',$this->data);	
	}
		public function vitalSign(){

			// user restriction function
				$this->session->set_userdata('page_name','nurse_vital_sign_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function	
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_vital_sign',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
			$this->data['getVital'] = $this->opd_model->getVital($iop_no);
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/nurse_module/vitalSign",$this->data);	
	}
	/*********************End vital sign*********************/
	
	
	
/*	public function vitalSign(){
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
			$this->data['getVital'] = $this->opd_model->getVital($iop_no);
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/nurse_module/vitalSign",$this->data);	
			
		}else{
			// user restriction function
				$this->session->set_userdata('page_name','nurse_vital_sign_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function	
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_vital_sign',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Patient Vital Sign";
			$this->data['module'] = "vitalSign";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}*/
	
	public function save_vitalSign(){
		$this->data = array(
				'iop_id'		=>		$this->input->post('opd_no'),
				'dDate'			=>		$this->input->post('dDate'),
				'dDateTime'		=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
				'pulse_rate'	=>		$this->input->post('pulse_rate'),
				'temperature'	=>		$this->input->post('temperature'),
				'spo2'	=>		$this->input->post('spo2'),
				'height'		=>		$this->input->post('height'),
				'bp'			=>		$this->input->post('bp'),
				'respiration'	=>		$this->input->post('respiration'),
				'bsl_type'	=>		$this->input->post('bsl_type'),
				'bsl'		=>		!empty($this->input->post('bsl')) ? $this->input->post('bsl') :'',
				'weight'		=>		$this->input->post('weight'),
				'cPreparedBy'	=>		$this->session->userdata('user_id'),
				'InActive'		=>		0
			);
			$this->db->insert('iop_vital_parameters',$this->data);
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Vital Parameters successfully Added!</div>");
			
			$this->session->set_userdata("abc","1");
			//redirect
			redirect(base_url().'app/nurse_module/vitalSign/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);	
	}
	
	public function delete_vital(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Vital Parameters successfully Deleted!</div>");
		
		$this->db->query("update iop_vital_parameters set InActive = 1 where vital_id = ".$id);
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/vitalSign/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	
	
	
	
	/*********************Start room transfer*********************/
	public function room_transfers(){
	
		$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_room_transfer',
				 'subtab'		=>		'',
				 'submodule'	=>		''));

				// user restriction function
				$this->session->set_userdata('page_name','nurse_room_transfer_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		 
				 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->doctor_model->getAll2($this->limit, $offset);
// 		print_r($patient);die;
		$config['base_url'] = base_url().'app/nurse_module/room_transfers/';
 		$config['total_rows'] = $this->doctor_model->count_all2();
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
		$this->table->set_heading('Member No','Member Name','Date Admit','Member Type','Room & Bed No.','Incharge Doctor','Status');
// 		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				if($patient->nStatus == "Pending"){ 
					$nStatus = "Admitted";
				}else{ 
					$nStatus = "Discharged";
				}
				
				$this->table->add_row( 
									// anchor('app/ipd/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->IO_ID),
									anchor('app/nurse_module/room_transfer/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." Bed No.".$patient->bed_name, 
									$patient->doctor,
									$nStatus
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
		$this->load->view('app/nurse_module/ipd',$this->data);	
	}
		public function room_transfer(){

			// user restriction function
				$this->session->set_userdata('page_name','nurse_room_transfer_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function	
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_room_transfer',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
			$this->data['message'] = $this->session->flashdata('message');
			
			$this->data['room_transfer'] = $this->ipd_model->room_transfer($iop_no);
			
			$this->data['particular_cat'] = $this->billing_model->particular_cat();
			$this->data['medicine_cat'] = $this->billing_model->medicine_cat();
			
			$this->data['getOperationTheater'] = $this->opd_model->getOperationTheater($iop_no);
			$this->data['room_category'] = $this->General_model->room_category();
		
			$this->load->view("app/nurse_module/room_transfer",$this->data);	
	}
	/*********************End room transfer*********************/
	
/*	public function room_transfer(){
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
			$this->data['message'] = $this->session->flashdata('message');
			
			$this->data['room_transfer'] = $this->ipd_model->room_transfer($iop_no);
			
			$this->data['particular_cat'] = $this->billing_model->particular_cat();
			$this->data['medicine_cat'] = $this->billing_model->medicine_cat();
			
			$this->data['getOperationTheater'] = $this->opd_model->getOperationTheater($iop_no);
			$this->data['room_category'] = $this->General_model->room_category();
		
			$this->load->view("app/nurse_module/room_transfer",$this->data);	
			
		}else{
			// user restriction function
				$this->session->set_userdata('page_name','nurse_room_transfer_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function	
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_room_transfer',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Patient Room transfer";
			$this->data['module'] = "room_transfer";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}*/
	
	public function save_room_transfer(){
		$this->data = array(
				'iop_id'				=>		$this->input->post('opd_no'),
				'dDate'					=>		$this->input->post('dDate'),
				'dDateTime'				=>		$this->input->post('dDate')." ".$this->input->post('dTime'),
				'room_category_id'		=>		$this->input->post('roomType'),
				'room_master_id'		=>		$this->input->post('room_name'),
				'bed_id'				=>		$this->input->post('bed_name'),
				'reason'				=>		$this->input->post('reason'),
				'cPreparedBy'			=>		$this->session->userdata('user_id'),
				'InActive'				=>		0
			);
			$this->db->insert('iop_room_transfer',$this->data);
			/********************* Start update room bed*********************/
			$this->db->where(array("patient_no"=>$this->input->post('opd_no'), 'InActive' => 0));
			$this->db->update('room_beds',array('nStatus'=>'Vacant','patient_no'=>''));

			$this->db->where(array("room_master_id"=>$this->input->post('room_name'),"room_bed_id"=>$this->input->post('bed_name'), 'InActive' => 0));
			$this->db->update('room_beds',array('nStatus'=>'Occupied','patient_no'=>$this->input->post('opd_no')));

			/*********************End update room bed*********************/

			/*********************Start update patient detail iop*********************/
			$this->db->where(array("patient_no"=>$this->input->post('patient_no'), 'InActive' => 0));
			$this->db->update('patient_details_iop',array('room_id'=>$this->input->post('bed_name')));

			/*********************End update patient detail iop*********************/
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Patient successfully Transfered!</div>");
			
			$this->session->set_userdata("abc","1");
			redirect(base_url().'app/nurse_module/room_transfer/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	public function delete_room_transfer(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_room_transfer set InActive = 1 where transfer_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Room successfully Deleted!</div>");
		
		$this->session->set_userdata("abc","1");
		redirect(base_url().'app/nurse_module/room_transfer/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	
	
	
	
	
	
	
	
	public function patientHistory(){
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/nurse_module/patientHistory",$this->data);	
			
		}else{
			// user restriction function
				$this->session->set_userdata('page_name','nurse_patientHistory_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function	
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_patientHistory',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Patient History";
			$this->data['module'] = "patientHistory";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}
	
	public function save_patientHistory(){
		$iop_no = $this->input->post('opd_no');
		$patient_no = $this->input->post('patient_no');
		
		$this->data = array(
			'allergies'				=>	$this->input->post('allergies'),
			'warnings'				=>	$this->input->post('warnings'),
			'social_history'		=>	$this->input->post('social_history'),
			'family_history'		=>	$this->input->post('family_history'),
			'personal_history'		=>	$this->input->post('personal_history'),
			'past_medical_history'	=>	$this->input->post('past_medical_history')
		);
		$this->db->where("IO_ID",$iop_no);
		$this->db->update("patient_details_iop",$this->data);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Patient History successfully Updated!</div>");
			
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);	
			
		$this->session->set_userdata("abc","1");	
		//redirect
		redirect(base_url().'app/nurse_module/patientHistory/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	
	
	
	
	
	
	
	
	
	public function discharge_summary(){
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['get_discharge_summary'] = $this->opd_model->get_discharge_summary($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
			$this->data['getConditionDis'] = $this->General_model->getConditionDis();
			$this->data['message'] = $this->session->flashdata('message');
		
		
			$this->load->view("app/nurse_module/discharge_summary",$this->data);	
			
		}else{
			// user restriction function
				$this->session->set_userdata('page_name','nurse_discharge_summary_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function	
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_discharge_summary',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Member Discharge Summary";
			$this->data['module'] = "discharge_summary";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}
	
	public function save_discharge_summary(){
		$this->db->query("delete from iop_discharge_summary where iop_id = '".$this->input->post('opd_no')."'");
		
		$this->data = array(
			'iop_id'					=>		$this->input->post('opd_no'),
			'dDate'						=>		date("Y-m-d"),
			'dDateTime'					=>		date("Y-m-d h:i:s"),
			'reason_admission'			=>		$this->input->post('reason_admission'),
			'condition_upon_discharge'	=>		$this->input->post('condition'),
			'admitting_impression'		=>		$this->input->post('admitting_impression'),
			'final_diagnosis'			=>		$this->input->post('final_diagnosis'),
			'physical_exam_findings'	=>		$this->input->post('physical_exam_findings'),
			'course_ward'				=>		$this->input->post('course_ward'),
			'InActive'					=>		0
		);
		//$this->db->where("iop_id",$this->input->post('opd_no'));
		$this->db->insert("iop_discharge_summary",$this->data);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Discharge summary successfully Added!</div>");
		$this->session->set_userdata("abc","1");	
		redirect(base_url().'app/nurse_module/discharge_summary/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	
	
	
	public function bed_side_procedure(){
		
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
		
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			$this->data['message'] = $this->session->flashdata('message');
			$this->data['getServices'] = $this->opd_model->getServices($iop_no);
			
			$this->data['particular_cat'] = $this->billing_model->particular_cat();
			
			$this->load->view("app/nurse_module/bed_side_procedure",$this->data);			
			
		}else{
			// user restriction function
				$this->session->set_userdata('page_name','nurse_bed_side_procedure_report');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function	
				
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_bed_side',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Patient Bed Side Procedure";
			$this->data['module'] = "bed_side_procedure";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}
	
	public function save_bed_side_procedure(){
			$this->data = array(
				'iop_id'				=>		$this->input->post('opd_no'),
				'dDate'					=>		date("Y-m-d"),
				'dDateTime'				=>		date("Y-m-d h:i:s A"),
				'cItem_id'				=>		$this->input->post('particular'),
				'qty'					=>		$this->input->post('qty'),
				'notes'					=>		$this->input->post('remarks'),
				'cPreparedBy'			=>		$this->session->userdata('user_id'),
				'InActive'				=>		0
			);
			$this->db->insert('iop_bed_side_procedure',$this->data);
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Bed Side Procedure successfully Saved!</div>");
		
			$this->session->set_userdata("abc","1");	
			redirect(base_url().'app/nurse_module/bed_side_procedure/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	public function delete_bed_side(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_bed_side_procedure set InActive = 1 where bed_pro_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Bed Side Procedure successfully Deleted!</div>");
		
		redirect(base_url().'app/nurse_module/bed_side_procedure/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	
	
	public function diagnosis(){
		
		if(isset($_POST['btnSubmit']) || $this->session->userdata("abc") == "1"){
			//delete session for abc
			$this->session->set_userdata("abc","");	
			//set if post is null
			if($this->input->post("iop_no") == "" && $this->input->post("patient_no") == ""){
				$iop_no = $this->uri->segment("4");
				$patient_no = $this->uri->segment("5");
			}else{
				$iop_no = $this->input->post("iop_no");
				$patient_no = $this->input->post("patient_no");
			}
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		
			$this->data['message'] = $this->session->flashdata('message');
			
			$this->data['medicineCategory'] = $this->opd_model->medicineCategory();
			$this->data['patientMedication'] = $this->opd_model->patientMedication($iop_no);
		
			$this->load->view("app/nurse_module/diagnosis",$this->data);	
		}else{
				// user restriction function
				$this->session->set_userdata('page_name','nurse_diagnosis_reports');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
			
			$this->session->set_userdata(array(
				 'tab'			=>		'nurse_module',
				 'module'		=>		'nurse_diagnosis',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
			
			$this->data['module_title'] = "Patient Diagnosis";
			$this->data['module'] = "diagnosis";
			$this->load->view("app/nurse_module/pick",$this->data);	
		}
	}
	
	
	
	
	
	
	
	
	
}