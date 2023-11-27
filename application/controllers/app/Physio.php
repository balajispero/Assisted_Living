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
// 		print_r($patient);die;
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
        $attachment = chunk_split(base64_encode(file_get_contents($file)));

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

            $subject = "Health updates of " /*. @$this->data['patientInfo']->middlename*/;

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
	            'ptn_tightness' => $this->input->post('ptn_tightness'),
	            'ptn_tightness_remark' => $this->input->post('ptn_tightness_remark'),
	            'ptn_upper_body' => $this->input->post('ptn_upper_body'),
	            'ptn_upper_body_remark' => $this->input->post('ptn_upper_body_remark'),
	            'lower_body' => $this->input->post('lower_body'),
	            'ptn_pain' => $this->input->post('ptn_pain'),
	            'nature' => $this->input->post('nature'),

	           	'mobility_total_assist1' => "Total Assistance 1",
	            'mobility_assist1_evaldate' => $this->input->post('mobility_assist1_evaldate'),
	            'mobility_assist1_rolling' => $this->input->post('mobility_assist1_rolling'),
	            'mobility_assist1_supine' => $this->input->post('mobility_assist1_supine'),
	            'mobility_assist1_stand' => $this->input->post('mobility_assist1_stand'),
	            'mobility_maximal_assist2' => "Maximal Assistance 2",
	            'mobility_assist2_evaldate' => $this->input->post('mobility_assist2_evaldate'),
	            'mobility_assist2_rolling' => $this->input->post('mobility_assist2_rolling'),
	            'mobility_assist2_supine' => $this->input->post('mobility_assist2_supine'),
	            'mobility_assist2_stand' => $this->input->post('mobility_assist2_stand'),
	            'mobility_moderate_assist3' => "Moderate Assistance 3",
	            'mobility_assist3_evaldate' => $this->input->post('mobility_assist3_evaldate'),
	            'mobility_assist3_rolling' => $this->input->post('mobility_assist3_rolling'),
	            'mobility_assist3_supine' => $this->input->post('mobility_assist3_supine'),
	            'mobility_assist3_stand' => $this->input->post('mobility_assist3_stand'),
	            'mobility_minimal_assist4' => "Minimal Assistance 4",
	            'mobility_assist4_evaldate' => $this->input->post('mobility_assist4_evaldate'),
	            'mobility_assist4_rolling' => $this->input->post('mobility_assist4_rolling'),
	            'mobility_assist4_supine' => $this->input->post('mobility_assist4_supine'),
	            'mobility_assist4_stand' => $this->input->post('mobility_assist4_stand'),
	            'mobility_total_assist5a' => "Contact  Guarding 5 A",
	            'mobility_assist5a_evaldate' => $this->input->post('mobility_assist5a_evaldate'),
	            'mobility_assist5a_rolling' => $this->input->post('mobility_assist5a_rolling'),
	            'mobility_assist5a_supine' => $this->input->post('mobility_assist5a_supine'),
	            'mobility_assist5a_stand' => $this->input->post('mobility_assist5a_stand'),
	            'mobility_total_assist5b' => "Supervision or setup 5 B",
	            'mobility_assist5b_evaldate' => $this->input->post('mobility_assist5b_evaldate'),
	            'mobility_assist5b_rolling' => $this->input->post('mobility_assist5b_rolling'),
	            'mobility_assist5b_supine' => $this->input->post('mobility_assist5b_supine'),
	            'mobility_assist5b_stand' => $this->input->post('mobility_assist5b_stand'),
	            'mobility_total_assist6' => "Modified Independence 6",
	            'mobility_assist6_evaldate' => $this->input->post('mobility_assist6_evaldate'),
	            'mobility_assist6_rolling' => $this->input->post('mobility_assist6_rolling'),
	            'mobility_assist6_supine' => $this->input->post('mobility_assist6_supine'),
	            'mobility_assist6_stand' => $this->input->post('mobility_assist6_stand'),
	            'mobility_total_assist7' => "Complete Independence 7",
	            'mobility_assist7_evaldate' => $this->input->post('mobility_assist7_evaldate'),
	            'mobility_assist7_rolling' => $this->input->post('mobility_assist7_rolling'),
	            'mobility_assist7_supine' => $this->input->post('mobility_assist7_supine'),
	            'mobility_assist7_stand' => $this->input->post('mobility_assist7_stand'),
	            'mobility_notappl_assist8' => "Not Applicable",
	            'mobility_notappl_evaldate' => $this->input->post('mobility_notappl_evaldate'),
	            'mobility_notappl_rolling' => $this->input->post('mobility_notappl_rolling'),
	            'mobility_notappl_supine' => $this->input->post('mobility_notappl_supine'),
	            'mobility_notappl_stand' => $this->input->post('mobility_notappl_stand'),

	            'transfer_total_assist1' => "Total Assistance 1",
	            'transfer_assist1_evaldate' => $this->input->post('transfer_assist1_evaldate'),
	            'transfer_assist1_wheelchair' => $this->input->post('transfer_assist1_wheelchair'),
	            'transfer_assist1_car' => $this->input->post('transfer_assist1_car'),
	            'transfer_maximal_assist2' => "Maximal Assistance 2",
	            'transfer_assist2_evaldate' => $this->input->post('transfer_assist2_evaldate'),
	            'transfer_assist2_wheelchair' => $this->input->post('transfer_assist2_wheelchair'),
	            'transfer_assist2_car' => $this->input->post('transfer_assist2_car'),
	            'transfer_moderate_assist3' => "Moderate Assistance 3",
	            'transfer_assist3_evaldate' => $this->input->post('transfer_assist3_evaldate'),
	            'transfer_assist3_wheelchair' => $this->input->post('transfer_assist3_wheelchair'),
	            'transfer_assist3_car' => $this->input->post('transfer_assist3_car'),
	            'transfer_minimal_assist4' => "Minimal Assistance 4",
	            'transfer_assist4_evaldate' => $this->input->post('transfer_assist4_evaldate'),
	            'transfer_assist4_wheelchair' => $this->input->post('transfer_assist4_wheelchair'),
	            'transfer_assist4_car' => $this->input->post('transfer_assist4_car'),
	            'transfer_total_assist5b' => "Contact  Guarding 5 B",
	            'transfer_assist5b_evaldate' => $this->input->post('transfer_assist5b_evaldate'),
	            'transfer_assist5b_wheelchair' => $this->input->post('transfer_assist5b_wheelchair'),
	            'transfer_assist5b_car' => $this->input->post('transfer_assist5b_car'),
	            'transfer_total_assist5a' => "Supervision or setup 5 A",
	            'transfer_assist5a_evaldate' => $this->input->post('transfer_assist5a_evaldate'),
	            'transfer_assist5a_wheelchair' => $this->input->post('transfer_assist5a_wheelchair'),
	            'transfer_assist5a_car' => $this->input->post('transfer_assist5a_car'),
	            'transfer_total_assist6' => "MModified Independence 6",
	            'transfer_assist6_evaldate' => $this->input->post('transfer_assist6_evaldate'),
	            'transfer_assist6_wheelchair' => $this->input->post('transfer_assist6_wheelchair'),
	            'transfer_assist6_car' => $this->input->post('transfer_assist6_car'),
	            'transfer_total_assist7' => "Complete Independence 7",
	            'transfer_assist7_evaldate' => $this->input->post('transfer_assist7_evaldate'),
	            'transfer_assist7_wheelchair' => $this->input->post('transfer_assist7_wheelchair'),
	            'transfer_assist7_car' => $this->input->post('transfer_assist7_car'),
	            'transfer_notappl_assist8' => "Not Applicable",
	            'transfer_notappl_evaldate' => $this->input->post('transfer_notappl_evaldate'),
	            'transfer_notappl_wheelchair' => $this->input->post('transfer_notappl_wheelchair'),
	            'transfer_notappl_car' => $this->input->post('transfer_notappl_car'),
	            
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
	            'InActive'=>0,
	        	'added_date'		=>	 date("Y-m-d h:i:s a"));

				
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
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);
				 
		
		$this->load->view('app/physio/view_evaluation',$this->data);
	}

	public function edit_evaluation($eval_no)
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 //$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['ptnEvalInfo'] = $this->physio_model->get_evaluation_data($eval_no);
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
	            'ptn_tightness' => $this->input->post('ptn_tightness'),
	            'ptn_upper_body' => $this->input->post('ptn_upper_body'),
	            'lower_body' => $this->input->post('lower_body'),
	            'ptn_pain' => $this->input->post('ptn_pain'),
	            'ptn_tightness_remark' => $this->input->post('ptn_tightness_remark'),
				'ptn_upper_body_remark' => $this->input->post('ptn_upper_body_remark'),
				'nature' => $this->input->post('nature'),

	           	'mobility_total_assist1' => "Total Assistance 1",
	            'mobility_assist1_evaldate' => $this->input->post('mobility_assist1_evaldate'),
	            'mobility_assist1_rolling' => $this->input->post('mobility_assist1_rolling'),
	            'mobility_assist1_supine' => $this->input->post('mobility_assist1_supine'),
	            'mobility_assist1_stand' => $this->input->post('mobility_assist1_stand'),
	            'mobility_maximal_assist2' => "Maximal Assistance 2",
	            'mobility_assist2_evaldate' => $this->input->post('mobility_assist2_evaldate'),
	            'mobility_assist2_rolling' => $this->input->post('mobility_assist2_rolling'),
	            'mobility_assist2_supine' => $this->input->post('mobility_assist2_supine'),
	            'mobility_assist2_stand' => $this->input->post('mobility_assist2_stand'),
	            'mobility_moderate_assist3' => "Moderate Assistance 3",
	            'mobility_assist3_evaldate' => $this->input->post('mobility_assist3_evaldate'),
	            'mobility_assist3_rolling' => $this->input->post('mobility_assist3_rolling'),
	            'mobility_assist3_supine' => $this->input->post('mobility_assist3_supine'),
	            'mobility_assist3_stand' => $this->input->post('mobility_assist3_stand'),
	            'mobility_minimal_assist4' => "Minimal Assistance 4",
	            'mobility_assist4_evaldate' => $this->input->post('mobility_assist4_evaldate'),
	            'mobility_assist4_rolling' => $this->input->post('mobility_assist4_rolling'),
	            'mobility_assist4_supine' => $this->input->post('mobility_assist4_supine'),
	            'mobility_assist4_stand' => $this->input->post('mobility_assist4_stand'),
	            'mobility_total_assist5a' => "Contact  Guarding 5 A",
	            'mobility_assist5a_evaldate' => $this->input->post('mobility_assist5a_evaldate'),
	            'mobility_assist5a_rolling' => $this->input->post('mobility_assist5a_rolling'),
	            'mobility_assist5a_supine' => $this->input->post('mobility_assist5a_supine'),
	            'mobility_assist5a_stand' => $this->input->post('mobility_assist5a_stand'),
	            'mobility_total_assist5b' => "Supervision or setup 5 B",
	            'mobility_assist5b_evaldate' => $this->input->post('mobility_assist5b_evaldate'),
	            'mobility_assist5b_rolling' => $this->input->post('mobility_assist5b_rolling'),
	            'mobility_assist5b_supine' => $this->input->post('mobility_assist5b_supine'),
	            'mobility_assist5b_stand' => $this->input->post('mobility_assist5b_stand'),
	            'mobility_total_assist6' => "Modified Independence 6",
	            'mobility_assist6_evaldate' => $this->input->post('mobility_assist6_evaldate'),
	            'mobility_assist6_rolling' => $this->input->post('mobility_assist6_rolling'),
	            'mobility_assist6_supine' => $this->input->post('mobility_assist6_supine'),
	            'mobility_assist6_stand' => $this->input->post('mobility_assist6_stand'),
	            'mobility_total_assist7' => "Complete Independence 7",
	            'mobility_assist7_evaldate' => $this->input->post('mobility_assist7_evaldate'),
	            'mobility_assist7_rolling' => $this->input->post('mobility_assist7_rolling'),
	            'mobility_assist7_supine' => $this->input->post('mobility_assist7_supine'),
	            'mobility_assist7_stand' => $this->input->post('mobility_assist7_stand'),
	            'mobility_notappl_assist8' => "Not Applicable",
	            'mobility_notappl_evaldate' => $this->input->post('mobility_notappl_evaldate'),
	            'mobility_notappl_rolling' => $this->input->post('mobility_notappl_rolling'),
	            'mobility_notappl_supine' => $this->input->post('mobility_notappl_supine'),
	            'mobility_notappl_stand' => $this->input->post('mobility_notappl_stand'),

	            'transfer_total_assist1' => "Total Assistance 1",
	            'transfer_assist1_evaldate' => $this->input->post('transfer_assist1_evaldate'),
	            'transfer_assist1_wheelchair' => $this->input->post('transfer_assist1_wheelchair'),
	            'transfer_assist1_car' => $this->input->post('transfer_assist1_car'),
	            'transfer_maximal_assist2' => "Maximal Assistance 2",
	            'transfer_assist2_evaldate' => $this->input->post('transfer_assist2_evaldate'),
	            'transfer_assist2_wheelchair' => $this->input->post('transfer_assist2_wheelchair'),
	            'transfer_assist2_car' => $this->input->post('transfer_assist2_car'),
	            'transfer_moderate_assist3' => "Moderate Assistance 3",
	            'transfer_assist3_evaldate' => $this->input->post('transfer_assist3_evaldate'),
	            'transfer_assist3_wheelchair' => $this->input->post('transfer_assist3_wheelchair'),
	            'transfer_assist3_car' => $this->input->post('transfer_assist3_car'),
	            'transfer_minimal_assist4' => "Minimal Assistance 4",
	            'transfer_assist4_evaldate' => $this->input->post('transfer_assist4_evaldate'),
	            'transfer_assist4_wheelchair' => $this->input->post('transfer_assist4_wheelchair'),
	            'transfer_assist4_car' => $this->input->post('transfer_assist4_car'),
	            'transfer_total_assist5b' => "Contact  Guarding 5 B",
	            'transfer_assist5b_evaldate' => $this->input->post('transfer_assist5b_evaldate'),
	            'transfer_assist5b_wheelchair' => $this->input->post('transfer_assist5b_wheelchair'),
	            'transfer_assist5b_car' => $this->input->post('transfer_assist5b_car'),
	            'transfer_total_assist5a' => "Supervision or setup 5 A",
	            'transfer_assist5a_evaldate' => $this->input->post('transfer_assist5a_evaldate'),
	            'transfer_assist5a_wheelchair' => $this->input->post('transfer_assist5a_wheelchair'),
	            'transfer_assist5a_car' => $this->input->post('transfer_assist5a_car'),
	            'transfer_total_assist6' => "MModified Independence 6",
	            'transfer_assist6_evaldate' => $this->input->post('transfer_assist6_evaldate'),
	            'transfer_assist6_wheelchair' => $this->input->post('transfer_assist6_wheelchair'),
	            'transfer_assist6_car' => $this->input->post('transfer_assist6_car'),
	            'transfer_total_assist7' => "Complete Independence 7",
	            'transfer_assist7_evaldate' => $this->input->post('transfer_assist7_evaldate'),
	            'transfer_assist7_wheelchair' => $this->input->post('transfer_assist7_wheelchair'),
	            'transfer_assist7_car' => $this->input->post('transfer_assist7_car'),
	            'transfer_notappl_assist8' => "Not Applicable",
	            'transfer_notappl_evaldate' => $this->input->post('transfer_notappl_evaldate'),
	            'transfer_notappl_wheelchair' => $this->input->post('transfer_notappl_wheelchair'),
	            'transfer_notappl_car' => $this->input->post('transfer_notappl_car'),
	            
	            'physio_service' => $this->input->post('physio_service'),
	            'next_eval_date' => $this->input->post('next_eval_date'),
	            'treatment_goal'		=>	 $this->input->post('treatment_goal'),
	            'treatment_goal_remark'		=>	 $this->input->post('treatment_goal_remark'),
				'therapy_time' => $this->input->post('therapy_time'),
				'gait_speed' => $this->input->post('gait_speed'),
	            'exp_session'=>$this->input->post('exp_session'),
	            /*'expert_recommendation' => $this->input->post('expert_rec'),*/
	            'updated_by' => $this->session->userdata('user_id'),
	        	'updated_date'		=>	 date("Y-m-d h:i:s a"));

				
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
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEvalAgree'] = $this->physio_model->get_physio_evaluation($iop_no,$rel_agree);
		/*echo "<pre>";
		print_r($this->data['patientPhysioEval']);*/
		$this->load->view("app/physio/treatment_protocol",$this->data);	
	}
	public function add_treatment_protocol()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$this->session->set_userdata(array(
				 'tab'			=>		'',
				 'module'		=>		'',
				 'subtab'		=>		'',
				 'submodule'	=>		''));
				 $this->data['message'] = $this->session->flashdata('message');

				 $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
				 $this->data['lastPreassesID'] = $this->physio_model->lastPreassesID();
		
		$this->load->view('app/physio/add_treatment_protocol',$this->data);
	}

	public function view_treatment_protocol(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		
		$this->load->view("app/physio/view_treatment_protocol",$this->data);	
	}
	public function physio_discharge_summary(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$rel_agree="Yes";
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEvalAgree'] = $this->physio_model->get_physio_evaluation($iop_no,$rel_agree);
		/*echo "<pre>";
		print_r($this->data['patientPhysioEval']);*/
		$this->load->view("app/physio/physio_discharge_summary",$this->data);	
	}
	public function physio_daily_notes(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$rel_agree="Yes";
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['patientPhysioEvalAgree'] = $this->physio_model->get_physio_evaluation($iop_no,$rel_agree);
		/*echo "<pre>";
		print_r($this->data['patientPhysioEval']);*/
		$this->load->view("app/physio/physio_daily_notes",$this->data);	
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
		//print_r($invoice_id);
		/*if(!empty($invoice_id) && $invoice_id)
		{*/
			//$this->data['invoiceValues'] = $this->Invoicemodel->getInvoice($invoice_id);	
				
			$this->data['invoiceItems'] = $this->physio_model->generate_lab_bill();
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


}
