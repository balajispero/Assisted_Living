<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';      
use Dompdf\Dompdf;

require APPPATH.'controllers/General.php'; 

class Physio extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		$this->load->model("app/ipd_model");
		$this->load->model("app/patient_model");
		$this->load->model("app/doctor_model");
		$this->load->model("app/physio_model");
		$this->load->model("General_model");

		if(General::is_logged_in() == FALSE){
            redirect(base_url().'login');    
        }
		General::variable();	
		
	}
	
	public function ipd($offset = 0){
				 
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'ipd_doctor',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 
				// user restriction function
				/*$this->session->set_userdata('page_name','ipd_doctor');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}*/
				// end of user restriction function		 
				 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->doctor_model->getAll2($this->limit, $offset);
		/*echo "<pre>";
 		print_r($patient);die;*/
		$config['base_url'] = base_url().'app/physio/ipd/';
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
		$this->table->set_heading('Member No','Member Name','Date Admit','Room & Bed No.','Status');
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
									anchor('app/physio/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									/*$patient->patient_type,*/ 
									"Rm ".$patient->room_name." Bed No.".$patient->bed_name, 
									/*$patient->doctor,*/
									$nStatus
									/*anchor('app/ipd/mail_view/'.$patient->IO_ID.'/'.$patient->patient_no,'Mail')*/
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();
        //print_r($patient);die;
		$this->load->view('app/physio/ipd',$this->data);	
	}

	public function view(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEval'] = $this->physio_model->get_physio_evaluation($iop_no);
		
		$this->load->view("app/physio/view",$this->data);	
	}
	public function mail_view()
{
    $iop_no = $this->uri->segment("4");
    $patient_no = $this->uri->segment("5");
    $eval_no = $this->uri->segment("6");

    $this->data['message'] = $this->session->flashdata('message');
    $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
    $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
    $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no, $iop_no);

    if ($this->input->post('submit') == 'sent_mail') {

        $to_email = "balajimuttepwar892@gmail.com";
        $rel_email2 = "balajimuttepawar7058@gmail.com";

        

        if (filter_var($to_email, FILTER_VALIDATE_EMAIL)) {
        	// Set boundary for mixed content
        $boundary = "XYZ-" . md5(date("dmYHis", time()));

        // Headers for mixed content
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

        // attachment
        $file = $_FILES["attachment"]["tmp_name"];
        $filename = $_FILES["attachment"]["name"];
        $attachment = @chunk_split(base64_encode(file_get_contents($file)));

        // Message with attachment
        $msg1 = "--$boundary\r\n";
        $msg1 .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\r\n\r\n";

        // Text version of the email
        $msg1 .= "--$boundary\r\n";
        $msg1 .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $msg1 .= "Content-Transfer-Encoding: base64\r\n\r\n";
        

        // HTML version of the email
        $msg1 .= "--$boundary\r\n";
        $msg1 .= "Content-Type: text/html; charset=UTF-8\r\n";
        $msg1 .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $msg1 .= chunk_split(base64_encode($this->load->view('app/physio/physio_eval_mail_generate', $this->data, TRUE))) . "\r\n";

        // Attachment
        if (!empty($_FILES["attachment"]["name"])) {
        $msg1 .= "--$boundary\r\n";
        $msg1 .= "Content-Type: application/octet-stream; name=\"$filename\"\r\n";
        $msg1 .= "Content-Transfer-Encoding: base64\r\n";
        $msg1 .= "Content-Disposition: attachment; filename=\"$filename\"\r\n\r\n";
        $msg1 .= $attachment . "\r\n";
        $msg1 .= "--$boundary--";
    }

            $subject = "Health updates " /*. @$this->data['patientInfo']->middlename*/;

            $headers .= "From: balajiM@sperohealthcare.in" . "\r\n";
            $headers .= "CC: balajim.speroinfosystems@gmail.com, $rel_email2\r\n";

            if (mail($to_email, $subject, $msg1, $headers)) {
                $res = $this->physio_model->save_physio_eval_sent_mail();
                if ($res) {
                    $this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sent successfully.</div>");
                    redirect(base_url() . 'app/physio/view/' . $this->input->post('opd_no') . '/' . $this->input->post('patient_no'), $this->data);
                } else {
                    $this->session->set_flashdata('message', "<div class='alert alert-danger alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sending failed...</div>");
                    redirect(base_url() . 'app/physio/view/' . $this->input->post('opd_no') . '/' . $this->input->post('patient_no'), $this->data);
                }
            } else {
                $this->session->set_flashdata('message', "<div class='alert alert-danger alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sending failed...</div>");
                redirect(base_url() . 'app/physio/view/' . $this->input->post('opd_no') . '/' . $this->input->post('patient_no'), $this->data);
            }
        } else {
            // Handle the case where the email address is not valid
            $this->session->set_flashdata('message', "<div class='alert alert-danger alert-dismissable'><i class='fa fa-exclamation-circle'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Invalid email address</div>");
            redirect(base_url() . 'app/physio/view/' . $this->input->post('opd_no') . '/' . $this->input->post('patient_no'), $this->data);
        }
    }

    $this->load->view("app/physio/mail_view", $this->data);
}

	public function sent_mail_view(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$eval_no = $this->uri->segment("6");
		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEvalSentMail'] = $this->physio_model->get_physio_eval_sent_mail($iop_no,$patient_no,$eval_no);
		$this->data['cnt']=count($this->data['patientPhysioEvalSentMail']);
		// echo "<pre>";
		// print_r($this->data['patientPhysioEvalSentMail']);die;
		$this->load->view("app/physio/physio_sent_mail_view",$this->data);	
	}

	
	public function add_evaluation()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$this->data['therapy_type'] = $this->uri->segment("6");
		
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');
				 $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
				 $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['lastPreassesID'] = $this->physio_model->lastPreassesID();

				 $this->data['tightness_list'] = $this->physio_model->get_tightness_list();
				 $this->data['bodypart_list'] = $this->physio_model->get_bodypart_list();
		
		$this->load->view('app/physio/add_evaluation',$this->data);
	}
	
	public function evaluation_save()
	{
	   if(isset($_POST['btnSave']))
	   {
	    
			$evaluation_details = array(
	            'eval_no' => $this->input->post('eval_no'),
	            'iop_no' => $this->input->post('opd_no'),
	            'patient_no' => $this->input->post('patient_no'),
	            'ptn_name' => $this->input->post('ptn_name'),
	            'ptn_age' => $this->input->post('ptn_age'),
	            'ptn_diagnosis' => $this->input->post('ptn_diagnosis'),
	            'ptn_complain' => $this->input->post('ptn_complain'),
	            'ptn_tightness' => @implode(",",$this->input->post('ptn_tightness')),
	            'tightness_side' => $this->input->post('tightness_side'),
	            'ptn_tightness_remark' => $this->input->post('ptn_tightness_remark'),
	            'ptn_pain_bodypart' => @implode(",",$this->input->post('ptn_bodypart')),
	            'ptn_upper_body' => $this->input->post('ptn_upper_body'),
	            'ptn_upper_body_remark' => $this->input->post('ptn_upper_body_remark'),
	            'lower_body' => $this->input->post('lower_body'),
	            'ptn_pain_intensity' => $this->input->post('ptn_pain_intensity'),
	            'nature' => $this->input->post('nature'),

	           	'mobility_total_assist1' => "Total Assistance 1",
	            'mobility_assist1_evaldate' => $this->input->post('mobility_assist1_evaldate'),
	            'mobility_assist1_rolling' => ($this->input->post('mobility_assist1_rolling')) ? 'Yes' : 'No',
	            'mobility_assist1_supine' => ($this->input->post('mobility_assist1_supine')) ? 'Yes' : 'No',
	            'mobility_assist1_stand' => ($this->input->post('mobility_assist1_stand')) ? 'Yes' : 'No',
	            'mobility_maximal_assist2' => "Maximal Assistance 2",
	            'mobility_assist2_evaldate' => $this->input->post('mobility_assist2_evaldate'),
	            'mobility_assist2_rolling' => ($this->input->post('mobility_assist2_rolling')) ? 'Yes' : 'No',
	            'mobility_assist2_supine' => ($this->input->post('mobility_assist2_supine')) ? 'Yes' : 'No',
	            'mobility_assist2_stand' => ($this->input->post('mobility_assist2_stand')) ? 'Yes' : 'No',
	            'mobility_moderate_assist3' => "Moderate Assistance 3",
	            'mobility_assist3_evaldate' => $this->input->post('mobility_assist3_evaldate'),
	            'mobility_assist3_rolling' => ($this->input->post('mobility_assist3_rolling')) ? 'Yes' : 'No',
	            'mobility_assist3_supine' => ($this->input->post('mobility_assist3_supine')) ? 'Yes' : 'No',
	            'mobility_assist3_stand' => ($this->input->post('mobility_assist3_stand')) ? 'Yes' : 'No',
	            'mobility_minimal_assist4' => "Minimal Assistance 4",
	            'mobility_assist4_evaldate' => $this->input->post('mobility_assist4_evaldate'),
	            'mobility_assist4_rolling' => ($this->input->post('mobility_assist4_rolling')) ? 'Yes' : 'No',
	            'mobility_assist4_supine' => ($this->input->post('mobility_assist4_supine')) ? 'Yes' : 'No',
	            'mobility_assist4_stand' => ($this->input->post('mobility_assist4_stand')) ? 'Yes' : 'No',
	            'mobility_total_assist5a' => "Contact  Guarding 5 A",
	            'mobility_assist5a_evaldate' => $this->input->post('mobility_assist5a_evaldate'),
	            'mobility_assist5a_rolling' => ($this->input->post('mobility_assist5a_rolling')) ? 'Yes' : 'No',
	            'mobility_assist5a_supine' => ($this->input->post('mobility_assist5a_supine')) ? 'Yes' : 'No',
	            'mobility_assist5a_stand' => ($this->input->post('mobility_assist5a_stand')) ? 'Yes' : 'No',
	            'mobility_total_assist5b' => "Supervision or setup 5 B",
	            'mobility_assist5b_evaldate' => $this->input->post('mobility_assist5b_evaldate'),
	            'mobility_assist5b_rolling' => ($this->input->post('mobility_assist5b_rolling')) ? 'Yes' : 'No',
	            'mobility_assist5b_supine' => ($this->input->post('mobility_assist5b_supine')) ? 'Yes' : 'No',
	            'mobility_assist5b_stand' => ($this->input->post('mobility_assist5b_stand')) ? 'Yes' : 'No',
	            'mobility_total_assist6' => "Modified Independence 6",
	            'mobility_assist6_evaldate' => $this->input->post('mobility_assist6_evaldate'),
	            'mobility_assist6_rolling' => ($this->input->post('mobility_assist6_rolling')) ? 'Yes' : 'No',
	            'mobility_assist6_supine' => ($this->input->post('mobility_assist6_supine')) ? 'Yes' : 'No',
	            'mobility_assist6_stand' => ($this->input->post('mobility_assist6_stand')) ? 'Yes' : 'No',
	            'mobility_total_assist7' => "Complete Independence 7",
	            'mobility_assist7_evaldate' => $this->input->post('mobility_assist7_evaldate'),
	            'mobility_assist7_rolling' => ($this->input->post('mobility_assist7_rolling')) ? 'Yes' : 'No',
	            'mobility_assist7_supine' => ($this->input->post('mobility_assist7_supine')) ? 'Yes' : 'No',
	            'mobility_assist7_stand' => ($this->input->post('mobility_assist7_stand')) ? 'Yes' : 'No',
	            /*'mobility_notappl_assist8' => "Not Applicable",
	            'mobility_notappl_evaldate' => $this->input->post('mobility_notappl_evaldate'),
	            'mobility_notappl_rolling' => $this->input->post('mobility_notappl_rolling'),
	            'mobility_notappl_supine' => $this->input->post('mobility_notappl_supine'),
	            'mobility_notappl_stand' => $this->input->post('mobility_notappl_stand'),*/

	            'transfer_total_assist1' => "Total Assistance 1",
	            'transfer_assist1_evaldate' => $this->input->post('transfer_assist1_evaldate'),
	            'transfer_assist1_wheelchair' => ($this->input->post('transfer_assist1_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist1_car' => ($this->input->post('transfer_assist1_car')) ? 'Yes' : 'No',
	            'transfer_maximal_assist2' => "Maximal Assistance 2",
	            'transfer_assist2_evaldate' => $this->input->post('transfer_assist2_evaldate'),
	            'transfer_assist2_wheelchair' => ($this->input->post('transfer_assist2_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist2_car' => ($this->input->post('transfer_assist2_car')) ? 'Yes' : 'No',
	            'transfer_moderate_assist3' => "Moderate Assistance 3",
	            'transfer_assist3_evaldate' => $this->input->post('transfer_assist3_evaldate'),
	            'transfer_assist3_wheelchair' => ($this->input->post('transfer_assist3_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist3_car' => ($this->input->post('transfer_assist3_car')) ? 'Yes' : 'No',
	            'transfer_minimal_assist4' => "Minimal Assistance 4",
	            'transfer_assist4_evaldate' => $this->input->post('transfer_assist4_evaldate'),
	            'transfer_assist4_wheelchair' => ($this->input->post('transfer_assist4_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist4_car' => ($this->input->post('transfer_assist4_car')) ? 'Yes' : 'No',
	            'transfer_total_assist5b' => "Contact  Guarding 5 B",
	            'transfer_assist5b_evaldate' => $this->input->post('transfer_assist5b_evaldate'),
	            'transfer_assist5b_wheelchair' => ($this->input->post('transfer_assist5b_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist5b_car' => ($this->input->post('transfer_assist5b_car')) ? 'Yes' : 'No',
	            'transfer_total_assist5a' => "Supervision or setup 5 A",
	            'transfer_assist5a_evaldate' => $this->input->post('transfer_assist5a_evaldate'),
	            'transfer_assist5a_wheelchair' => ($this->input->post('transfer_assist5a_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist5a_car' => ($this->input->post('transfer_assist5a_car')) ? 'Yes' : 'No',
	            'transfer_total_assist6' => "MModified Independence 6",
	            'transfer_assist6_evaldate' => $this->input->post('transfer_assist6_evaldate'),
	            'transfer_assist6_wheelchair' => ($this->input->post('transfer_assist6_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist6_car' => ($this->input->post('transfer_assist6_car')) ? 'Yes' : 'No',
	            'transfer_total_assist7' => "Complete Independence 7",
	            'transfer_assist7_evaldate' => $this->input->post('transfer_assist7_evaldate'),
	            'transfer_assist7_wheelchair' => ($this->input->post('transfer_assist7_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist7_car' => ($this->input->post('transfer_assist7_car')) ? 'Yes' : 'No',
	            /*'transfer_notappl_assist8' => "Not Applicable",
	            'transfer_notappl_evaldate' => $this->input->post('transfer_notappl_evaldate'),
	            'transfer_notappl_wheelchair' => $this->input->post('transfer_notappl_wheelchair'),
	            'transfer_notappl_car' => $this->input->post('transfer_notappl_car'),*/
	            
	            'physio_service' => $this->input->post('physio_service'),
	            'next_eval_date' => $this->input->post('next_eval_date'),
	            'treatment_goal'		=>	 $this->input->post('treatment_goal'),
	            'treatment_goal_remark'		=>	 $this->input->post('treatment_goal_remark'),
	            'therapy_time' => $this->input->post('therapy_time'),
	            'exp_session'=>$this->input->post('exp_session'),
	            /*'physio_service_from_date' => $this->input->post('physio_service_from_date'),
	            'physio_service_to_date' => $this->input->post('physio_service_to_date'),*/
	            'expert_recommendation' => $this->input->post('expert_rec'),
	            'gait_speed' => $this->input->post('gait_speed'),
	            'added_by' => $this->session->userdata('user_id'),

	            'mobility' => $this->input->post('mobility'),
	            'mobility_remark' => $this->input->post('mobility_remark'),
	            'muscle_strength'		=>	 $this->input->post('muscle_strength'),
	            'muscle_strength_remark'		=>	 $this->input->post('muscle_strength_remark'),
	            /*'muscle_tone' => $this->input->post('muscle_tone'),
	            'breathlessness'=>$this->input->post('breathlessness'),
	            'fatigue' => $this->input->post('fatigue'),*/
	            'fim_interpreter'=>$this->input->post('fim_interpreter'),

	            'berg_bal_sit_unsupport' => $this->input->post('berg_bal_sit_unsupport'),
	            'berg_bal_sit_tostand' => $this->input->post('berg_bal_sit_tostand'),
	            'berg_bal_stand_tosit'		=>	 $this->input->post('berg_bal_stand_tosit'),
	            'berg_bal_transfer'		=>	 $this->input->post('berg_bal_transfer'),
	            'berg_bal_stand_unsupport' => $this->input->post('berg_bal_stand_unsupport'),
	            'berg_bal_stand_witheye'=>$this->input->post('berg_bal_stand_witheye'),
	            'berg_bal_stand_withfeet' => $this->input->post('berg_bal_stand_withfeet'),
	            'berg_bal_tendem_stand'=>$this->input->post('berg_bal_tendem_stand'),
	            'berg_bal_stand_oneleg' => $this->input->post('berg_bal_stand_oneleg'),
	            'berg_bal_turning_trunk' => $this->input->post('berg_bal_turning_trunk'),
	            'berg_bal_object_fromfloor'		=>	 $this->input->post('berg_bal_object_fromfloor'),
	            'berg_bal_turning_360_deg'		=>	 $this->input->post('berg_bal_turning_360_deg'),
	            'berg_bal_stool' => $this->input->post('berg_bal_stool'),
	            'berg_bal_reaching_forward'=>$this->input->post('berg_bal_reaching_forward'),
	            'berg_bal_total_score' => $this->input->post('berg_bal_total_score'),
	            'berg_bal_interpreter'=>$this->input->post('berg_bal_interpreter'),
	            'berg_bal_interpreter_remark'=>$this->input->post('berg_bal_interpreter_remark'),
	            'therapy_type'=>$this->input->post('therapy_type'),
	            'organization'		=>		$this->session->userdata('organization'),

	            'InActive'=>0,
	        	'added_date'		=>	 date("Y-m-d h:i:s a"));

				if($this->input->post('expert_rec')=="Yes") {
	            $evaluation_details['rel_agree']="Yes";
	        	}

				if($this->input->post('therapy_type')=="ortho") {
	            $evaluation_details['ortho_special_test']=$this->input->post('ortho_special_test');
	        	}
	        	if($this->input->post('therapy_type')=="neuro" || $this->input->post('therapy_type')=="general") {
	            $evaluation_details['muscle_tone']=$this->input->post('muscle_tone');
	        	}
				
				if($this->input->post('therapy_type')=="respi" || $this->input->post('therapy_type')=="general")
				{
					
		            $evaluation_details['breathlessness']=$this->input->post('breathlessness');
		            $evaluation_details['fatigue']=$this->input->post('fatigue');
		            if($this->input->post('therapy_type')=="respi")
		            {
		            	$evaluation_details['walktest']=$this->input->post('walktest');
		            	$evaluation_details['walktest1min']=$this->input->post('walktest1min');
		            	$evaluation_details['walktest3min']=$this->input->post('walktest3min');
		            	$evaluation_details['walktest5min']=$this->input->post('walktest5min');
		        	}
				}

				
				
				/*********************Start upload video code*********************/
				$this->load->library('upload');
		if (!empty($_FILES["videofile"]["name"])) {
			$config = array(
				'allowed_types'		=>		'*',
				'upload_path'		=>realpath('public/physio_eval_video'),
				'max_size'			=>		0
			);
			// $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('videofile')){
				$video_data = $this->upload->data();
				//print_r($video_data);
				$evaluation_details['gait_video']=$video_data['file_name'];
			}
			//$error = $this->upload->display_errors();
			//print_r($error);die;	
		}
		/*********************End upload video code*********************/
			/*echo "<pre>";
			print_r($evaluation_details);die;*/	
			$last_ptn_id = $this->physio_model->save_evaluation_details($evaluation_details);
			if($last_ptn_id)
			{
				//update preassessmentID autonumber();
				$this->physio_model->updateAutoNum();

				 /*$to_email = $this->input->post('mail_to');
        $rel_email2 = $this->input->post('rel_email2');

        $to_email = "balajimuttepwar892@gmail.com";
         $rel_email2 = "balajimuttepawar7058@gmail.com";
        
		        if (filter_var($to_email, FILTER_VALIDATE_EMAIL)) {
		        $subject = "Health updates of " ;

		        $msg1 = $this->load->view('app/physio/physio_eval_mail_generate', $this->data, TRUE);

		        $headers = "MIME-Version: 1.0" . "\r\n";
		        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		        $headers .= 'From: balajiM@sperohealthcare.in' . "\r\n";
		        //$headers .= 'From: doctoraastha@sperohealthcare.in' . "\r\n";
		        
		        $headers .= "CC: balajim.speroinfosystems@gmail.com, $rel_email2\r\n";
		        //$headers .= "CC: avinash@sperohealthcare.in, kaushikpanditrao@ahpl.in, $rel_email2\r\n";

		        if (mail($to_email, $subject, $msg1, $headers)) {*/

		            	$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Evaluation details saved successfully!</div>");

						redirect(base_url().'app/physio/view/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
					/*}
				}*/
			}
		}
	}

	public function view_evaluation($eval_no)
	{
		
		$iop_no = $this->uri->segment("6");
		$patient_no = $this->uri->segment("7");
		
		
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no); 
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);
				 $this->data['tightness_list'] = $this->physio_model->get_tightness_list();
				 
		
		$this->load->view('app/physio/view_evaluation',$this->data);
	}
	public function evaluation_pdf($eval_no)
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);

				 $dompdf = new Dompdf();
	            $dompdf->set_option('isRemoteEnabled',TRUE);
	            $canvas=$dompdf->get_canvas();
	            //$this->load->view('app/doctor/preassessment_report',$this->data);
	            $html = $this->load->view('app/physio/evaluation_pdf',$this->data,true);

	            $dompdf->loadHtml($html);
	           
	            // Render the HTML as PDF
	            $dompdf->render();
	            // Output the generated PDF to Browser
	             $evalFileName = 'Evaluation-'.$this->data['ptnEvalInfo']->eval_no.'.pdf';
	            // $dompdf->stream($invoiceFileName,array("Attachment" => 0));

	            $dompdf->stream($evalFileName,array("Attachment" => 1));
				 
		
		//$this->load->view('app/physio/evaluation_pdf',$this->data);

		/*$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			$this->data['invoiceItems'] = $this->Invoicemodel->generate_lab_bill($iop_no,$patient_no);
			
			$dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled',TRUE);
            $canvas=$dompdf->get_canvas();
            //$this->load->view('app/doctor/preassessment_report',$this->data);
            $html = $this->load->view('app/billings/lab_invoice',$this->data,true);

            $dompdf->loadHtml($html);
           
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser
            // $invoiceFileName = 'Invoice-'.$this->data['invoiceValues'][0]['order_id'].'.pdf';
            // $dompdf->stream($invoiceFileName,array("Attachment" => 0));

            $dompdf->stream('bill.pdf',array("Attachment" => 0));*/
		
		
		    // $this->load->view('app/billing/print_invoice',$this->data);
	}

	public function edit_evaluation($eval_no)
	{
		$iop_no = $this->uri->segment("6");
		$patient_no = $this->uri->segment("7");
		
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');
				 $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
				 //$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['tightness_list'] = $this->physio_model->get_tightness_list();
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);
				 $this->data['bodypart_list'] = $this->physio_model->get_bodypart_list();
				 /*echo "<pre>";
				 print_r($this->data['ptnEvalInfo']);*/
		
		$this->load->view('app/physio/edit_evaluation',$this->data);
	}
	public function evaluation_update()
	{
	   if(isset($_POST['btnSave']))
	   {
	   	
			$evaluation_details = array(
	            'eval_no' => $this->input->post('eval_no'),
	            /*'iop_no' => $this->input->post('opd_no'),
	            'patient_no' => $this->input->post('patient_no'),*/
	            'ptn_name' => $this->input->post('ptn_name'),
	            'ptn_age' => $this->input->post('ptn_age'),
	            'ptn_diagnosis' => $this->input->post('ptn_diagnosis'),
	            'ptn_complain' => $this->input->post('ptn_complain'),
	            'ptn_tightness' => @implode(",",$this->input->post('ptn_tightness')),
	            'tightness_side' => $this->input->post('tightness_side'),
	            'ptn_upper_body' => $this->input->post('ptn_upper_body'),
	            'lower_body' => $this->input->post('lower_body'),
	            'ptn_pain_bodypart' => @implode(",",$this->input->post('ptn_bodypart')),
	            'ptn_pain_intensity' => $this->input->post('ptn_pain_intensity'),
	            'ptn_tightness_remark' => $this->input->post('ptn_tightness_remark'),
				'ptn_upper_body_remark' => $this->input->post('ptn_upper_body_remark'),
				'nature' => $this->input->post('nature'),

	           	'mobility_total_assist1' => "Total Assistance 1",
	            'mobility_assist1_evaldate' => $this->input->post('mobility_assist1_evaldate'),
	            'mobility_assist1_rolling' => ($this->input->post('mobility_assist1_rolling')) ? 'Yes' : 'No',
	            'mobility_assist1_supine' => ($this->input->post('mobility_assist1_supine')) ? 'Yes' : 'No',
	            'mobility_assist1_stand' => ($this->input->post('mobility_assist1_stand')) ? 'Yes' : 'No',
	            'mobility_maximal_assist2' => "Maximal Assistance 2",
	            'mobility_assist2_evaldate' => $this->input->post('mobility_assist2_evaldate'),
	            'mobility_assist2_rolling' => ($this->input->post('mobility_assist2_rolling')) ? 'Yes' : 'No',
	            'mobility_assist2_supine' => ($this->input->post('mobility_assist2_supine')) ? 'Yes' : 'No',
	            'mobility_assist2_stand' => ($this->input->post('mobility_assist2_stand')) ? 'Yes' : 'No',
	            'mobility_moderate_assist3' => "Moderate Assistance 3",
	            'mobility_assist3_evaldate' => $this->input->post('mobility_assist3_evaldate'),
	            'mobility_assist3_rolling' => ($this->input->post('mobility_assist3_rolling')) ? 'Yes' : 'No',
	            'mobility_assist3_supine' => ($this->input->post('mobility_assist3_supine')) ? 'Yes' : 'No',
	            'mobility_assist3_stand' => ($this->input->post('mobility_assist3_stand')) ? 'Yes' : 'No',
	            'mobility_minimal_assist4' => "Minimal Assistance 4",
	            'mobility_assist4_evaldate' => $this->input->post('mobility_assist4_evaldate'),
	            'mobility_assist4_rolling' => ($this->input->post('mobility_assist4_rolling')) ? 'Yes' : 'No',
	            'mobility_assist4_supine' => ($this->input->post('mobility_assist4_supine')) ? 'Yes' : 'No',
	            'mobility_assist4_stand' => ($this->input->post('mobility_assist4_stand')) ? 'Yes' : 'No',
	            'mobility_total_assist5a' => "Contact  Guarding 5 A",
	            'mobility_assist5a_evaldate' => $this->input->post('mobility_assist5a_evaldate'),
	            'mobility_assist5a_rolling' => ($this->input->post('mobility_assist5a_rolling')) ? 'Yes' : 'No',
	            'mobility_assist5a_supine' => ($this->input->post('mobility_assist5a_supine')) ? 'Yes' : 'No',
	            'mobility_assist5a_stand' => ($this->input->post('mobility_assist5a_stand')) ? 'Yes' : 'No',
	            'mobility_total_assist5b' => "Supervision or setup 5 B",
	            'mobility_assist5b_evaldate' => $this->input->post('mobility_assist5b_evaldate'),
	            'mobility_assist5b_rolling' => ($this->input->post('mobility_assist5b_rolling')) ? 'Yes' : 'No',
	            'mobility_assist5b_supine' => ($this->input->post('mobility_assist5b_supine')) ? 'Yes' : 'No',
	            'mobility_assist5b_stand' => ($this->input->post('mobility_assist5b_stand')) ? 'Yes' : 'No',
	            'mobility_total_assist6' => "Modified Independence 6",
	            'mobility_assist6_evaldate' => $this->input->post('mobility_assist6_evaldate'),
	            'mobility_assist6_rolling' => ($this->input->post('mobility_assist6_rolling')) ? 'Yes' : 'No',
	            'mobility_assist6_supine' => ($this->input->post('mobility_assist6_supine')) ? 'Yes' : 'No',
	            'mobility_assist6_stand' => ($this->input->post('mobility_assist6_stand')) ? 'Yes' : 'No',
	            'mobility_total_assist7' => "Complete Independence 7",
	            'mobility_assist7_evaldate' => $this->input->post('mobility_assist7_evaldate'),
	            'mobility_assist7_rolling' => ($this->input->post('mobility_assist7_rolling')) ? 'Yes' : 'No',
	            'mobility_assist7_supine' => ($this->input->post('mobility_assist7_supine')) ? 'Yes' : 'No',
	            'mobility_assist7_stand' => ($this->input->post('mobility_assist7_stand')) ? 'Yes' : 'No',
	            /*'mobility_notappl_assist8' => "Not Applicable",
	            'mobility_notappl_evaldate' => $this->input->post('mobility_notappl_evaldate'),
	            'mobility_notappl_rolling' => $this->input->post('mobility_notappl_rolling'),
	            'mobility_notappl_supine' => $this->input->post('mobility_notappl_supine'),
	            'mobility_notappl_stand' => $this->input->post('mobility_notappl_stand'),*/

	            'transfer_total_assist1' => "Total Assistance 1",
	            'transfer_assist1_evaldate' => $this->input->post('transfer_assist1_evaldate'),
	            'transfer_assist1_wheelchair' => ($this->input->post('transfer_assist1_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist1_car' => ($this->input->post('transfer_assist1_car')) ? 'Yes' : 'No',
	            'transfer_maximal_assist2' => "Maximal Assistance 2",
	            'transfer_assist2_evaldate' => $this->input->post('transfer_assist2_evaldate'),
	            'transfer_assist2_wheelchair' => ($this->input->post('transfer_assist2_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist2_car' => ($this->input->post('transfer_assist2_car')) ? 'Yes' : 'No',
	            'transfer_moderate_assist3' => "Moderate Assistance 3",
	            'transfer_assist3_evaldate' => $this->input->post('transfer_assist3_evaldate'),
	            'transfer_assist3_wheelchair' => ($this->input->post('transfer_assist3_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist3_car' => ($this->input->post('transfer_assist3_car')) ? 'Yes' : 'No',
	            'transfer_minimal_assist4' => "Minimal Assistance 4",
	            'transfer_assist4_evaldate' => $this->input->post('transfer_assist4_evaldate'),
	            'transfer_assist4_wheelchair' => ($this->input->post('transfer_assist4_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist4_car' => ($this->input->post('transfer_assist4_car')) ? 'Yes' : 'No',
	            'transfer_total_assist5b' => "Contact  Guarding 5 B",
	            'transfer_assist5b_evaldate' => $this->input->post('transfer_assist5b_evaldate'),
	            'transfer_assist5b_wheelchair' => ($this->input->post('transfer_assist5b_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist5b_car' => ($this->input->post('transfer_assist5b_car')) ? 'Yes' : 'No',
	            'transfer_total_assist5a' => "Supervision or setup 5 A",
	            'transfer_assist5a_evaldate' => $this->input->post('transfer_assist5a_evaldate'),
	            'transfer_assist5a_wheelchair' => ($this->input->post('transfer_assist5a_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist5a_car' => ($this->input->post('transfer_assist5a_car')) ? 'Yes' : 'No',
	            'transfer_total_assist6' => "MModified Independence 6",
	            'transfer_assist6_evaldate' => $this->input->post('transfer_assist6_evaldate'),
	            'transfer_assist6_wheelchair' => ($this->input->post('transfer_assist6_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist6_car' => ($this->input->post('transfer_assist6_car')) ? 'Yes' : 'No',
	            'transfer_total_assist7' => "Complete Independence 7",
	            'transfer_assist7_evaldate' => $this->input->post('transfer_assist7_evaldate'),
	            'transfer_assist7_wheelchair' => ($this->input->post('transfer_assist7_wheelchair')) ? 'Yes' : 'No',
	            'transfer_assist7_car' => ($this->input->post('transfer_assist7_car')) ? 'Yes' : 'No',
	            /*'transfer_notappl_assist8' => "Not Applicable",
	            'transfer_notappl_evaldate' => $this->input->post('transfer_notappl_evaldate'),
	            'transfer_notappl_wheelchair' => $this->input->post('transfer_notappl_wheelchair'),
	            'transfer_notappl_car' => $this->input->post('transfer_notappl_car'),*/
	            
	            'physio_service' => $this->input->post('physio_service'),
	            'next_eval_date' => $this->input->post('next_eval_date'),
	            'treatment_goal'		=>	 $this->input->post('treatment_goal'),
	            'treatment_goal_remark'		=>	 $this->input->post('treatment_goal_remark'),
				'therapy_time' => $this->input->post('therapy_time'),
				'gait_speed' => $this->input->post('gait_speed'),
	            'exp_session'=>$this->input->post('exp_session'),
	            /*'rel_agree'=>$this->input->post('relative_confirm'),*/
	            /*'expert_recommendation' => $this->input->post('expert_rec'),*/
	            'updated_by' => $this->session->userdata('user_id'),

	            'mobility' => $this->input->post('mobility'),
	            'mobility_remark' => $this->input->post('mobility_remark'),
	            'muscle_strength'		=>	 $this->input->post('muscle_strength'),
	            'muscle_strength_remark'		=>	 $this->input->post('muscle_strength_remark'),
	            /*'muscle_tone' => $this->input->post('muscle_tone'),
	            'breathlessness'=>$this->input->post('breathlessness'),
	            'fatigue' => $this->input->post('fatigue'),*/
	            'fim_interpreter'=>$this->input->post('fim_interpreter'),

	            'berg_bal_sit_unsupport' => $this->input->post('berg_bal_sit_unsupport'),
	            'berg_bal_sit_tostand' => $this->input->post('berg_bal_sit_tostand'),
	            'berg_bal_stand_tosit'		=>	 $this->input->post('berg_bal_stand_tosit'),
	            'berg_bal_transfer'		=>	 $this->input->post('berg_bal_transfer'),
	            'berg_bal_stand_unsupport' => $this->input->post('berg_bal_stand_unsupport'),
	            'berg_bal_stand_witheye'=>$this->input->post('berg_bal_stand_witheye'),
	            'berg_bal_stand_withfeet' => $this->input->post('berg_bal_stand_withfeet'),
	            'berg_bal_tendem_stand'=>$this->input->post('berg_bal_tendem_stand'),
	            'berg_bal_stand_oneleg' => $this->input->post('berg_bal_stand_oneleg'),
	            'berg_bal_turning_trunk' => $this->input->post('berg_bal_turning_trunk'),
	            'berg_bal_object_fromfloor'		=>	 $this->input->post('berg_bal_object_fromfloor'),
	            'berg_bal_turning_360_deg'		=>	 $this->input->post('berg_bal_turning_360_deg'),
	            'berg_bal_stool' => $this->input->post('berg_bal_stool'),
	            'berg_bal_reaching_forward'=>$this->input->post('berg_bal_reaching_forward'),
	            'berg_bal_total_score' => $this->input->post('berg_bal_total_score'),
	            'berg_bal_interpreter'=>$this->input->post('berg_bal_interpreter'),
	            'berg_bal_interpreter_remark'=>$this->input->post('berg_bal_interpreter_remark'),
	            'therapy_type'=>$this->input->post('therapy_type'),

	        	'updated_date'		=>	 date("Y-m-d h:i:s a"));
				
				if($this->input->post('expert_rec')=="Yes") {
	            $evaluation_details['rel_agree']=$this->input->post('relative_confirm');
	        	}

				if($this->input->post('therapy_type')=="ortho") {
	            $evaluation_details['ortho_special_test']=$this->input->post('ortho_special_test');
	        	}
	        	if($this->input->post('therapy_type')=="neuro" || $this->input->post('therapy_type')=="general") {
	            $evaluation_details['muscle_tone']=$this->input->post('muscle_tone');
	        	}
				
				if($this->input->post('therapy_type')=="respi" || $this->input->post('therapy_type')=="general")
				{
					
		            $evaluation_details['breathlessness']=$this->input->post('breathlessness');
		            $evaluation_details['fatigue']=$this->input->post('fatigue');
		            if($this->input->post('therapy_type')=="respi")
		            {
		            	$evaluation_details['walktest']=$this->input->post('walktest');
		            	$evaluation_details['walktest1min']=$this->input->post('walktest1min');
		            	$evaluation_details['walktest3min']=$this->input->post('walktest3min');
		            	$evaluation_details['walktest5min']=$this->input->post('walktest5min');
		        	}
				}

				/*********************Start upload video code*********************/
				$this->load->library('upload');
		if (!empty($_FILES["videofile"]["name"])) {
			$config = array(
				'allowed_types'		=>		'*',
				'upload_path'		=>realpath('public/physio_eval_video'),
				'max_size'			=>		0
			);
			// $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('videofile')){
				$video_data = $this->upload->data();
				//print_r($video_data);
				$evaluation_details['gait_video']=$video_data['file_name'];
			}
			//$error = $this->upload->display_errors();
			//print_r($error);die;	
		}
		/*********************End upload video code*********************/

				
			$update_physio_eval = $this->physio_model->update_evaluation_details($evaluation_details);
			if($update_physio_eval)
			{
				$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Evaluation details updated successfully!</div>");
				redirect(base_url().'app/physio/view/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
			}
		}
	}
	public function treatment_protocol(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$rel_agree="Yes";
		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEvalAgree'] = $this->physio_model->get_physio_evaluation($iop_no,$rel_agree);

		//$this->data['eval_no_list'] = $this->physio_model->get_eval_no_list();
		/*echo "<pre>";
		print_r($this->data['patientPhysioEvalAgree']);die;*/
		$this->load->view("app/physio/treatment_protocol",$this->data);	
	}
	public function add_treatment_protocol()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$eval_no = $this->uri->segment("6");
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
				 $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['lastPreassesID'] = $this->physio_model->lastPreassesID();
				 
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);
		
		$this->load->view('app/physio/add_treatment_protocol',$this->data);
	}
	public function treatment_protocol_save()
	{
	   
	    $week_date = $this->input->post('week_date', true);
	    $week_treatment_line = $this->input->post('week_treatment_line', true);
	    $week_remark = $this->input->post('week_remark', true);
	    $week_frequency = $this->input->post('week_frequency', true);
	    
	    //print_r($week_date);die;
	    
		$treatment_protocol_details = array(
            'eval_no' => $this->input->post('eval_no'),
            'patient_no' => $this->input->post('patient_no'),
            'iop_no' => $this->input->post('opd_no'),
            'evaluation_date' => $this->input->post('eval_date'),
            'evaluation_by' => $this->input->post('eval_by'),
            'subjective' => $this->input->post('subjective'),
            'objective' => $this->input->post('objective'),
            'assessment' => $this->input->post('assessment'),
            'treatment_goal' => $this->input->post('treatment_goal'),
            'exp_session' => $this->input->post('exp_session'),
            'start_date' => $this->input->post('start_date'),
            'end_date' => $this->input->post('end_date'),
            'first_followup_eval_date' => $this->input->post('first_followup_eval_date'),
            'first_followup_eval_date_remark' => $this->input->post('first_followup_eval_date_remark'),
            'assign_therapist' => $this->input->post('consultant_therapist'),
            'added_by' => $this->session->userdata('user_id'),
            'organization'		=>		$this->session->userdata('organization'),
        	'added_date'		=>	 date("Y-m-d h:i:s a"));

			
		$last_treatment_protocol_id = $this->physio_model->save_treatment_protocol_details($treatment_protocol_details);
		if($last_treatment_protocol_id)
		{
		$this->db->query("update physio_evaluation set treatment_protocol = 'Added',treat_protocol_id = '".$last_treatment_protocol_id."' where eval_no = '".$this->input->post('eval_no')."'");	

		if(!empty($week_date))
		{
		foreach ($week_date as $i => $a) { // need index to match other properties
				$week_plan = array(
					'week_date' => $a,
					'week_treatment_line' => isset($week_treatment_line[$i]) ? $week_treatment_line[$i] : '',
					'week_remark' => isset($week_remark[$i]) ? $week_remark[$i] : '',
					'week_frequency' => isset($week_frequency[$i]) ? $week_frequency[$i] : '',
					'eval_no' => $this->input->post('eval_no'),
					'organization'		=>		$this->session->userdata('organization'),
					'treat_protocol_id' => $last_treatment_protocol_id
				);
				
				$this->physio_model->save_week_plan_details($week_plan); 
			}
		}

	
	 $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Treatment Protocol details save successfully!</div>");
	 redirect(base_url().'app/physio/treatment_protocol/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	
	}
	}
	public function edit_treatment_protocol()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$eval_no = $this->uri->segment("6");
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
				 $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['lastPreassesID'] = $this->physio_model->lastPreassesID();
				 
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);

				 $this->data['treatment_protocol_info'] = $this->physio_model->get_treatment_protocol($eval_no);
				 /*echo "<pre>";
				 print_r($this->data['treatment_protocol_info']);die;*/
				 $this->data['physio_treatment_weekly_plan'] = $this->physio_model->physio_treatment_weekly_plan($eval_no);
				 $this->data['physio_treatment_review'] = $this->physio_model->physio_treatment_review($eval_no);
				
		$this->load->view('app/physio/edit_treatment_protocol',$this->data);
	}
	public function treatment_protocol_update()
	{
	   
	    $week_date = $this->input->post('week_date', true);
	    $week_treatment_line = $this->input->post('week_treatment_line', true);
	    $week_remark = $this->input->post('week_remark', true);
	    $week_frequency = $this->input->post('week_frequency', true);
	    
	    $review_date = $this->input->post('review_date', true);
	    $review_note = $this->input->post('review_note', true);
	    $review_frequency = $this->input->post('review_frequency', true);
	    $review_next_followup_eval_date = $this->input->post('review_next_followup_eval_date', true);
	    
	    
	    
		$update_treatment_protocol_details = array(
            'eval_no' => $this->input->post('eval_no'),
            'patient_no' => $this->input->post('patient_no'),
            'iop_no' => $this->input->post('opd_no'),
            'evaluation_date' => $this->input->post('eval_date'),
            'evaluation_by' => $this->input->post('eval_by'),
            'subjective' => $this->input->post('subjective'),
            'objective' => $this->input->post('objective'),
            'assessment' => $this->input->post('assessment'),
            'treatment_goal' => $this->input->post('treatment_goal'),
            'exp_session' => $this->input->post('exp_session'),
            'start_date' => $this->input->post('start_date'),
            'end_date' => $this->input->post('end_date'),
            'first_followup_eval_date' => $this->input->post('first_followup_eval_date'),
            'first_followup_eval_date_remark' => $this->input->post('first_followup_eval_date_remark'),
            'assign_therapist' => $this->input->post('consultant_therapist'),
            'updated_by' => $this->session->userdata('user_id'),
        	'updated_date'		=>	 date("Y-m-d h:i:s a"));

			
		$update_treatment_protocol_id = $this->physio_model->update_treatment_protocol_details($update_treatment_protocol_details);
		if($update_treatment_protocol_id)
		{
			
		if(!empty($week_date))
		{
			$this->db->delete('physio_treatment_protocol_week_plan',array('eval_no'=>$this->input->post('eval_no')));
		foreach ($week_date as $i => $a) { // need index to match other properties
				$week_plan = array(
					'week_date' => $a,
					'week_treatment_line' => isset($week_treatment_line[$i]) ? $week_treatment_line[$i] : '',
					'week_remark' => isset($week_remark[$i]) ? $week_remark[$i] : '',
					'week_frequency' => isset($week_frequency[$i]) ? $week_frequency[$i] : '',
					'eval_no' => $this->input->post('eval_no'),
					'organization'		=>		$this->session->userdata('organization'),
					'treat_protocol_id' => $this->input->post('treat_protocol_id')
				);
				
				$this->physio_model->save_week_plan_details($week_plan); 
			}
		}

		if(!empty($review_date))
		{
			$this->db->delete('physio_treatment_protocol_review',array('eval_no'=>$this->input->post('eval_no')));
		foreach ($review_date as $rev_i => $rev_a) { // need index to match other properties
				$review_plan = array(
					'review_date' => $rev_a,
					'review_note' => isset($review_note[$rev_i]) ? $review_note[$rev_i] : '',
					'review_next_followup_eval_date' => isset($review_next_followup_eval_date[$rev_i]) ? $review_next_followup_eval_date[$rev_i] : '',
					'review_frequency' => isset($review_frequency[$rev_i]) ? $review_frequency[$rev_i] : '',
					'eval_no' => $this->input->post('eval_no'),
					'organization'		=>		$this->session->userdata('organization'),
					'treat_protocol_id' => $this->input->post('treat_protocol_id')
				);
				
				$this->physio_model->save_review_details($review_plan); 
			}
		}

	
	 $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Treatment Protocol details updated successfully!</div>");
	 redirect(base_url().'app/physio/treatment_protocol/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	
	}
	}

	public function treatment_protocol_pdf()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$eval_no = $this->uri->segment("6");
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
				 $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['lastPreassesID'] = $this->physio_model->lastPreassesID();
				 
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);

				 $this->data['treatment_protocol_info'] = $this->physio_model->get_treatment_protocol($eval_no);
				 $this->data['physio_treatment_weekly_plan'] = $this->physio_model->physio_treatment_weekly_plan($eval_no);
				 $this->data['physio_treatment_review'] = $this->physio_model->physio_treatment_review($eval_no);
				 
				  $dompdf = new Dompdf();
	            $dompdf->set_option('isRemoteEnabled',TRUE);
	            $canvas=$dompdf->get_canvas();
		
		
		$html = $this->load->view('app/physio/treatment_protocol_pdf',$this->data,true);
		 
		 $dompdf->loadHtml($html);
	           
	            // Render the HTML as PDF
	            $dompdf->render();
	            // Output the generated PDF to Browser
	            $evalFileName = 'Discharged.pdf';
	             //$evalFileName = 'Discharged-'.$this->data['ptnEvalInfo']->eval_no.'.pdf';
	            // $dompdf->stream($invoiceFileName,array("Attachment" => 0));

	            $dompdf->stream($evalFileName,array("Attachment" => 1));
				
		//$this->load->view('app/physio/treatment_protocol_pdf',$this->data);
	}
	public function view_treatment_protocol()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$eval_no = $this->uri->segment("6");
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
				 $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['lastPreassesID'] = $this->physio_model->lastPreassesID();
				 
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);

				 $this->data['treatment_protocol_info'] = $this->physio_model->get_treatment_protocol($eval_no);
				 $this->data['physio_treatment_weekly_plan'] = $this->physio_model->physio_treatment_weekly_plan($eval_no);
				 $this->data['physio_treatment_review'] = $this->physio_model->physio_treatment_review($eval_no);
				
		$this->load->view('app/physio/view_treatment_protocol',$this->data);
	}
	public function physio_discharge_summary_list(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		

		//$this->data['eval_no_list'] = $this->physio_model->get_eval_no_list();
		$this->data['physioDischargeList'] = $this->physio_model->get_physio_discharge($iop_no);
		
		$this->load->view("app/physio/physio_discharge_summary_list",$this->data);	
	}
	public function physio_discharge_summary(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
	
		
		$abc = $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['eval_no_list'] = $this->physio_model->get_eval_no_list($iop_no);
		
        $this->load->view("app/physio/physio_discharge_summary",$this->data);	

	}
	public function physio_dis_summ_add(){

		if(isset($_POST['btnSave'])){
			$where = "(
		eval_no= '".$this->input->post('eval_no')."' 
		) 
		and InActive = 0";
		$this->db->where($where);
		$query = $this->db->get("physio_discharge_summary");
		
		if($query->num_rows() > 0)
		{
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Patient has already been discharged.</div>");
		}
		else{
				$physio_discharge_summary_details = array(
			            'eval_no' => $this->input->post('eval_no'),
			            'patient_no' => $this->input->post('patient_no'),
			            'iop_id' => $this->input->post('opd_no'),
			            'Diagnosis' => $this->input->post('Diagnosis'),
			            'fim_score1_eval_date' => $this->input->post('fim_score_eval_date'),
			            'start_date' => $this->input->post('start_date'),
			            'end_date' => $this->input->post('end_date'),
			            'goal_achieved' => $this->input->post('goal_achieved'),
			            'further_recommendation' => $this->input->post('further_recommendation'),
						'therapy_status' => $this->input->post('therapy_status'),
			            'added_date' => date('Y-m-d H:i:s'),
			            'organization'		=>		$this->session->userdata('organization'),
			            'added_by' => $this->session->userdata('user_id'),
	
					);
				if($this->input->post('therapy_status')=="Deceased")
			            {
			            	$physio_discharge_summary_details['date_of_admission']=$this->input->post('date_of_admission');
			            	$physio_discharge_summary_details['date_of_death']=$this->input->post('date_of_death');
			            	$physio_discharge_summary_details['time_of_death']=$this->input->post('time_of_death');
			            	$physio_discharge_summary_details['causes_of_death']=$this->input->post('causes_of_death');
			            	$physio_discharge_summary_details['contact_no']=$this->input->post('contact_no');
			            }


						
					$insert_data=$this->physio_model->save_physio_discharge_summary($physio_discharge_summary_details);
					if($insert_data){

						$evalNo = $this->input->post('eval_no');
						$dischargeStatus = ($this->input->post('therapy_status') == "Completed") ? 'Discharged' : 'Deceased';
						$this->db->query("UPDATE physio_evaluation SET physio_discharged = '{$dischargeStatus}' WHERE eval_no = '{$evalNo}'");
						$this->db->query("UPDATE physio_treatment_protocol SET physio_discharged = '{$dischargeStatus}' WHERE eval_no = '{$evalNo}'");

					}
				
				$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Successfully discharged the patient!</div>");
			}	
				redirect(base_url().'app/Physio/physio_discharge_summary_list/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
			
		}

	}
	public function edit_physio_discharge_summary(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$physio_discharge_id = $this->uri->segment("7");
	
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
	    $this->data['discharge_summary_info'] = $this->physio_model->get_discharge_summary($physio_discharge_id);
		$this->data['eval_no_list'] = $this->physio_model->get_eval_no_list($iop_no);
		
		$this->load->view("app/physio/edit_physio_discharge_summary",$this->data);	
	}
	public function physio_dis_summ_update(){
		if(isset($_POST['btnSave'])){
			if($this->input->post('cur_eval_no')==$this->input->post('eval_no')){
				$where = "(
					eval_no= '".$this->input->post('cur_eval_no')."' 
					) 
					and InActive = 0";
					$this->db->where($where);
					$query = $this->db->get("physio_discharge_summary");
					
					if($query->num_rows() > 0)
					{
						$physio_discharge_summary_details = array(
			            'eval_no' => $this->input->post('cur_eval_no'),
			            'patient_no' => $this->input->post('patient_no'),
			            'iop_id' => $this->input->post('opd_no'),
			            'Diagnosis' => $this->input->post('Diagnosis'),
			            'fim_score1_eval_date' => $this->input->post('fim_score_eval_date'),
			            'start_date' => $this->input->post('start_date'),
			            'end_date' => $this->input->post('end_date'),
			            'goal_achieved' => $this->input->post('goal_achieved'),
			            'further_recommendation' => $this->input->post('further_recommendation'),
						'therapy_status' => $this->input->post('therapy_status'),
			            'updated_date' =>date('Y-m-d H:i:s'),
			            'updated_by' => $this->session->userdata('user_id'));
			            if($this->input->post('therapy_status')=="Deceased")
			            {
			            	$physio_discharge_summary_details['date_of_admission']=$this->input->post('date_of_admission');
			            	$physio_discharge_summary_details['date_of_death']=$this->input->post('date_of_death');
			            	$physio_discharge_summary_details['time_of_death']=$this->input->post('time_of_death');
			            	$physio_discharge_summary_details['causes_of_death']=$this->input->post('causes_of_death');
			            	$physio_discharge_summary_details['contact_no']=$this->input->post('contact_no');
			            }
					$this->physio_model->update_physio_discharge_summary($physio_discharge_summary_details);
							
							$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Successfully updated discharged the patient!</div>");
					}

			}elseif($this->input->post('cur_eval_no')!=$this->input->post('eval_no')){
				$where = "(
					eval_no= '".$this->input->post('eval_no')."' 
					) 
					and InActive = 0";
					$this->db->where($where);
					$query = $this->db->get("physio_discharge_summary");
					
					if($query->num_rows() > 0)
					{
						$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Patient has already been discharged.</div>");

					}
					else{
						$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Oops! Something went wrong. Please try again.</div>");

					}	
				}

	
				redirect(base_url().'app/Physio/physio_discharge_summary_list/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
			
		}

	}

	public function get_treatment_protocol_data($eval_no){
		$this->data['particularData'] = $this->physio_model->get_treatment_protocol_data($eval_no);
		if(!empty($this->data['particularData'])){
		    echo json_encode($this->data['particularData']);die;
		
		}
	}


	public function physio_discharge_summary_pdf(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$physio_discharge_id = $this->uri->segment("7");
	
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
	
		$this->data['discharge_summary_info'] = $this->physio_model->get_discharge_summary($physio_discharge_id);
		//$this->data['eval_no_list'] = $this->physio_model->get_eval_no_list();

		 $dompdf = new Dompdf();
	            $dompdf->set_option('isRemoteEnabled',TRUE);
	            $canvas=$dompdf->get_canvas();
		
		
		$html = $this->load->view('app/physio/physio_discharge_summary_pdf',$this->data,true);
		 
		 $dompdf->loadHtml($html);
	           
	            // Render the HTML as PDF
	            $dompdf->render();
	            // Output the generated PDF to Browser
	            $evalFileName = 'Discharged.pdf';
	             //$evalFileName = 'Discharged-'.$this->data['ptnEvalInfo']->eval_no.'.pdf';
	            // $dompdf->stream($invoiceFileName,array("Attachment" => 0));

	            $dompdf->stream($evalFileName,array("Attachment" => 1));	


		
	
		
	}
	
	public function view_physio_discharge_summary(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$physio_discharge_id = $this->uri->segment("7");
	
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
	
		$this->data['discharge_summary_info'] = $this->physio_model->get_discharge_summary($physio_discharge_id);
		$this->data['eval_no_list'] = $this->physio_model->get_eval_no_list($iop_no);
		
		$this->load->view("app/physio/view_physio_discharge_summary",$this->data);	
	}
	public function physio_daily_notes(){
		if(isset($_POST['btnSave'])){
			$this->data = array(
				'iop_id'		=>		$this->input->post('opd_no'),
				'patient_no'		=>	$this->input->post('patient_no'),
				'eval_no'		=>		$this->input->post('eval_no'),
				'session_date'			=>		$this->input->post('dDate'),
				'session_time'			=>		$this->input->post('dTime'),
				'notes'			=>		!empty($this->input->post('notes')) ? $this->input->post('notes') : '',
				'therapy_charges'			=>		'450',
				'added_date'		=>		date("Y-m-d h:i:s A"),
				'added_by'	=>		$this->session->userdata('user_id'),
				'organization'		=>		$this->session->userdata('organization'),
				'InActive'		=>		0
			);
			$this->db->insert('physio_notes',$this->data);
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Notes successfully Added!</div>");
		
			redirect(base_url().'app/physio/physio_daily_notes/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}else{

		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$rel_agree="Yes";
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEvalAgree'] = $this->physio_model->get_physio_evaluation($iop_no,$rel_agree);
		$this->data['physioNotes'] = $this->physio_model->get_physio_notes($iop_no);
		$this->data['eval_no_list'] = $this->physio_model->get_eval_no_list($iop_no);
		$this->data['eval_no_list1'] = $this->physio_model->get_eval_no_list($iop_no);
		
		// echo "<pre>";
		// print_r($this->data['physioNotes']);die;
		$this->load->view("app/physio/physio_daily_notes",$this->data);
		}

			
	}
	public function delete_physio_daily_notes(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update physio_notes set InActive = 1 where physio_notes_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Notes successfully Deleted!</div>");
		
		redirect(base_url().'app/physio/physio_daily_notes/'.$iop_no.'/'.$patient_no,$this->data);
	}
	public function update_physio_daily_notes()
	{
	   
		$update_physio_daily_notes = array(
			'eval_no' => $this->input->post('eval_no'),
			'session_date'		=>	 $this->input->post('dDate'),
			'session_time' =>  $this->input->post('dTime'),
			'notes' =>  $this->input->post('notes'),
			'updated_date'			=>		date("Y-m-d h:i:s a"),
			'updated_by'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);
	      
			$update_physio_daily_notes1 = $this->physio_model->update_physio_daily_notes($update_physio_daily_notes);

			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Notes successfully Updated!</div>");
			
			redirect(base_url().'app/physio/physio_daily_notes/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
	public function bill(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEval'] = $this->physio_model->get_physio_evaluation($iop_no);
		
		$this->load->view("app/physio/bill",$this->data);	
	}

	public function print_invoice()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		/*if(!empty($invoice_id) && $invoice_id)
		{*/
			
			$this->data['invoiceItems'] = $this->physio_model->generate_lab_bill($iop_no,$patient_no);
			/*echo "<pre>";
			print_r($this->data['invoiceItems']);die;*/
			$this->data['title'] ="hi";
            
			$dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled',TRUE);
            $canvas=$dompdf->get_canvas();
            //$this->load->view('app/doctor/preassessment_report',$this->data);
            $html = $this->load->view('app/physio/print_invoice',$this->data,true);

            $dompdf->loadHtml($html);
           
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser
            /*$invoiceFileName = 'Invoice-'.$this->data['invoiceValues'][0]['order_id'].'.pdf';
            $dompdf->stream($invoiceFileName,array("Attachment" => 0));*/

            $dompdf->stream('bill.pdf',array("Attachment" => 0));
		/*}*/
		
		    // $this->load->view('app/billing/print_invoice',$this->data);
	}

	function view_physio_notes($physio_notes_id){
        $data = $this->physio_model->view_physio_notes($physio_notes_id);
        //print_r($data);die;
        // header('Content-Type: application/json');
        echo json_encode($data);
     }
	// Example controller function

	public function physio_deceased_patient_information(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$rel_agree="Yes";
		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEvalAgree'] = $this->physio_model->get_physio_evaluation($iop_no,$rel_agree);

		$this->data['eval_no_list'] = $this->physio_model->get_eval_no_list();
		/*echo "<pre>";
		print_r($this->data['eval_no_list']);
		print_r($this->data['patientPhysioEvalAgree']);die;*/
		$this->load->view("app/physio/physio_deceased_patient_information",$this->data);	
	}
	public function get_treatment_line_data($eval_no){
		$this->data['particularData'] = $this->physio_model->get_treatment_line_data($eval_no);
		if(!empty($this->data['particularData'])){
		    echo json_encode($this->data['particularData']);die;
		
		}
	}


	}



