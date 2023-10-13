<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';      
use Dompdf\Dompdf;

require APPPATH.'controllers/General.php'; 

class Doctor extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		$this->load->model("app/opd_model");
		$this->load->model("app/doctor_model");
		$this->load->model("app/preassessment_model");
		$this->load->model("General_model");
		if(General::is_logged_in() == FALSE){
            redirect(base_url().'login');    
        }
		General::variable();	
		
	}
	
	public function opd($offset = 0){
				 
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'opd_doctor',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 
				// user restriction function
				$this->session->set_userdata('page_name','doctor_opd');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		 
				 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->doctor_model->getAll($this->limit, $offset);
		
		$config['base_url'] = base_url().'app/doctor/opd/';
 		$config['total_rows'] = $this->doctor_model->count_all();
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
		$this->table->set_heading('OPD No','Member No','Member Name','Age','Visit Date Time','Department','Consultant Doctor');
		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				
				$this->table->add_row( 
									anchor('app/opd/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->IO_ID),
									anchor('app/patient/view/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									$patient->age, 
									date('M d, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->dept_name, 
									$patient->doctor
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();

		$this->load->view('app/doctor/opd',$this->data);	
	}
	public function preassessment_list($offset = 0){
				 
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'ipd_doctor',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 
				// user restriction function
				$this->session->set_userdata('page_name','ipd_doctor');
				/*$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}*/
				// end of user restriction function		 
				 
				 //print_r($this->session->userdata());die;
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->doctor_model->get_preassesment($this->limit, $offset);
// 		print_r($patient);die;
		$config['base_url'] = base_url().'app/doctor/preassessment_list/';
 		$config['total_rows'] = $this->doctor_model->count_all_preassessment();
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
		$this->table->set_heading('Preassessment No','Preassessment Name','Email','Aadhar No','Gender','Age','Action');
// 		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				/*if($patient->nStatus == "Pending"){ 
					$nStatus = "Admitted";
				}else{ 
					$nStatus = "Discharged";
				}*/
				
				$this->table->add_row( 
									anchor('app/doctor/view_preassessment/'.$patient->preasses_id,$patient->preasses_no),
									$patient->preasses_name, 
									$patient->preasses_email, 
									$patient->preasses_aadhar,
									$patient->preasses_gender,  
									$patient->preasses_age,
									anchor('app/doctor/edit_preassessment/'.$patient->preasses_id,'Modify'),
									anchor('app/doctor/preassessment_report/'.$patient->preasses_id,'Pdf')
									
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
		$this->load->view('app/doctor/preassessment_list',$this->data);	
	}
	public function preassessment()
	{
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');
		
		$this->load->view('app/doctor/preassessment',$this->data);

			/*$dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled',TRUE);
            $canvas=$dompdf->get_canvas();
            //$this->load->view('app/ipd/discharge_pdf_view',$this->data);
            $html = $this->load->view('app/doctor/preassessment',$this->data,true);

            $dompdf->loadHtml($html);
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser
            $dompdf->stream('preassessment_report.pdf',array("Attachment" => 0));*/
	}
		public function add_preassessment()
	{
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['lastPreassesID'] = $this->preassessment_model->lastPreassesID();
		
		$this->load->view('app/doctor/add_preassessment',$this->data);
	}
	public function add_preassessment_new()
	{
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['lastPreassesID'] = $this->preassessment_model->lastPreassesID();
		
		$this->load->view('app/doctor/add_preassessment_new',$this->data);
	}
	public function add_preasses()
	{
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['lastPreassesID'] = $this->preassessment_model->lastPreassesID();
		
		$this->load->view('app/doctor/add_preasses',$this->data);
	}
		public function preassessment_save()
	{
	   
	    $medicine_name = $this->input->post('medicine_name', true);
	    $dose = $this->input->post('dose', true);
	    $frequency = $this->input->post('frequency', true);
	    $duration = $this->input->post('duration', true);

	    $doctor_name = $this->input->post('doctor_name', true);
	    $doctor_mobile = $this->input->post('doctor_mobile', true);
	    $doctor_email = $this->input->post('doctor_email', true);
	    $hospital_name = $this->input->post('hospital_name', true);

	    $chl_name = $this->input->post('chl_name', true);
	    $chl_add = $this->input->post('chl_add', true);
	    $chl_mobile = $this->input->post('chl_mobile', true);
	    $chl_email = $this->input->post('chl_email', true);
	    
	    
		$preassessment_details = array(
            'preasses_name' => $this->input->post('applicant_name'),
            'preasses_no' => $this->input->post('preasses_no'),
            'birthday' => $this->input->post('applicant_dob'),
            'preasses_age' => $this->input->post('applicant_age'),
            'preasses_gender' => $this->input->post('applicant_gender'),
            'preasses_religion' => $this->input->post('applicant_religion'),
            'preasses_marital_status' => $this->input->post('applicant_marital'),
            'preasses_add' => $this->input->post('applicant_add'),
            'preasses_mobile' => $this->input->post('applicant_mobile'),
            'preasses_email' => $this->input->post('applicant_email'),
            'preasses_aadhar' => $this->input->post('applicant_aadhar'),
            'head' => $this->input->post('head'),
            'neck' => $this->input->post('neck'),
            'ears' => $this->input->post('ears'),
            'hearing' => $this->input->post('hearing'),
            'hearing_aid' => $this->input->post('hearaid'),
            'nose' => $this->input->post('nose'),
            'throat' => $this->input->post('throat'),
            'eye' => $this->input->post('eye'),
            'vision' => $this->input->post('vision'),
            'spectacles' => $this->input->post('spectacles'),
            'cataract' => $this->input->post('cataract'),
            'glaucoma' => $this->input->post('glaucoma'),
            'oral_exam' => $this->input->post('oral'),
            'tumour' => $this->input->post('tumour'),
            'dental_exam' => $this->input->post('dental'),
            'dentures' => $this->input->post('dentures'),
            'tongue' => $this->input->post('tongue'),
            'skin' => $this->input->post('skin'),
            'potenchial' => $this->input->post('potechial'),
            'bruises' => $this->input->post('bruises'),
            'rashes' => $this->input->post('rashes'),
            'bed_sore' => $this->input->post('bed_sore'),
            'pedal_oedema' => $this->input->post('pedal_oedema'),
            'dvt' => $this->input->post('dvt'),
            'varicose_veins' => $this->input->post('varicose_veins'),
            'foot_exam' => $this->input->post('foot'),
            'diet' => $this->input->post('diet'),
            'habits' => $this->input->post('habits'),
            'exercise' => $this->input->post('exercise'),	
            'physiotherapy_service' => $this->input->post('physiotherapy'),
            'temp' => $this->input->post('temp'),
            'pulse' => $this->input->post('pulse'),
            'bp' => $this->input->post('bp'),
            'rr' => $this->input->post('rr'),
            'spo2' => $this->input->post('spo2'),
            'appearance' => $this->input->post('appearance'),
            'rs' => $this->input->post('respirate_sys'),
            'cardiovascular_sys' => $this->input->post('cardiovascular_sys'),
            'gastrointestinal_sys' => $this->input->post('gastrointestinal_sys'),
            'genito_urinary_sys' => $this->input->post('genito_urinary_sys'),
            'neurological_sys' => $this->input->post('neurological_sys'),
            'drug_name' => $this->input->post('drug'),
            'food' => $this->input->post('food'),
            'any_other' => $this->input->post('any_other'),
            'last_taken_medicine_date' => $this->input->post('last_taken_medicine_date'),
            'total_no_of_error' => $this->input->post('total_no_error'),
            'clock_score' => $this->input->post('clock_score'),
            'clock_remark' => $this->input->post('clock_remark'),
            'geriatric_score' => $this->input->post('geriatric_score'),
            'geriatric_remark' => $this->input->post('geriatric_remark'),
            'time_up_go_score' => $this->input->post('time_test_score'),
            'chair_stand_score' => $this->input->post('chair_stand_score'),
            'musculoskeletal_sys' => $this->input->post('musculoskeletal_sys'),
            'doctor_observation' => $this->input->post('doctor_observation'),
            'entry_datetime'		=>	 date("Y-m-d h:i:s a"),
            'recommendation' => $this->input->post('recommendation'),
            'ptn_eligible' => $this->input->post('ptn_eligible'),
            'on_admission'=>"No",
            'added_by' => $this->session->userdata('user_id'),
        	'date_entry'		=>	 date("Y-m-d h:i:s a"));

			if(@$this->input->post('drug')=="Yes")
			{
				$preassessment_details['drug_namefld']=$this->input->post('drugfld');
			}
			if(@$this->input->post('food')=="Yes")
			{
				$preassessment_details['foodfld']=$this->input->post('foodfld');
			}
		$last_ptn_id = $this->preassessment_model->save_preassessment_details($preassessment_details);
		if($last_ptn_id)
		{
			//update preassessmentID autonumber();
			$this->preassessment_model->updateAutoNum();

		$family_details = array(
            'father' => $this->input->post('father_name'),
            'mother' => $this->input->post('mother_name'),
            'sublings' => $this->input->post('sublings_name'),
            'spouse_name' => $this->input->post('spouse_name'),
            'spouse_mobile' => $this->input->post('spouse_mobile'),
            'family_add' => $this->input->post('family_add'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_family_details($family_details);

		if(!empty($chl_name))
		{
		foreach ($chl_name as $chl_key => $chl_val) { // need index to match other properties
				$child_details = array(
					'chl_name' => $chl_val,
					'chl_add' => isset($chl_add[$chl_key]) ? $chl_add[$chl_key] : '',
					'chl_mobile' => isset($chl_mobile[$chl_key]) ? $chl_mobile[$chl_key] : '',
					'chl_email' => isset($chl_email[$chl_key]) ? $chl_email[$chl_key] : '',
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				
				$this->preassessment_model->child_details($child_details); 
			}
		}

		/*$child_details = array(
            'chl_name' => $this->input->post('chl_name'),
            'chl_add' => $this->input->post('chl_add'),
            'chl_mobile' => $this->input->post('chl_mobile'),
            'chl_email' => $this->input->post('chl_email'),
            'preasses_no' => $this->input->post('preasses_no'),
            'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_child_details($child_details);*/


		if(!empty($doctor_name))
		{
		foreach ($doctor_name as $key => $val) { // need index to match other properties
				$treating_doctor_details = array(
					'tdoctor_name' => $val,
					'tdoctor_mobile' => isset($doctor_mobile[$key]) ? $doctor_mobile[$key] : '',
					'tdoctor_email' => isset($doctor_email[$key]) ? $doctor_email[$key] : '',
					'hospital_name' => isset($hospital_name[$key]) ? $hospital_name[$key] : '',
					/*'appointment_poa' => $this->input->post('appointment_poa'),
		            'poa_name' => $this->input->post('poa_name'),
		            'poa_mobile' => $this->input->post('poa_mobile'),
		            'poa_email' => $this->input->post('poa_email'),
		            'diagnosis' => @implode(",",$this->input->post('diagnosis')),
            		'present_complaints' => $this->input->post('present_complaints'),
            		'past_history' => $this->input->post('past_history'),*/
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				
				$this->preassessment_model->treating_doctor_details($treating_doctor_details); 
			}
		}/*else{

			$treating_doctor_details = array(
            'appointment_poa' => $this->input->post('appointment_poa'),
            'poa_name' => $this->input->post('poa_name'),
            'poa_mobile' => $this->input->post('poa_mobile'),
            'poa_email' => $this->input->post('poa_email'),
            'tdoctor_name' => $this->input->post('doctor_name'),
            'tdoctor_mobile' => $this->input->post('doctor_mobile'),
            'tdoctor_email' => $this->input->post('doctor_email'),
            'hospital_name' => $this->input->post('hospital_name'),
            'diagnosis' => @implode(",",$this->input->post('diagnosis')),
            'present_complaints' => $this->input->post('present_complaints'),
            'past_history' => $this->input->post('past_history'),
            'preasses_no' => $this->input->post('preasses_no'),
            'preasses_id' => $last_ptn_id);
		$this->preassessment_model->treating_doctor_details($treating_doctor_details);

		}*/
		$guardian_details = array(
            'local_guardian_name' => $this->input->post('guardian_name'),
            'guardian_add' => $this->input->post('guardian_add'),
            'guardian_mobile' => $this->input->post('guardian_mobile'),
            'guardian_email' => $this->input->post('guardian_email'),
            'local_guardian_name2' => $this->input->post('guardian_name2'),
            'guardian_add2' => $this->input->post('guardian_add2'),
            'guardian_mobile2' => $this->input->post('guardian_mobile2'),
            'guardian_email2' => $this->input->post('guardian_email2'),
            'appointment_poa' => $this->input->post('appointment_poa'),
		    'poa_name' => $this->input->post('poa_name'),
		    'poa_mobile' => $this->input->post('poa_mobile'),
		    'poa_email' => $this->input->post('poa_email'),
		    'diagnosis' => @implode(",",$this->input->post('diagnosis')),
            'present_complaints' => $this->input->post('present_complaints'),
            'past_history' => $this->input->post('past_history'),
            'preasses_no' => $this->input->post('preasses_no'),
            'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_guardian_details($guardian_details);
		
		/*$treating_doctor_details = array(
            'appointment_poa' => $this->input->post('appointment_poa'),
            'poa_name' => $this->input->post('poa_name'),
            'poa_mobile' => $this->input->post('poa_mobile'),
            'poa_email' => $this->input->post('poa_email'),
            'tdoctor_name' => $this->input->post('doctor_name'),
            'tdoctor_mobile' => $this->input->post('doctor_mobile'),
            'tdoctor_email' => $this->input->post('doctor_email'),
            'hospital_name' => $this->input->post('hospital_name'),
            'diagnosis' => @implode(",",$this->input->post('diagnosis')),
            'present_complaints' => $this->input->post('present_complaints'),
            'past_history' => $this->input->post('past_history'),
            'preasses_no' => $this->input->post('preasses_no'),
            'preasses_id' => $last_ptn_id);
		$this->preassessment_model->treating_doctor_details($treating_doctor_details);*/

		if(!empty($medicine_name))
		{
		foreach ($medicine_name as $i => $a) { // need index to match other properties
				$ptn_med = array(
					'medicine' => $a,
					'dose' => isset($dose[$i]) ? $dose[$i] : '',
					'frequency' => isset($frequency[$i]) ? $frequency[$i] : '',
					'duration' => isset($duration[$i]) ? $duration[$i] : '',
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				
				$this->preassessment_model->save_med_details($ptn_med); 
			}
		}

		$psychological_cond_details = array(
            'aggression' => $this->input->post('aggression'),
            'Violence' => $this->input->post('Violence'),
            'bed_restrain' => $this->input->post('bed_restrain'),
            'wandering' => $this->input->post('wandering'),
            'sleep' => $this->input->post('sleep'),
            'giver_care' => $this->input->post('giver_care'),
            'diagnostic_test' => $this->input->post('diagnostic_test'),
            'typical_day_appl' => $this->input->post('typical_day_appl'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_psychological_cond_details($psychological_cond_details);

		$barthel_details = array(
            'bowels_score' => $this->input->post('bowels_score'),
            'bladder_score' => $this->input->post('bladder_score'),
            'toilet_score' => $this->input->post('toilet_score'),
            'bathing_score' => $this->input->post('bathing_score'),
            'grooming_score' => $this->input->post('grooming_score'),
            'dressing_score' => $this->input->post('dressing_score'),

            'feeding_score' => $this->input->post('feeding_score'),
            'transfer_score' => $this->input->post('transfer_score'),
            'mobility_score' => $this->input->post('mobility_score'),
            'stairs_score' => $this->input->post('stairs_score'),
            'total_barthel_score' => $this->input->post('barthel_total_score'),
            'InActive'			=>		0,
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_barthel_details($barthel_details);

		/*$questions = $this->input->post('questions', true);
		$answer = $this->input->post('answer', true);
	    $fallrisk_id = $this->input->post('fallrisk_id', true);

		if(!empty($questions))
		{
			
			
		foreach ($questions as $i => $a) { // need index to match other properties
				$qtn_ans_details = array(
					'questions' => $a,
					'answer' => isset($answer[$i]) ? $answer[$i] : ''
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$i]);
			}
		}*/

		for($qtn=1;$qtn<=13;$qtn++)
		{

			if($qtn=='1')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('past_year_qtn'),
					'answer' => $this->input->post('past_year'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='2')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('use_stick_qtn'),
					'answer' => $this->input->post('use_stick'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='3')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('feel_stable_qtn'),
					'answer' => $this->input->post('feel_stable'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='4')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('steady_holding_qtn'),
					'answer' => $this->input->post('steady_holding'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='5')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('worry_fall_qtn'),
					'answer' => $this->input->post('worry_fall'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='6')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('from_chair_qtn'),
					'answer' => $this->input->post('from_chair'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='7')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('curb_qtn'),
					'answer' => $this->input->post('curb'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='8')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('toilet_rush_qtn'),
					'answer' => $this->input->post('toilet_rush'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='9')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('lost_feet_qtn'),
					'answer' => $this->input->post('lost_feet'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='10')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('light_headed_qtn'),
					'answer' => $this->input->post('light_headed'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='11')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('take_medicine_qtn'),
					'answer' => $this->input->post('take_medicine'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='12')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('feel_sad_qtn'),
					'answer' => $this->input->post('feel_sad'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
			if($qtn=='13')
			{
				$qtn_ans_details = array(
					'questions' => $this->input->post('fall_total_score_qtn'),
					'answer' => $this->input->post('fall_total_score'),
					'InActive'			=>		0,
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $last_ptn_id
				);
				$this->preassessment_model->save_fallrisk_quest_details($qtn_ans_details);
			}
		}

		for($vac=1;$vac<=5;$vac++)
		{
			if($vac=='1')
			{
		$immunization_details = array(
            'vac_type' => 'Tetanus',
            'vac_name' => $this->input->post('tetanus_vac'),
            'given_date' => $this->input->post('tetanus_date'),
            'due_date' => $this->input->post('tetanus_due_date'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_immunization_details($immunization_details);
		}elseif($vac=='2')
		{
			$immunization_details = array(
            'vac_type' => 'Influenza',
            'vac_name' => $this->input->post('influenza_vac'),
            'given_date' => $this->input->post('influenza_date'),
            'due_date' => $this->input->post('influenza_due_date'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_immunization_details($immunization_details);	
		}elseif($vac=='3')
		{
			$immunization_details = array(
            'vac_type' => 'Pneumococcal',
            'vac_name' => $this->input->post('pneumococcal_vac'),
            'given_date' => $this->input->post('pneumococcal_date'),
            'due_date' => $this->input->post('pneumococcal_due_date'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_immunization_details($immunization_details);	
		}elseif($vac=='4')
		{
			$immunization_details = array(
            'vac_type' => 'Typhoid',
            'vac_name' => $this->input->post('typhoid_vac'),
            'given_date' => $this->input->post('typhoid_date'),
            'due_date' => $this->input->post('typhoid_due_date'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_immunization_details($immunization_details);	
		}elseif($vac=='5')
		{
			$immunization_details = array(
            'vac_type' => 'COVID19',
            'covid_vac_1' => $this->input->post('covid_vac_1'),
            'covid_vac_2' => $this->input->post('covid_vac_2'),
            'covid_vac_3' => $this->input->post('covid_vac_3'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $last_ptn_id);
		$this->preassessment_model->save_immunization_details($immunization_details);	
		}

	}
	 $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Patient details save successfully!</div>");
	redirect(base_url('app/doctor/add_preassessment'));
		// $this->load->view('preassessment');
	}
	}
	public function view_preassessment($id=0)
	{
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'ipd_doctor',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

		$this->data['patientInfo'] = $this->preassessment_model->get_preassesment($id);
		$this->data['preasses_medicine'] = $this->preassessment_model->get_preassessment_medicine($id);
		$this->data['preasses_immunization_his'] = $this->preassessment_model->get_preassessment_immunization_his($id);
		$this->data['preasses_fallrisk_quest'] = $this->preassessment_model->get_preassessment_fallrisk_quest($id);
		
		$this->load->view('app/doctor/view_preassessment',$this->data);
	}
	public function edit_preassessment($id=0)
	{
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'ipd_doctor',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
		//$this->session->set_userdata('page_name','ipd_doctor');
				 $this->data['message'] = $this->session->flashdata('message');

		$this->data['patientInfo'] = $this->preassessment_model->get_preassesment($id);
		/*echo "<pre>";
		print_r($this->data['patientInfo']);die;*/
		$this->data['preasses_medicine'] = $this->preassessment_model->get_preassessment_medicine($id);
		$this->data['preasses_doctor'] = $this->preassessment_model->get_treating_doctor($id);
		$this->data['preasses_child'] = $this->preassessment_model->get_preasses_child($id);
		$this->data['preasses_immunization_his'] = $this->preassessment_model->get_preassessment_immunization_his($id);
		$this->data['preasses_fallrisk_quest'] = $this->preassessment_model->get_preassessment_fallrisk_quest($id);
		
		$this->load->view('app/doctor/edit_preassessment',$this->data);
	}
	
			public function preassessment_update()
	{
	   
	    $medicine_name = $this->input->post('medicine_name', true);
	    $dose = $this->input->post('dose', true);
	    $frequency = $this->input->post('frequency', true);
	    $duration = $this->input->post('duration', true);

	    $doctor_name = $this->input->post('doctor_name', true);
	    $doctor_mobile = $this->input->post('doctor_mobile', true);
	    $doctor_email = $this->input->post('doctor_email', true);
	    $hospital_name = $this->input->post('hospital_name', true);

	    $chl_name = $this->input->post('chl_name', true);
	    $chl_add = $this->input->post('chl_add', true);
	    $chl_mobile = $this->input->post('chl_mobile', true);
	    $chl_email = $this->input->post('chl_email', true);
	    
		$preassessment_details = array(
            'preasses_name' => $this->input->post('applicant_name'),
            'birthday' => $this->input->post('applicant_dob'),
            'preasses_age' => $this->input->post('applicant_age'),
            'preasses_gender' => $this->input->post('applicant_gender'),
            'preasses_religion' => $this->input->post('applicant_religion'),
            'preasses_marital_status' => $this->input->post('applicant_marital'),
            'preasses_add' => $this->input->post('applicant_add'),
            'preasses_mobile' => $this->input->post('applicant_mobile'),
            'preasses_email' => $this->input->post('applicant_email'),
            'preasses_aadhar' => $this->input->post('applicant_aadhar'),
            'head' => $this->input->post('head'),
            'neck' => $this->input->post('neck'),
            'ears' => $this->input->post('ears'),
            'hearing' => $this->input->post('hearing'),
            'hearing_aid' => $this->input->post('hearaid'),
            'nose' => $this->input->post('nose'),
            'throat' => $this->input->post('throat'),
            'eye' => $this->input->post('eye'),
            'vision' => $this->input->post('vision'),
            'spectacles' => $this->input->post('spectacles'),
            'cataract' => $this->input->post('cataract'),
            'glaucoma' => $this->input->post('glaucoma'),
            'oral_exam' => $this->input->post('oral'),
            'tumour' => $this->input->post('tumour'),
            'dental_exam' => $this->input->post('dental'),
            'dentures' => $this->input->post('dentures'),
            'tongue' => $this->input->post('tongue'),
            'skin' => $this->input->post('skin'),
            'potenchial' => $this->input->post('potechial'),
            'bruises' => $this->input->post('bruises'),
            'rashes' => $this->input->post('rashes'),
            'bed_sore' => $this->input->post('bed_sore'),
            'pedal_oedema' => $this->input->post('pedal_oedema'),
            'dvt' => $this->input->post('dvt'),
            'varicose_veins' => $this->input->post('varicose_veins'),
            'foot_exam' => $this->input->post('foot'),
            'diet' => $this->input->post('diet'),
            'habits' => $this->input->post('habits'),
            'exercise' => $this->input->post('exercise'),	
            'physiotherapy_service' => $this->input->post('physiotherapy'),
            'temp' => $this->input->post('temp'),
            'pulse' => $this->input->post('pulse'),
            'bp' => $this->input->post('bp'),
            'rr' => $this->input->post('rr'),
            'spo2' => $this->input->post('spo2'),
            'rs' => $this->input->post('respirate_sys'),
            'cardiovascular_sys' => $this->input->post('cardiovascular_sys'),
            'gastrointestinal_sys' => $this->input->post('gastrointestinal_sys'),
            'genito_urinary_sys' => $this->input->post('genito_urinary_sys'),
            'neurological_sys' => $this->input->post('neurological_sys'),
            'drug_name' => $this->input->post('drug'),
            'food' => $this->input->post('food'),
            'any_other' => $this->input->post('any_other'),
            'last_taken_medicine_date' => $this->input->post('last_taken_medicine_date'),
            'total_no_of_error' => $this->input->post('total_no_error'),
            'clock_score' => $this->input->post('clock_score'),
            'clock_remark' => $this->input->post('clock_remark'),
            'geriatric_score' => $this->input->post('geriatric_score'),
            'geriatric_remark' => $this->input->post('geriatric_remark'),
            'time_up_go_score' => $this->input->post('time_test_score'),
            'chair_stand_score' => $this->input->post('chair_stand_score'),
            'musculoskeletal_sys' => $this->input->post('musculoskeletal_sys'),
            'doctor_observation' => $this->input->post('doctor_observation'),
            'recommendation' => $this->input->post('recommendation'),
            /*'ptn_eligible' => $this->input->post('ptn_eligible'),*/
            'updated_by' => $this->session->userdata('user_id'),
        	'updated_date'		=>	 date("Y-m-d h:i:s a"));
			
			if($this->session->userdata('user_role') == 5)
			{
				$preassessment_details['ptn_eligible']=$this->input->post('ptn_eligible');	
			}
			
		$update_ptn = $this->preassessment_model->update_preassessment_details($preassessment_details);
		
		if($update_ptn)
		{
		$family_details = array(
            'father' => $this->input->post('father_name'),
            'mother' => $this->input->post('mother_name'),
            'sublings' => $this->input->post('sublings_name'),
            'spouse_name' => $this->input->post('spouse_name'),
            'spouse_mobile' => $this->input->post('spouse_mobile'),
            'family_add' => $this->input->post('family_add'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $this->input->post('id'));
		$this->preassessment_model->update_family_details($family_details);

		if(!empty($chl_name))
		{
			$this->db->delete('patient_chl',array('preasses_id'=>$this->input->post('id')));
		foreach ($chl_name as $chl_key => $chl_val) { // need index to match other properties
				$child_details = array(
					'chl_name' => $chl_val,
					'chl_add' => isset($chl_add[$chl_key]) ? $chl_add[$chl_key] : '',
					'chl_mobile' => isset($chl_mobile[$chl_key]) ? $chl_mobile[$chl_key] : '',
					'chl_email' => isset($chl_email[$chl_key]) ? $chl_email[$chl_key] : '',
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $this->input->post('id')
				);
				
				$this->preassessment_model->child_details($child_details); 
			}
		}

		

		/*$child_details = array(
            'chl_name' => $this->input->post('chl_name'),
            'chl_add' => $this->input->post('chl_add'),
            'chl_mobile' => $this->input->post('chl_mobile'),
            'chl_email' => $this->input->post('chl_email'),
            'preasses_no' => $this->input->post('preasses_no'),
            'preasses_id' => $this->input->post('id'));
		$this->preassessment_model->update_child_details($child_details);*/

		if(!empty($doctor_name))
		{
			$this->db->delete('treating_doctor',array('preasses_id'=>$this->input->post('id')));
		foreach ($doctor_name as $key => $val) { // need index to match other properties
				$treating_doctor_details = array(
					'tdoctor_name' => $val,
					'tdoctor_mobile' => isset($doctor_mobile[$key]) ? $doctor_mobile[$key] : '',
					'tdoctor_email' => isset($doctor_email[$i]) ? $doctor_email[$i] : '',
					'hospital_name' => isset($hospital_name[$i]) ? $hospital_name[$i] : '',
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $this->input->post('id')
				);
				
				$this->preassessment_model->treating_doctor_details($treating_doctor_details); 
			}
		}

		$guardian_details = array(
            'local_guardian_name' => $this->input->post('guardian_name'),
            'guardian_add' => $this->input->post('guardian_add'),
            'guardian_mobile' => $this->input->post('guardian_mobile'),
            'guardian_email' => $this->input->post('guardian_email'),
            'local_guardian_name2' => $this->input->post('guardian_name2'),
            'guardian_add2' => $this->input->post('guardian_add2'),
            'guardian_mobile2' => $this->input->post('guardian_mobile2'),
            'guardian_email2' => $this->input->post('guardian_email2'),
            'appointment_poa' => $this->input->post('appointment_poa'),
		    'poa_name' => $this->input->post('poa_name'),
		    'poa_mobile' => $this->input->post('poa_mobile'),
		    'poa_email' => $this->input->post('poa_email'),
		    'diagnosis' => @implode(",",$this->input->post('diagnosis')),
            'present_complaints' => $this->input->post('present_complaints'),
            'past_history' => $this->input->post('past_history'),
            'preasses_no' => $this->input->post('preasses_no'),
            'preasses_id' => $this->input->post('id'));
		$this->preassessment_model->update_guardian_details($guardian_details);

		/*$treating_doctor_details = array(
            'appointment_poa' => $this->input->post('appointment_poa'),
            'poa_name' => $this->input->post('poa_name'),
            'poa_mobile' => $this->input->post('poa_mobile'),
            'poa_email' => $this->input->post('poa_email'),
            'tdoctor_name' => $this->input->post('doctor_name'),
            'tdoctor_mobile' => $this->input->post('doctor_mobile'),
            'tdoctor_email' => $this->input->post('doctor_email'),
            'hospital_name' => $this->input->post('hospital_name'),
            'diagnosis' => @implode(",",$this->input->post('diagnosis')),
            'present_complaints' => $this->input->post('present_complaints'),
            'past_history' => $this->input->post('past_history'),
            'preasses_no' => $this->input->post('preasses_no'),
            'preasses_id' => $this->input->post('id'));
		$this->preassessment_model->update_treating_doctor_details($treating_doctor_details);*/

		if(!empty($medicine_name))
		{
			$this->db->delete('preassessment_medicines',array('preasses_id'=>$this->input->post('id')));
		foreach ($medicine_name as $i => $a) { // need index to match other properties
				$ptn_med = array(
					'medicine' => $a,
					'dose' => isset($dose[$i]) ? $dose[$i] : '',
					'frequency' => isset($frequency[$i]) ? $frequency[$i] : '',
					'duration' => isset($duration[$i]) ? $duration[$i] : '',
					'preasses_no' => $this->input->post('preasses_no'),
					'preasses_id' => $this->input->post('id')
				);
				
				$this->preassessment_model->save_med_details($ptn_med); 
			}
		}

		$psychological_cond_details = array(
            'aggression' => $this->input->post('aggression'),
            'Violence' => $this->input->post('Violence'),
            'bed_restrain' => $this->input->post('bed_restrain'),
            'wandering' => $this->input->post('wandering'),
            'sleep' => $this->input->post('sleep'),
            'giver_care' => $this->input->post('giver_care'),
            'diagnostic_test' => $this->input->post('diagnostic_test'),
            'typical_day_appl' => $this->input->post('typical_day_appl'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $this->input->post('id'));
		$this->preassessment_model->update_psychological_cond_details($psychological_cond_details);


		$barthel_details = array(
            'bowels_score' => $this->input->post('bowels_score'),
            'bladder_score' => $this->input->post('bladder_score'),
            'toilet_score' => $this->input->post('toilet_score'),
            'bathing_score' => $this->input->post('bathing_score'),
            'grooming_score' => $this->input->post('grooming_score'),
            'dressing_score' => $this->input->post('dressing_score'),

            'feeding_score' => $this->input->post('feeding_score'),
            'transfer_score' => $this->input->post('transfer_score'),
            'mobility_score' => $this->input->post('mobility_score'),
            'stairs_score' => $this->input->post('stairs_score'),
            'total_barthel_score' => $this->input->post('barthel_total_score'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $this->input->post('id'));
		$this->preassessment_model->update_barthel_details($barthel_details);

		/*$questions = $this->input->post('questions', true);
		$answer = $this->input->post('answer', true);
	    $fallrisk_id = $this->input->post('fallrisk_id', true);

		if(!empty($questions))
		{
			
			
		foreach ($questions as $i => $a) { // need index to match other properties
				$qtn_ans_details = array(
					'questions' => $a,
					'answer' => isset($answer[$i]) ? $answer[$i] : ''
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$i]);
			}
		}*/
		/*********************Start fall risk questions***********************/
		$fallrisk_id = $this->input->post('fallrisk_id', true);
		//print_r($fallrisk_id);die;

		for($qtn=0;$qtn<13;$qtn++)
        {

            if($qtn=="0")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('past_year_qtn'),
					'answer' => $this->input->post('past_year')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="1")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('use_stick_qtn'),
					'answer' => $this->input->post('use_stick')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="2")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('feel_stable_qtn'),
					'answer' => $this->input->post('feel_stable')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="3")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('steady_holding_qtn'),
					'answer' => $this->input->post('steady_holding')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="4")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('worry_fall_qtn'),
					'answer' => $this->input->post('worry_fall')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="5")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('from_chair_qtn'),
					'answer' => $this->input->post('from_chair')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="6")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('curb_qtn'),
					'answer' => $this->input->post('curb')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="7")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('toilet_rush_qtn'),
					'answer' => $this->input->post('toilet_rush')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="8")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('lost_feet_qtn'),
					'answer' => $this->input->post('lost_feet')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="9")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('light_headed_qtn'),
					'answer' => $this->input->post('light_headed')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="10")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('take_medicine_qtn'),
					'answer' => $this->input->post('take_medicine')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="11")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('feel_sad_qtn'),
					'answer' => $this->input->post('feel_sad')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}
			if($qtn=="12")
            {
            	$qtn_ans_details = array(
					'questions' => $this->input->post('fall_total_score_qtn'),
					'answer' => $this->input->post('fall_total_score')
				);
				
				$this->preassessment_model->update_fallrisk_quest_details($qtn_ans_details,$fallrisk_id[$qtn]);
			}

		}
		/*********************End fall risk questions***********************/	


         

		for($vac=1;$vac<=5;$vac++)
		{
			if($vac=='1')
			{
		$immunization_details = array(
            'vac_type' => 'Tetanus',
            'vac_name' => $this->input->post('tetanus_vac'),
            'given_date' => $this->input->post('tetanus_date'),
            'due_date' => $this->input->post('tetanus_due_date'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $this->input->post('id'));
		$id=$this->input->post('tetanus_id');
		$this->preassessment_model->update_immunization_details($immunization_details,$id);
		}elseif($vac=='2')
		{
			$immunization_details = array(
            'vac_type' => 'Influenza',
            'vac_name' => $this->input->post('influenza_vac'),
            'given_date' => $this->input->post('influenza_date'),
            'due_date' => $this->input->post('influenza_due_date'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $this->input->post('id'));
    	    $id=$this->input->post('influenza_id');
		$this->preassessment_model->update_immunization_details($immunization_details,$id);	
		}elseif($vac=='3')
		{
			$immunization_details = array(
            'vac_type' => 'Pneumococcal',
            'vac_name' => $this->input->post('pneumococcal_vac'),
            'given_date' => $this->input->post('pneumococcal_date'),
            'due_date' => $this->input->post('pneumococcal_due_date'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $this->input->post('id'));
    	    $id=$this->input->post('pneumococcal_id');
		$this->preassessment_model->update_immunization_details($immunization_details,$id);	
		}elseif($vac=='4')
		{
			$immunization_details = array(
            'vac_type' => 'Typhoid',
            'vac_name' => $this->input->post('typhoid_vac'),
            'given_date' => $this->input->post('typhoid_date'),
            'due_date' => $this->input->post('typhoid_due_date'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $this->input->post('id'));
    	    $id=$this->input->post('typhoid_id');
		$this->preassessment_model->update_immunization_details($immunization_details,$id);	
		}elseif($vac=='5')
		{
			$immunization_details = array(
            'vac_type' => 'COVID19',
            'covid_vac_1' => $this->input->post('covid_vac_1'),
            'covid_vac_2' => $this->input->post('covid_vac_2'),
            'covid_vac_3' => $this->input->post('covid_vac_3'),
            'preasses_no' => $this->input->post('preasses_no'),
    	    'preasses_id' => $this->input->post('id'));
    	    $id=$this->input->post('covid_id');
		$this->preassessment_model->update_immunization_details($immunization_details,$id);	
		}
	}
	 $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Preassessment details updated successfully!</div>");
	redirect(base_url('app/doctor/preassessment_list'));
	}
	}
	
	public function ipd($offset = 0){
				 
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'ipd_doctor',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 
				// user restriction function
				$this->session->set_userdata('page_name','ipd_doctor');
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
		$config['base_url'] = base_url().'app/doctor/ipd/';
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
		$this->table->set_heading('Member No','Member Name','Date Admit','Member Type','Room & Bed No.','Incharge Doctor','Status','Action');
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
									anchor('app/ipd/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." Bed No.".$patient->bed_name, 
									$patient->doctor,
									$nStatus,
									anchor('app/ipd/mail_view/'.$patient->IO_ID.'/'.$patient->patient_no,'Mail')
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
		$this->load->view('app/doctor/ipd',$this->data);	
	}
	
	public function preassessment_report($id=0)
	{
		//$this->data['message'] = $this->session->flashdata('message');

		$this->data['patientInfo'] = $this->preassessment_model->get_preassesment($id);
		$this->data['preasses_medicine'] = $this->preassessment_model->get_preassessment_medicine($id);
		$this->data['preasses_immunization_his'] = $this->preassessment_model->get_preassessment_immunization_his($id);
		$this->data['preasses_fallrisk_quest'] = $this->preassessment_model->get_preassessment_fallrisk_quest($id);
		
		//$this->load->view('app/doctor/preassessment_report',$this->data);

		$dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled',TRUE);
            $canvas=$dompdf->get_canvas();
            //$this->load->view('app/doctor/preassessment_report',$this->data);
            $html = $this->load->view('app/doctor/preassessment_report',$this->data,true);

            $dompdf->loadHtml($html);
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser
            $dompdf->stream('preassessment_report.pdf',array("Attachment" => 0));
	}

	public function preassessment_report_new($id=0)
{
	$this->data['patientInfo'] = $this->preassessment_model->get_preassesment($id);
		$this->data['preasses_medicine'] = $this->preassessment_model->get_preassessment_medicine($id);
		$this->data['preasses_immunization_his'] = $this->preassessment_model->get_preassessment_immunization_his($id);
		$this->data['preasses_fallrisk_quest'] = $this->preassessment_model->get_preassessment_fallrisk_quest($id);
		
		//$this->load->view('app/doctor/preassessment_report',$this->data);

		$dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled',TRUE);
            $canvas=$dompdf->get_canvas();
            //$this->load->view('app/doctor/preassessment_report',$this->data);
            $html = $this->load->view('app/doctor/preassessment_report_new',$this->data,true);

            $dompdf->loadHtml($html);
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser
            $dompdf->stream('preassessment_report.pdf',array("Attachment" => 0));

	
}

}
