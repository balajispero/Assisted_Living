<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';      
use Dompdf\Dompdf;

require APPPATH.'controllers/General.php'; 

class Ipd extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		$this->load->model("app/ipd_model");
		$this->load->model("app/Opd_model");
		$this->load->model("app/billing_model");
		$this->load->model("General_model");
		$this->load->model("app/patient_model");
		if(General::is_logged_in() == FALSE){
            redirect(base_url().'login');    
        }
        $ptn_organization = $this->General_model->getptn_organization($this->uri->segment("4"));
        if($this->uri->segment("4"))
        {
			/*if($this->session->userdata('organization')!=$ptn_organization->organization){
						redirect(base_url().'access_denied');
					}*/
		}
		General::variable();	
	}
	
	public function index($offset = 0){
		// user restriction function
				$this->session->set_userdata('page_name','ipd_enquiry');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
				 
		$this->session->set_userdata(array(
				 'tab'			=>		'patient',
				 'module'		=>		'',
				 'subtab'		=>		'ipd',
				 'submodule'	=>		'ipd_master'));
		
		//set session in textfield to paginate the table		 
		$this->session->set_userdata(array(
			'search_ipd'				=>		$this->input->post('search'),
			'search_ipd_cFrom'			=>		$this->input->post('cFrom'),
			'search_ipd_cTo'			=>		$this->input->post('cTo'),
			'search_ipd_department'		=>		$this->input->post('department'),
			'search_ipd_doctor'			=>		$this->input->post('doctor')
		));		 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->ipd_model->getAll($this->limit, $offset);
		
		$config['base_url'] = base_url().'app/ipd/index/';
 		$config['total_rows'] = $this->ipd_model->count_all();
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
		// $i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				if($patient->nStatus == "Pending"){ 
					$nStatus = "Checked In";
					$discharge = "Admitted";
				// 	$discharge = anchor('app/ipd/discharge/'.$patient->IO_ID.'/'.$patient->patient_no,'Discharge',array('class'=>'delete','onclick'=>"return confirm('Are you sure want to discharge patient?')"));
				}else{ 
					$nStatus = "Discharged";
					$discharge = "Discharged";
					$discharge = anchor('app/ipd/discharge_pdf/'.$patient->IO_ID.'/'.$patient->patient_no,'Discharged',array('class'=>'delete'));
				}
				
				$this->table->add_row( 
									// $patient->IO_ID,
									$patient->patient_no,
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." & Bed No.".$patient->bed_name, 
									$patient->doctor,
									/*$nStatus,*/
									$discharge
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();

		$this->load->view('app/ipd/index',$this->data);	
	}
	public function patient_discharge($offset = 0){
		// user restriction function
				$this->session->set_userdata('page_name','ipd_enquiry');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
				 
		$this->session->set_userdata(array(
				 'tab'			=>		'doctor',
				 'module'		=>		'ipd_doctor',
				 'subtab'		=>		'ipd',
				 'submodule'	=>		'ptn_DC'));
		
		//set session in textfield to paginate the table		 
		$this->session->set_userdata(array(
			'search_ipd'				=>		$this->input->post('search'),
			'search_ipd_cFrom'			=>		$this->input->post('cFrom'),
			'search_ipd_cTo'			=>		$this->input->post('cTo'),
			'search_ipd_department'		=>		$this->input->post('department'),
			'search_ipd_doctor'			=>		$this->input->post('doctor')
		));		 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->ipd_model->getAll($this->limit, $offset);
		
		$config['base_url'] = base_url().'app/ipd/patient_discharge/';
 		$config['total_rows'] = $this->ipd_model->count_all();
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
		// $i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				if($patient->nStatus == "Pending"){ 
					$nStatus = "Checked In";
					$discharge = anchor('app/ipd/discharge/'.$patient->IO_ID.'/'.$patient->patient_no,'Discharge',array('class'=>'delete','onclick'=>"return confirm('Are you sure want to discharge patient?')"));
				}else{ 
					$nStatus = "Discharged";
					$discharge = "Discharged";
				}
				
				$this->table->add_row( 
									// $patient->IO_ID,
									$patient->patient_no,
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." & Bed No.".$patient->bed_name, 
									$patient->doctor,
									/*$nStatus,*/
									$discharge
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();

		$this->load->view('app/ipd/patient_discharge',$this->data);	
	}
	public function discharge(){
		$patient_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		if(isset($_POST['btnSubmit'])){
			
			$this->discharge_save();
			
		}else{
			// user restriction function
				$this->session->set_userdata('page_name','modiffy_patient');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				/*if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}*/
				// end of user restriction function
				
			$this->data['patientInfo'] = $this->patient_model->getPatient($patient_no); 
			$this->load->view('app/ipd/dischargePatient',$this->data);	
		}
	}
		public function discharge_save(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		//echo "$iop_no $patient_no";die;
			
		/*$this->form_validation->set_rules("email","Email Address","trim|xss_clean|valid_email|callback_validate_email_edit");*/	
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>","</div>");
	
		/*if($this->form_validation->run()){*/
			
			//save the data
			$ptn_discharge=$this->patient_model->discharge_save();
			
			if($ptn_discharge)
			{
		
		//update patient's status to discharged
		$this->db->query("update patient_details_iop set nStatus = 'Discharged' where patient_no = '".$patient_no."'");
		
		//update bed status to vacant and remove patient has been admitted
		$this->db->query("update room_beds set nStatus = 'Vacant',patient_no = '' where patient_no = '".$iop_no."'");
		//update inactive  status to 1 form patient_personal_info
		$this->db->query("update patient_personal_info set InActive =1 where patient_no = '".$patient_no."'");

		    //logfile
			$value = $this->input->post('firstname')." ".$this->input->post('middlename')." ".$this->input->post('lastname');
			General::logfile('Member Discharge','INSERT',$value);
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Patient successfully discharged!</div>");
			
			//redirect
			redirect(base_url().'app/ipd/patient_discharge',$this->data);
				
			}		
			
		/*}else{
			// user restriction function
				$this->session->set_userdata('page_name','modiffy_patient');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				
				// end of user restriction function
				
			$this->data['patientInfo'] = $this->patient_model->getPatient($this->input->post('id')); 
			$this->load->view('app/ipd/dischargePatient',$this->data);	
		}*/	
	}
	
	public function discharge1(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Patient successfully discharged!</div>");
		
		//update patient's status to discharged
		$this->db->query("update patient_details_iop set nStatus = 'Discharged' where patient_no = '".$iop_no."' and patient_no = '".$patient_no."'");
		
		//update bed status to vacant and remove patient has been admitted
		$this->db->query("update room_beds set nStatus = 'Vacant',patient_no = '".$iop_no."' where patient_no = '".$iop_no."'");
		
		redirect(base_url().'app/ipd/index/'.$iop_no.'/'.$patient_no);
	}
	function discharge_Pdf()
    {
    	$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
    	$this->data['patientInfo'] = $this->patient_model->getPatient($patient_no);

    	$this->data['dischargeInfo'] = $this->patient_model->getDCPatient($patient_no);
            
            $dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled',TRUE);
            $canvas=$dompdf->get_canvas();
            //$this->load->view('app/ipd/discharge_pdf_view',$this->data);
            $html = $this->load->view('app/ipd/discharge_pdf_view',$this->data,true);

            $dompdf->loadHtml($html);
            // (Optional) Setup the paper size and orientation
            //$dompdf->setPaper('A4', 'landscape');
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser
			//$dompdf->stream('discharge_report.pdf',array("Attachment" => 0));
            $dompdf->stream('discharge_report.pdf');
            }
	function validate_email_edit(){
		if($this->patient_model->validate_email_edit()){
			$this->form_validation->set_message("validate_email_edit","Email Address Already Exists.");
			return false;
		}else{
			return true;
		}
	}
	
	public function registration(){
				
		$this->session->set_userdata(array(
				 'tab'			=>		'patient',
				 'module'		=>		'',
				 'subtab'		=>		'ipd',
				 'submodule'	=>		'ipd_registration'));
				 
		$this->load->view("app/ipd/registration",$this->data);	
	}
	
	public function admit(){
		$this->session->set_userdata(array(
				 'tab'			=>		'patient',
				 'module'		=>		'',
				 'subtab'		=>		'ipd',
				 'submodule'	=>		'ipd_registration'));
				 
				 
		$patient_no = $this->uri->segment("4");
		
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['room_category'] = $this->General_model->room_category();
		$this->data['lastIPDNo'] = $this->General_model->lastIPDNo();
		
		$this->load->view("app/ipd/admit",$this->data);		
	}

	public function getRoomMaster(){
		
		$roomType = $this->uri->segment("4");
		$occupied = $this->uri->segment("5");	
		
		$this->data['getRoomMaster'] = $this->ipd_model->getRoomMaster($roomType,$occupied);
		$this->load->view("app/ipd/getRoomMaster",$this->data);
		
	}
	
	public function getBeds($room_id){
		
		$this->data['getBeds'] = $this->General_model->getBeds($room_id);
		$this->load->view("app/ipd/getBeds",$this->data);
		
	}
	
	public function getRoomMaster2(){
		
		$roomType = $this->uri->segment("4");
		$occupied = $this->uri->segment("5");	
		
		$this->data['getRoomMaster'] = $this->ipd_model->getRoomMaster($roomType,$occupied);
		$this->load->view("app/ipd/getRoomMaster2",$this->data);
		
	}
	
	public function getBeds2($room_id){
		
		$this->data['getBeds'] = $this->General_model->getBeds($room_id);
		$this->load->view("app/ipd/getBeds2",$this->data);
		
	}
	
	public function validate_ipd(){
		if($this->ipd_model->validate_ipd()){
			$this->form_validation->set_message("validate_ipd","IPD Member Already Exists.");
			return false;
		}else{
			return true;
		}	
	}
	
	public function save_ipd(){
		$this->form_validation->set_rules("patient_no","Member No.","trim|xss_clean|required|callback_validate_ipd");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>","</div>");
	
		if($this->form_validation->run()){
			
			$this->ipd_model->save();
			
			//update bed
			$this->ipd_model->updateBed();
			
			//save patient room
			$this->ipd_model->savepatientRoom();
			
			
			
			 $this->db->where(array("cCode"=>"INPATIENTNO", 'InActive' => 0));
			$this->db->update('system_option',array('cValue'=>$this->input->post('iopNo2')));
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>IPD Member successfully saved!</div>");
			
			//redirect
			redirect(base_url().'app/ipd/index',$this->data);
			
			
		}else{
			redirect(base_url().'app/ipd/admit/'.$this->input->post('patient_no'));
		}		
	}
	
	public function delete_diagnos(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Diagnosis successfully Added!</div>");
		
		$this->db->query("update iop_diagnosis set InActive = 1 where iop_diag_id = ".$id);
		
		redirect(base_url().'app/ipd/diagnosis/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function view(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['departmentList'] = $this->general_model->departmentList();
		// print_r($this->data['departmentList']);die;
		$this->load->view("app/ipd/view",$this->data);	
	}

	/*********************Start mail send code*********************/
	public function mail_view(){
    $iop_no = $this->uri->segment("4");
    $patient_no = $this->uri->segment("5");

    $this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
    $this->data['getvitalsign'] = $this->ipd_model->getvitalsign_for_mail($iop_no);
    $this->data['patient_Medication'] = $this->Opd_model->patient_Medication($iop_no);

    $this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);

    $this->data['ptn_title'] = $this->General_model->getTitle($this->data['patientInfo']->title);
    $this->data['ptn_gender'] = $this->General_model->getTitle($this->data['patientInfo']->gender);
    if($this->data['ptn_gender']->cValue=="Male")
    {
    	$this->data['ptn_gen']="His";
    }else{
    	$this->data['ptn_gen']="Her";
    }
    
    $this->data['departmentList'] = $this->general_model->departmentList();
    $this->data['message'] = $this->session->flashdata('message');

    if (@$_POST['submit'] == 'sent_mail') {
        $this->data['doctor_comments'] = $this->input->post('doctor_comments');
        $to_email = $this->input->post('mail_to');
        $rel_email2 = $this->input->post('rel_email2');

        $to_email = "balajimuttepwar892@gmail.com";
         $rel_email2 = "balajimuttepawar7058@gmail.com";
        
        if (filter_var($to_email, FILTER_VALIDATE_EMAIL)) {
        $subject = "Health updates of " . @$this->data['patientInfo']->middlename;

        $msg1 = $this->load->view('app/ipd/mail_generate', $this->data, TRUE);

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From: balajiM@sperohealthcare.in' . "\r\n";
        //$headers .= 'From: doctoraastha@sperohealthcare.in' . "\r\n";
        
        $headers .= "CC: balajim.speroinfosystems@gmail.com, $rel_email2\r\n";
        //$headers .= "CC: avinash@sperohealthcare.in, kaushikpanditrao@ahpl.in,Shivrudra@sperohealthcare.in,vijayrhayakar@ahpl.in,shelke@sperohealthcare.in, $rel_email2\r\n";

        if (mail($to_email, $subject, $msg1, $headers)) {
            $res = $this->ipd_model->save_sent_mail();

            if ($res) {
                $this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sent successfully</div>");
                redirect(base_url() . 'app/ipd/mail_view/' . $iop_no . '/' . $patient_no, $this->data);
            } else {
                $this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sent successfully</div>");
                redirect(base_url() . 'app/ipd/mail_view/' . $iop_no . '/' . $patient_no, $this->data);
            }
        } else {
            $this->session->set_flashdata('message', "<div class='alert alert-danger alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sending failed...</div>");
            redirect(base_url() . 'app/ipd/mail_view/' . $iop_no . '/' . $patient_no, $this->data);
        }
        } else {
            // Handle the case where the email address is not valid
            $this->session->set_flashdata('message', "<div class='alert alert-danger alert-dismissable'><i class='fa fa-exclamation-circle'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Invalid email address</div>");
            redirect(base_url() . 'app/ipd/mail_view/' . $iop_no . '/' . $patient_no, $this->data);
        }
    }

    $this->load->view("app/ipd/mail_view", $this->data);
}
	/*********************End mail send code*********************/

	/*********************Start CI mail send code*********************/
	/*public function cimail_view(){

		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['getvitalsign'] = $this->ipd_model->getvitalsign_for_mail($iop_no);
		$this->data['patient_Medication'] = $this->Opd_model->patient_Medication($iop_no);
		
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->data['departmentList'] = $this->general_model->departmentList();
		$this->data['message'] = $this->session->flashdata('message');
		if(@$_POST['submit']=='sent_mail')
		{
		$this->data['doctor_comments']=$this->input->post('doctor_comments');
		$to_email=$this->input->post('mail_to');
		$rel_email2=$this->input->post('rel_email2');
		
		$to_email="balajimuttepawar7058@gmail.com";
		//$cc1="avinash@sperohealthcare.in";
		//$cc2="kaushikpanditrao@ahpl.in";
		//$cc3="@$this->input->post('rel_email2')";
		 $this->load->library('email');

        // Email content
        $subject = "Health updates of ". @$this->data['patientInfo']->middlename;
        
        $msg1=$this->load->view('app/ipd/mail_generate',$this->data,TRUE);

        // Email configuration
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->from('balajimuttepawar7058@gmail.com', 'Ashtha Team');
        $this->email->to($to_email); // Replace with the recipient's email address
        //$cclist = array($cc1, $cc2, $cc3);
        //$this->email->cc($cclist);
        $this->email->subject($subject);
        $this->email->message($msg1);
        
        // Send the email
        if ($this->email->send()) {

        	$res=$this->ipd_model->save_sent_mail();
        	if($res)
        	{
        	$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sent successfully</div>");
        	redirect(base_url().'app/ipd/mail_view/'.$iop_no.'/'.$patient_no,$this->data);
        	}else{
        		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sent successfully</div>");
        	redirect(base_url().'app/ipd/mail_view/'.$iop_no.'/'.$patient_no,$this->data);
        	}

        } else {
        	$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Email sending failed...</div>");
        	redirect(base_url().'app/ipd/mail_view/'.$iop_no.'/'.$patient_no,$this->data);
            //show_error($this->email->print_debugger());
        }
    }
		$this->load->view("app/ipd/mail_view",$this->data);	
	}*/
	/*********************End CI mail send code*********************/
	public function diagnosis(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		
		$this->data['diagnosisList'] = $this->ipd_model->diagnosisList($iop_no);
		$this->data['patientDiagnosis'] = $this->ipd_model->patientDiagnosis($iop_no);
		// print_r($this->data['patientDiagnosis']);die;
		
		$this->load->view("app/ipd/diagnosis",$this->data);	
	}
	
	
	public function ipd_reg($patient_no){
		$this->data['lastOPDNo'] = $this->General_model->lastOPDNo();
		$this->data['message'] = "";
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		$this->load->view("app/opd/opdReg",$this->data);	
	}
	
	public function admit_patient2($offset = 0){
		// user restriction function
				$this->session->set_userdata('page_name','ipd_registration');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function			
				
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$this->session->set_userdata(array(
				 'tab'			=>		'patient',
				 'module'		=>		'',
				 'subtab'		=>		'ipd',
				 'submodule'	=>		'ipd_registration'));	
		
		$patient = $this->Opd_model->getAll_search($this->limit, $offset);
		
		$config['base_url'] = base_url().'app/opd/search_result/';
 		$config['total_rows'] = $this->Opd_model->count_all_search();
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
		$this->table->set_heading('Member No', 'Member Name','Gender','Civil Status','Age','Date Entry','Action');
		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				$this->table->add_row( 
									anchor('app/patient/view/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									$patient->gender, 
									$patient->civil_status, 
									$patient->age,
									date('M d, Y ',strtotime($patient->date_entry)), 
									anchor('app/opd/opd_reg/'.$patient->patient_no,'OPD Visit')
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();

		$this->load->view('app/opd/search_result',$this->data);	
	}

	
	
	public function admit_patient($offset = 0){
		// user restriction function
				$this->session->set_userdata('page_name','ipd_registration');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
		$this->session->set_userdata(array(
				 'tab'			=>		'patient',
				 'module'		=>		'',
				 'subtab'		=>		'ipd',
				 'submodule'	=>		'ipd_registration'));	
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->Opd_model->getAll_search($this->limit, $offset);
		
		$config['base_url'] = base_url().'app/ipd/admit_patient/';
 		$config['total_rows'] = $this->Opd_model->count_all_search();
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
		$this->table->set_heading('Member No', 'Member Name','Gender','Civil Status','Age','Date Entry','Admit');
		$i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				$this->table->add_row( 
									anchor('app/patient/view/'.$patient->patient_no,$patient->patient_no),
									$patient->name, 
									$patient->gender, 
									$patient->civil_status, 
									$patient->age,
									date('d M, Y',strtotime($patient->date_entry)), 
									anchor('app/doctor/admit/'.$patient->patient_no,'Admit')
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();

		$this->load->view('app/ipd/search_result',$this->data);	
	}
	
	public function save_diagnosis(){
		$this->form_validation->set_rules("diagnosis","Diagnosis","trim|xss_clean|required|callback_validate_diagnosis");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>","</div>");
	
		$opd_no = $this->input->post('opd_no');
		$patient_no = $this->input->post('patient_no');
			// print_r($this->input->post());
		if($this->form_validation){
			// echo 'jjj';
			$this->Opd_model->save_diagnosis();
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Diagnosis successfully Added!</div>");
			
			//redirect
			redirect(base_url().'app/ipd/diagnosis/'.$opd_no.'/'.$patient_no,$this->data);
			
			
		}else{
			// echo 'hh';
			redirect(base_url().'app/ipd/diagnosis/'.$opd_no.'/'.$patient_no,$this->data);
		}		
	}
	
	public function medication(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		
		$this->data['message'] = $this->session->flashdata('message');
		
		//$this->data['medicineCategory'] = $this->Opd_model->medicineCategory();
		
		$this->data['medicines'] = $this->Opd_model->drug_name_lists($patient_no);
		$this->data['results'] = $results = $this->Opd_model->given_medicine_chart_show_to_doctor($iop_no);
		//print_r($this->data['results']);die();
		foreach ($results as $key=>$res) {
			$args = array('iop_med_id' => $res->iop_med_id,'iop_no' => $iop_no );
			$dose_data = $this->Opd_model->given_medicine_chart_show_to_doctor_new($args);
			//var_dump($dose_data);
			//die();
				$dose1 = '';
				$dose2 = '';
				$dose3 = '';
				$dose4 = '';
				$dose5 = '';
				$dose6 = '';
				$dose7 = '';
				$dose = '';

				$given_date1 = '';
				$given_date2  = '';
				$given_date3 = '';
				$given_date4 = '';
				$given_date5 = '';
				$given_date6 = '';
				$given_date7 = '';
			foreach ($dose_data as $dose) {
				if($dose->given_date == date("Y-m-d", strtotime("this week"))){
					$dose1 = $dose->dose;
					$given_date1 = $dose->given_date;
				}elseif($dose->given_date == date("Y-m-d", strtotime('tuesday', strtotime('this week')))){
					$dose2 = $dose->dose;
					$given_date2 = $dose->given_date;
				}
				elseif($dose->given_date == date("Y-m-d", strtotime('wednesday', strtotime('this week')))){
					$dose3 = $dose->dose;
					$given_date3 = $dose->given_date;
				}
				elseif($dose->given_date == date("Y-m-d", strtotime('thursday', strtotime('this week')))){
					$dose4 = $dose->dose;
					$given_date4 = $dose->given_date;
				}
				elseif($dose->given_date == date("Y-m-d", strtotime('friday', strtotime('this week')))){
					$dose5 = $dose->dose;
					$given_date5 = $dose->given_date;
				}
				elseif($dose->given_date == date("Y-m-d", strtotime('saturday', strtotime('this week')))){
					$dose6 = $dose->dose;
					$given_date6 = $dose->given_date;
				}
				elseif($dose->given_date == date("Y-m-d", strtotime('sunday', strtotime('this week')))){
					$dose7 = $dose->dose;
					$given_date7 = $dose->given_date;
				}
				
			}
			$inc_data[]   = array(
				'iop_med_id' => $res->iop_med_id,
				'dose1' => $dose1,
				'dose2' => $dose2,
				'dose3' => $dose3,
				'dose4' => $dose4,
				'dose5' => $dose5,
				'dose6' => $dose6,
				'given_date1' => $given_date1,
				'given_date2' => $given_date2,
				'given_date3' => $given_date3,
				'given_date4' => $given_date4,
				'given_date5' => $given_date5,
				'given_date6' => $given_date6,
				//'given_date' => $dose->given_date,
			);
			//$this->data['results_data'][$key]['iop_med_id'] = $res->iop_med_id;
			//$this->data['results_data'][$key] = $inc_data;
			//var_dump($inc_data);die();
		}
		$this->data['results_data'] = @$inc_data;
		if($this->data['medicines']) {
		if($this->data['medicines'][0]->ptn_sugess_medi !=null)
		{
		$this->data['medicines1'] = explode(',',($this->data['medicines'][0]->ptn_sugess_medi));
		$this->data['med_cnt']=1;
		}else{
			$this->data['med_cnt']=2;
			//echo "abcd";
		}
	}else{ $this->data['med_cnt']=2; }
		// print_r($this->data['medicines']);die;
	/*	if($this->data['medicines'][0]->ptn_sugess_medi !=null)
		{
		$this->data['medicines1'] = explode(',',($this->data['medicines'][0]->ptn_sugess_medi));
		}else{
			echo "abcd";
		}*/
		$this->data['patientMedication'] = $this->Opd_model->patientMedication($iop_no);
		$this->data['patient_Medication'] = $this->Opd_model->patient_Medication($iop_no);
		
		$this->data['given_medicine'] = $this->Opd_model->given_medicine_chart($iop_no);
		
		// print_r($this->data['patientMedication']);die;
		$this->load->view("app/ipd/medication",$this->data);	
	}
	
	public function save_medication(){
		$drug_name = $this->input->post('drug_name', true);
	    $advice = $this->input->post('advice', true);
	    $qty = $this->input->post('qty', true);
	    $med_from_date = $this->input->post('med_from_date', true);
	    $med_to_date = $this->input->post('med_to_date', true);
	    $dose1=$this->input->post('dose',true);
	    //$dose2=implode(",",$dose1[0]);

	    /*print_r($med_from_date);
	    print_r($med_to_date);*/
	   /* print_r($dose2);
	    print_r($this->input->post('dose'));die();*/

	    //$dose = $this->input->post('dose', true);
	    /*for($i=0;$i<count($_POST['check_manpower']);$i++){
	    	dose=@implode(",",$this->input->post('dose'))
	    }*/
		foreach ($drug_name as $i => $a) {
		$dose2=@implode(",",$dose1[$i]);
		$where = "(
		medicine_name like '%".$a."%' and
		iop_id like '%".$this->input->post('opd_no')."%' 
		) 
		and InActive = 0";
		$this->db->where($where);
		$query = $this->db->get("iop_medicine");
		
		if($query->num_rows() > 0)
		{
			echo "medice already exist";
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medice Already exist!</div>");
		
		redirect(base_url().'app/ipd/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}
		else{
			
				$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			 'from_date'			=>		isset($med_from_date[$i]) ? $med_from_date[$i] : '',
			 'to_date'			=>		isset($med_to_date[$i]) ? $med_to_date[$i] : '',
			 'medicine_name'	=>		$a,
			 'dose'	=>		$dose2,
			 'advice'		=>		isset($advice[$i]) ? $advice[$i] : '',
			 'total_qty'		=>		isset($qty[$i]) ? $qty[$i] : '',
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'added_date'			=>		date("Y-m-d h:i:s A"),
			'organization'		=>		$this->session->userdata('organization'),
			'InActive'		=>		0
		);
			$this->db->insert("iop_medicine",$this->data);

		}
		//start data insert medicine
		/*$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			 'from_date'			=>		isset($med_from_date[$i]) ? $med_from_date[$i] : '',
			 'to_date'			=>		isset($med_to_date[$i]) ? $med_to_date[$i] : '',
			 'medicine_name'	=>		$a,
			 'dose'	=>		$dose2,
			 'advice'		=>		isset($advice[$i]) ? $advice[$i] : '',
			 'total_qty'		=>		isset($qty[$i]) ? $qty[$i] : '',
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'added_date'			=>		date("Y-m-d h:i:s A"),
			'InActive'		=>		0
		);
		$this->db->insert("iop_medicine",$this->data);*/
		//end data insert medicine
		/*$insert_rec=$this->db->insert("iop_medication",$this->data);
		if($insert_rec)
		{
			$this->data1 = array(
			'patient_no'		=>		$this->input->post('opd_no'),
			 'med_name'	=>		$a,
			'date'			=>		isset($med_date[$i]) ? $med_date[$i] : '',
			'InActive'		=>		0
			);
			$this->db->insert("medicine_2023",$this->data1);

		}*/
		}
		// print_r($this->data);die;
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medication successfully Added!</div>");
		
		redirect(base_url().'app/ipd/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
		public function save_emerg_medication(){
		$drug_name = $this->input->post('drug_name', true);
	    $advice = $this->input->post('advice', true);
	    $qty = $this->input->post('qty', true);
	    $med_from_date = $this->input->post('med_from_date', true);
	    $med_to_date = $this->input->post('med_to_date', true);
	    $dose1=$this->input->post('dose',true);
	    
		foreach ($drug_name as $i => $a) {
		$dose2=@implode(",",$dose1[$i]);
		$where = "(
		medicine_name like '%".$a."%' and
		iop_id like '%".$this->input->post('opd_no')."%' 
		) 
		and InActive = 0";
		$this->db->where($where);
		$query = $this->db->get("iop_medicine");
		
		if($query->num_rows() > 0)
		{
			echo "medice already exist";
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medice Already exist!</div>");
		
		redirect(base_url().'app/ipd/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}
		else{
			
				$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			 'from_date'			=>		isset($med_from_date[$i]) ? $med_from_date[$i] : '',
			 'to_date'			=>		isset($med_to_date[$i]) ? $med_to_date[$i] : '',
			 'medicine_name'	=>		$a,
			 'dose'	=>		$dose2,
			 'advice'		=>		isset($advice[$i]) ? $advice[$i] : '',
			 'total_qty'		=>		isset($qty[$i]) ? $qty[$i] : '',
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'added_date'			=>		date("Y-m-d h:i:s A"),
			'organization'		=>		$this->session->userdata('organization'),
			'InActive'		=>		0
		);
			$this->db->insert("iop_medicine",$this->data);

		}
		
		}
		// print_r($this->data);die;
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medication successfully Added!</div>");
		
		redirect(base_url().'app/ipd/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
	
	public function edit_medication(){
		$dose2=@implode(",",$_POST['dose']);
		$this->data = array(
			'from_date'		=>		$this->input->post('from_date'),
			'to_date'		=>		$this->input->post('to_date'),
			'medicine_name'		=>		$this->input->post('medicine_name'),
			 'dose'	=>		$dose2,
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'updated_date'			=>		date("Y-m-d h:i:s A"),
		);

		$id=array('iop_med_id'=>$this->input->post('iop_med_id'));	
		$query = $this->db->update('iop_medicine',$this->data,$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medication Successfully Updated!</div>");
		
		redirect(base_url().'app/ipd/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
	
	public function delete_medication(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_medicine set InActive = 1 where iop_med_id = ".$id);
		
		redirect(base_url().'app/ipd/medication/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function complain(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		
		$this->data['ComplainList'] = $this->Opd_model->ComplainList();
		
		$this->data['patientComplain'] = $this->Opd_model->patientComplain($iop_no);
		
		
		$this->load->view("app/ipd/complain",$this->data);	
	}
	
	public function save_complain(){
		$this->form_validation->set_rules("complain","Complain","trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>","</div>");
	
		$opd_no = $this->input->post('opd_no');
		$patient_no = $this->input->post('patient_no');
		
		if($this->form_validation->run()){
			
			$this->Opd_model->save_complain();
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Complain successfully Added!</div>");
			
			//redirect
			redirect(base_url().'app/ipd/complain/'.$opd_no.'/'.$patient_no,$this->data);
			
			
		}else{
			redirect(base_url().'app/ipd/complain/'.$opd_no.'/'.$patient_no,$this->data);
		}		
	}
	
	public function delete_complain(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_complaints set InActive = 1 where iop_comp_id = ".$id);
		
		redirect(base_url().'app/ipd/complain/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function vitalSign(){
		if(isset($_POST['btnSave'])){
			$this->data = array(
				'iop_id'		=>		$this->input->post('opd_no'),
				'dDate'			=>		$this->input->post('dDate'),
				'dDateTime'		=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
				'pulse_rate'	=>		$this->input->post('pulse_rate'),
				'temperature'	=>		$this->input->post('temperature'),
				'height'		=>		$this->input->post('height'),
				'bp'			=>		$this->input->post('bp'),
				'spo2'			=>		$this->input->post('spo2'),
				'respiration'	=>		$this->input->post('respiration'),
				'bsl_type'	=>		$this->input->post('bsl_type'),
				'bsl'		=>		!empty($this->input->post('bsl')) ? $this->input->post('bsl') :'',
				'weight'		=>		$this->input->post('weight'),
				'cPreparedBy'	=>		$this->session->userdata('user_id'),
				'organization'		=>		$this->session->userdata('organization'),
				'InActive'		=>		0
			);
			$this->db->insert('iop_vital_parameters',$this->data);
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Vital Parameters successfully Added!</div>");
			
			//redirect
			redirect(base_url().'app/ipd/vitalSign/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
			
		}else{
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
			$this->data['getVital'] = $this->Opd_model->getVital($iop_no);
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/ipd/vitalSign",$this->data);	
		}
	}
	public function individual_care_plan(){
		if(isset($_POST['btnSave'])){
			$this->ipd_model->save_individual_care_plan();
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Individual Care Plan successfully Added!</div>");
		
			redirect(base_url().'app/ipd/individual_care_plan/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}else{
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
		
			$this->data['getOPDPatient'] = $this->Opd_model->getOPDPatient($iop_no);
			$this->data['getProgressNote'] = $this->Opd_model->getIndCarePlan($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);	
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/ipd/individual_care_plan",$this->data);	
		}
	}
	public function sent_mail_list(){
		
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['getSentMail'] = $this->Opd_model->getSentMailList($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/ipd/sent_mail_list",$this->data);	
		
	}
	public function sent_mail_view(){
		
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
		
			$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
			$this->data['getSentMail'] = $this->Opd_model->getSentMailList($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);

			$this->data['ptn_title'] = $this->General_model->getTitle($this->data['patientInfo']->title);
		    $this->data['ptn_gender'] = $this->General_model->getTitle($this->data['patientInfo']->gender);
		    if($this->data['ptn_gender']->cValue=="Male")
		    {
		    	$this->data['ptn_gen']="His";
		    }else{
		    	$this->data['ptn_gen']="Her";
		    }
			
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/ipd/sent_mail_view",$this->data);	
		
	}
	public function edit_individual_care_plan(){
		if(isset($_POST['btnSave'])){
			$this->ipd_model->edit_individual_care_plan();
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Individual Care Plan successfully Updated!</div>");
		
			redirect(base_url().'app/ipd/individual_care_plan/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}
	}
	public function review_individual_care_plan(){
		if(isset($_POST['btnSave'])){
			$this->ipd_model->review_individual_care_plan();
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Review successfully Added!</div>");
		
			redirect(base_url().'app/ipd/individual_care_plan/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}
	}
	
	public function delete_vital(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Vital Parameters successfully Deleted!</div>");
		
		$this->db->query("update iop_vital_parameters set InActive = 1 where vital_id = ".$id);
		
		redirect(base_url().'app/ipd/vitalSign/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function save_vital(){
		$iop_no = $this->input->post('opd_no');
		$patient_no = $this->input->post('patient_no');
		
		$this->data = array(
			'pulse_rate'		=>	$this->input->post('pulse_rate'),
			'temperature'		=>	$this->input->post('temperature'),
			'height'			=>	$this->input->post('height'),
			'bp'				=>	$this->input->post('bp'),
			'respiration'		=>	$this->input->post('respiration'),
			'weight'			=>	$this->input->post('weight')
		);
		$this->db->where("IO_ID",$iop_no);
		$this->db->update("patient_details_iop",$this->data);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Vital Sign successfully Updated!</div>");
			
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);	
			
		//redirect
		redirect(base_url().'app/ipd/vitalSign/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function patientHistory(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
		$this->data['message'] = $this->session->flashdata('message');
		
		$this->load->view("app/ipd/patientHistory",$this->data);	
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
			
		//redirect
		redirect(base_url().'app/ipd/patientHistory/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function discharge_summary(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->Opd_model->getOPDPatient($iop_no);
		$this->data['get_discharge_summary'] = $this->Opd_model->get_discharge_summary($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);		
		$this->data['getConditionDis'] = $this->General_model->getConditionDis();
		$this->data['message'] = $this->session->flashdata('message');
		
		$this->load->view("app/ipd/discharge_summary",$this->data);	
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
		
		redirect(base_url().'app/ipd/discharge_summary/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	public function progress_note(){
		if(isset($_POST['btnSave'])){
			$this->ipd_model->save_progress_note();
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Progress Notes successfully Added!</div>");
		
			redirect(base_url().'app/ipd/progress_note/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}else{
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
		
			$this->data['getOPDPatient'] = $this->Opd_model->getOPDPatient($iop_no);
			$this->data['getProgressNote'] = $this->Opd_model->getProgressNote($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);	
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/ipd/progress_note",$this->data);	
		}
	}
	
	public function delete_progress(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_progress_note set InActive = 1 where progress_id = ".$id);
		
		redirect(base_url().'app/ipd/progress_note/'.$iop_no.'/'.$patient_no,$this->data);
	}
	public function delete_ind_care_plan(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_individual_care_plan set InActive = 1 where ind_care_plan_id = ".$id);
		
		redirect(base_url().'app/ipd/individual_care_plan/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function intake_output1(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->Opd_model->getOPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);	
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['prepare'] = $this->ipd_model->getIntake($iop_no);
		$this->data['getOutput'] = $this->ipd_model->getOutput($iop_no);
		// $this->data['getIntake1'] = (json_decode($this->data['prepare'][0]->particulars));
		// print_r($this->data['getIntake1']);die;
		$this->load->view("app/ipd/intake_output1",$this->data);	
	}
	public function intake_output(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);	
		$this->data['message'] = $this->session->flashdata('message');
		// $this->data['prepare'] = $this->ipd_model->getIntake($iop_no);
		$this->data['getIntake'] = $this->ipd_model->getIntake($iop_no);
		$this->data['getOutput'] = $this->ipd_model->getOutput($iop_no);
		// $this->data['getIntake1'] = (json_decode($this->data['prepare'][0]->particulars));
		// print_r($this->data['getIntake1']);die;
		$this->load->view("app/ipd/intake_output",$this->data);	
	}
	
	public function save_intake1(){
		// print_r($this->input->post());die;
		$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'particulars'	=>		json_encode($this->input->post('inout')),
			// 'IV_fluids'		=>		json_encode($this->input->post['inout'][0]),
			// 'oral'			=>		json_encode($this->input->post['inout'][0]),
			// 'no_stool'		=>		json_encode($this->input->post['inout'][0]),
			// 'no_urine'		=>		json_encode($this->input->post['inout'][0]),
			'dDate'			=>		date("Y-m-d h:i:s A"),
			'dDateTime'		=>		date("Y-m-d h:i:s A")." ".$this->input->post('cTime'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);	
		$this->db->insert("iop_intake_record",$this->data);
		// print_r ($this->data);die;
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Intake Record successfully Added!</div>");
		
		redirect(base_url().'app/ipd/intake_output1/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	public function save_intake(){
		$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'particulars'	=>		$this->input->post('particular'),
			'IV_fluids'		=>		$this->input->post('fluids'),
			'oral'			=>		$this->input->post('oral'),
			'no_stool'		=>		!empty($this->input->post('no_stool')) ? $this->input->post('no_stool') :'',
			'no_urine'		=>		!empty($this->input->post('no_urine')) ? $this->input->post('no_urine') :'',
			'dDate'			=>		$this->input->post('dDate'),
			'dDateTime'		=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);	
		$this->db->insert("iop_intake_record",$this->data);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Intake Record successfully Added!</div>");
		
		redirect(base_url().'app/ipd/intake_output/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	public function delete_intake(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_intake_record set InActive = 1 where intake_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Intake Record successfully Deleted!</div>");
		
		redirect(base_url().'app/ipd/intake_output/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function save_output(){
		$this->data = array(
			'iop_id'		=>		$this->input->post('opd_no'),
			'urine'			=>		$this->input->post('urine'),
			'feaces'		=>		$this->input->post('feaces'),
			'respitation'	=>		$this->input->post('respitation'),
			'skin'			=>		$this->input->post('skin'),
			'dDate'			=>		$this->input->post('dDate2'),
			'dDateTime'		=>		$this->input->post('dDate2')." ".$this->input->post('cTime2'),
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'InActive'		=>		0
		);	
		$this->db->insert("iop_output_record",$this->data);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Output Record successfully Added!</div>");
		
		redirect(base_url().'app/ipd/intake_output/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
	
	public function delete_output(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_output_record set InActive = 1 where output_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Output Record successfully Deleted!</div>");
		
		redirect(base_url().'app/ipd/intake_output/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function nurse_progress_note(){
		if(isset($_POST['btnSave'])){
			$this->data = array(
				'iop_id'		=>		$this->input->post('opd_no'),
				'dDate'			=>		$this->input->post('dDate'),
				'dDateTime'		=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
				'focus'			=>		!empty($this->input->post('focus')) ? $this->input->post('focus') : '',
				'complain_id'	=>		$this->input->post('complain'),
				'notes'			=>		$this->input->post('notes'),
				'cPreparedBy'	=>		$this->session->userdata('user_id'),
				'organization'		=>		$this->session->userdata('organization'),
				'InActive'		=>		0
			);
			$this->db->insert('iop_nurse_notes',$this->data);
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Notes successfully Added!</div>");
		
			redirect(base_url().'app/ipd/nurse_progress_note/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}else{
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
		
			$this->data['ComplainList'] = $this->Opd_model->ComplainList();
			$this->data['ComplainList1'] = $this->Opd_model->ComplainList();
			$this->data['getOPDPatient'] = $this->Opd_model->getOPDPatient($iop_no);
			$this->data['getNurseProgressNote'] = $this->Opd_model->getNurseProgressNote($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);	
			$this->data['message'] = $this->session->flashdata('message');
		
			$this->load->view("app/ipd/nurse_progress_note",$this->data);	
		}
	}
	
	public function delete_nurse_progress(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_nurse_notes set InActive = 1 where nurse_notes_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Notes successfully Deleted!</div>");
		
		redirect(base_url().'app/ipd/nurse_progress_note/'.$iop_no.'/'.$patient_no,$this->data);
	}
	public function edit_nurse_progress_note(){

		$this->data = array(
				'dDate'			=>		$this->input->post('dDate'),
				'dDateTime'		=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
				'notes'			=>		$this->input->post('notes'),
				'complain_id'			=>		$this->input->post('complain'),
				'cPreparedBy'	=>		$this->session->userdata('user_id'),
				'updated_date'			=>		date("Y-m-d h:i:s A")
			);

		$id=array('nurse_notes_id'=>$this->input->post('nurse_notes_id'));	
		$query = $this->db->update('iop_nurse_notes',$this->data,$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Notes Successfully Updated!</div>");
		
		redirect(base_url().'app/ipd/nurse_progress_note/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
	public function edit_given_medicationss(){
		$dose2=@implode(",",$_POST['dose']);
		$this->data = array(
			'given_date'		=>		$this->input->post('given_date'),
			 'dose'	=>		$dose2,
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			/*'updated_date'			=>		date("Y-m-d h:i:s A"),*/
		);

		$id=array('iop_nurse_med_id'=>$this->input->post('iop_nurse_med_id'));	
		$query = $this->db->update('iop_nurse_medicine',$this->data,$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medication Successfully Updated!</div>");
		
		redirect(base_url().'app/ipd/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}

	public function edit_given_medication(){
		$dose2=@implode(",",$_POST['dose']);
		
		$this->data = array(
			'given_date'		=>		$this->input->post('given_date'),
			 'dose'	=>		$dose2,
			'cPreparedBy'	=>		$this->session->userdata('user_id'),
			'updated_date'			=>		date("Y-m-d h:i:s A")
		);
		/***********Start code for add dosewise nurse name***********/
												
			for($sd_i=0;$sd_i<count($_POST['dose']);$sd_i++)
			{
			if($_POST['dose'][$sd_i]=="M")
			{
			
				$this->data['mor_nurse']=$this->session->userdata('user_id');
				$this->data['mor_dose_updated_dtime']=date("Y-m-d h:i:s A");
			}
			if($_POST['dose'][$sd_i]=="A")
			{
				
				$this->data['afternoon_nurse']=$this->session->userdata('user_id');
				$this->data['afternoon_dose_updated_dtime']=date("Y-m-d h:i:s A");
			}
			if($_POST['dose'][$sd_i]=="N")
			{
			
				$this->data['night_nurse']=$this->session->userdata('user_id');
				$this->data['night_dose_updated_dtime']=date("Y-m-d h:i:s A");
			}		
			}
			/***********End code for add dosewise nurse name***********/
			

		$id=array('iop_nurse_med_id'=>$this->input->post('iop_nurse_med_id'));	
		$query = $this->db->update('iop_nurse_medicine',$this->data,$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Medication Successfully Updated!</div>");
		
		redirect(base_url().'app/ipd/medication/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
	
	public function operation_theater(){
		if(isset($_POST['btnSave'])){
			$this->db->query("delete from iop_operation_theater where iop_id = '".$this->input->post('opd_no')."'");
			
			$this->data = array(
				'iop_id'				=>		$this->input->post('opd_no'),
				'dDate_from'			=>		$this->input->post('dDate_from'),
				'dTime_from'			=>		$this->input->post('dTime_from'),
				'dDate_to'				=>		$this->input->post('dDate_to'),
				'dTime_to'				=>		$this->input->post('dTime_to'),
				'operation_name'		=>		$this->input->post('operation_name'),
				'diagnosis'				=>		$this->input->post('diagnosis'),
				'name_of_surgeon'		=>		$this->input->post('surgeon'),
				'name_of_anesthesia'	=>		$this->input->post('anesthesia'),
				'assistant_name1'		=>		$this->input->post('assistant1'),
				'assistant_name2'		=>		$this->input->post('assistant2'),
				'assistant_name3'		=>		$this->input->post('assistant3'),
				'assistant_name4'		=>		$this->input->post('assistant4'),
				'operation_procedure'	=>		$this->input->post('operation_procedure'),
				'notes'					=>		$this->input->post('notes'),
				'InActive'				=>		0
			);
			$this->db->insert('iop_operation_theater',$this->data);
			
			// $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Operation Theater successfully Saved!</div>");
		
			redirect(base_url().'app/ipd/operation_theater/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		}else{
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
		
			$this->data['getOPDPatient'] = $this->Opd_model->getOPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			$this->data['message'] = $this->session->flashdata('message');
			
			$this->data['particular_cat'] = $this->billing_model->particular_cat();
			$this->data['medicine_cat'] = $this->billing_model->medicine_cat();
			
			$this->data['getOperationTheater'] = $this->Opd_model->getOperationTheater($iop_no);
			$this->data['room_category'] = $this->General_model->room_category();
			
			$this->data['surgery_list'] = $this->General_model->surgery_list();
			$this->load->view("app/ipd/operation_theater",$this->data);	

		}
	}
	
	public function room_transfer(){
		if(isset($_POST['btnSave'])){
			
			$this->data = array(
				'iop_id'				=>		$this->input->post('opd_no'),
				'dDate'					=>		$this->input->post('dDate'),
				'dDateTime'				=>		$this->input->post('dDate')." ".$this->input->post('dTime'),
				'room_category_id'		=>		$this->input->post('roomType'),
				'room_master_id'		=>		$this->input->post('room_name'),
				'bed_id'				=>		$this->input->post('bed_name'),
				'reason'				=>		$this->input->post('reason'),
				'cPreparedBy'			=>		$this->session->userdata('user_id'),
				'organization'		=>		$this->session->userdata('organization'),
				'InActive'				=>		0
			);
			$this->db->insert('iop_room_transfer',$this->data);
			/********************* Start update room bed*********************/
			$this->db->where(array("patient_no"=>$this->input->post('opd_no'), 'InActive' => 0));
			$this->db->update('room_beds',array('nStatus'=>'Vacant','patient_no'=>''));

			$this->db->where(array("room_master_id"=>$this->input->post('room_name'),"room_bed_id"=>$this->input->post('bed_name'),"organization"=>$this->session->userdata('organization'), 'InActive' => 0));
			$this->db->update('room_beds',array('nStatus'=>'Occupied','patient_no'=>$this->input->post('opd_no')));

			/*********************End update room bed*********************/

			/*********************Start update patient detail iop*********************/
			$this->db->where(array("patient_no"=>$this->input->post('patient_no'), 'InActive' => 0));
			$this->db->update('patient_details_iop',array('room_id'=>$this->input->post('bed_name')));

			/*********************End update patient detail iop*********************/
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Patient successfully Transfered!</div>");
		
			redirect(base_url().'app/ipd/room_transfer/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
			
		}else{
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
		
			$this->data['getOPDPatient'] = $this->Opd_model->getOPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			$this->data['message'] = $this->session->flashdata('message');
			
			$this->data['room_transfer'] = $this->ipd_model->room_transfer($iop_no);
			
			//$this->data['particular_cat'] = $this->billing_model->particular_cat();
			//$this->data['medicine_cat'] = $this->billing_model->medicine_cat();
			
			$this->data['getOperationTheater'] = $this->Opd_model->getOperationTheater($iop_no);
			$this->data['room_category'] = $this->General_model->room_category();
			
			$this->load->view("app/ipd/room_transfer",$this->data);	
		}
	}
	
	public function delete_room_transfer(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_room_transfer set InActive = 1 where transfer_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Room successfully Deleted!</div>");
		
		redirect(base_url().'app/ipd/room_transfer/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function bed_side_procedure(){
			$id = $this->uri->segment("4");
			$iop_no = $this->uri->segment("4");
			$patient_no = $this->uri->segment("5");
			// print_r($iop_no);die;
		if(isset($_POST['btnSubmit'])){
			
			$this->data = array(
				'iop_id'				=>		$this->input->post('opd_no'),
				'dDate'					=>		date("Y-m-d"),
				'dDateTime'				=>		date("Y-m-d h:i:s A"),
				'category'    			=>		$this->input->post('category'),
				'bedside_service'		=>		$this->input->post('drug_name'),
				'qty'					=>		$this->input->post('qty'),
				'notes'					=>		$this->input->post('remarks'),
				'cPreparedBy'			=>		$this->session->userdata('user_id'),
				'InActive'				=>		0
			);
			$this->db->insert('iop_bed_side_procedure',$this->data);
			// print_r($this->data);die;
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Bed Side Procedure successfully Saved!</div>");
			redirect(base_url().'app/ipd/bed_side_procedure/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
			
		}else{
			
			$this->data['getOPDPatient'] = $this->Opd_model->getOPDPatient($iop_no);
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			// $this->data['message'] = $this->session->flashdata('message');
			$this->data['getServices'] = $this->Opd_model->getServices($iop_no);
			$this->data['getServ'] = $this->Opd_model->medicineCategory($iop_no);
			$this->data['list'] = $this->Opd_model->listservices($id);
			$this->data['particular_cat'] = $this->billing_model->particular_cat();
			$this->data['medicines'] = $this->Opd_model->drug_name_lists($patient_no);
			$this->data['drug_list'] = $this->Opd_model->drug_name_lists($id);
			// print_r($this->data['getServices']);die;
			$this->load->view("app/ipd/bed_side_procedure",$this->data);			
		}
	}
	public function getItem($id){
		$this->data['getServ'] = $this->Opd_model->medicineCategory($cat_id);
		$this->data['list'] = $this->Opd_model->listservices();
		$this->load->view("app/ipd/bed_side_procedure",$this->data);		
	}
	public function delete_bed_side(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_bed_side_procedure set InActive = 1 where bed_pro_id = ".$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Bed Side Procedure successfully Deleted!</div>");
		
		redirect(base_url().'app/ipd/bed_side_procedure/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function patient_discharged($offset = 0){
		// user restriction function
				$this->session->set_userdata('page_name','ipd_discharged');
				$page_id = $this->General_model->getPageID();
				$userRole = $this->General_model->getUserLoggedIn($this->session->userdata('username'));
				if(General::has_rights_to_access($page_id->page_id,$userRole->user_role) == FALSE){
					redirect(base_url().'access_denied');
				}
				// end of user restriction function		
				
				 
		$this->session->set_userdata(array(
				 'tab'			=>		'patient',
				 'module'		=>		'',
				 'subtab'		=>		'ipd',
				 'submodule'	=>		'ipd_patient_discharged'));
		
		//set session in textfield to paginate the table		 
		$this->session->set_userdata(array(
			'search_ipd'				=>		$this->input->post('search'),
			'search_ipd_cFrom'			=>		$this->input->post('cFrom'),
			'search_ipd_cTo'			=>		$this->input->post('cTo'),
			'search_ipd_department'		=>		$this->input->post('department'),
			'search_ipd_doctor'			=>		$this->input->post('doctor')
		));		 
				 
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		$patient = $this->ipd_model->getAll($this->limit, $offset);
		
		$config['base_url'] = base_url().'app/ipd/patient_discharged/';
 		$config['total_rows'] = $this->ipd_model->count_all();
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
		// $i = 0 + $offset;
		
		
		foreach ($patient as $patient)
		{	
				if($patient->nStatus == "Pending"){ 
					$nStatus = "Checked In";
					$discharge = anchor('app/ipd/discharge/'.$patient->IO_ID.'/'.$patient->patient_no,'Discharge',array('class'=>'delete','onclick'=>"return confirm('Are you sure want to discharge patient?')"));
				}else{ 
					$nStatus = "Discharged";
					$discharge = "Discharged";
					$nStatus = anchor('app/ipd/discharge_pdf/'.$patient->IO_ID.'/'.$patient->patient_no,'Discharged',array('class'=>'delete'));
				}
				
				$this->table->add_row( 
									// $patient->IO_ID,
									$patient->patient_no,
									$patient->name, 
									date('d M, Y',strtotime($patient->date_visit))." ".date('H:i:s',strtotime($patient->time_visit)), 
									$patient->patient_type, 
									"Rm ".$patient->room_name." & Bed No.".$patient->bed_name, 
									$patient->doctor,
									$nStatus
									/*$discharge*/
			);
		}
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['table'] = $this->table->generate();

		$this->load->view('app/ipd/patient_discharge',$this->data);	
	}
	public function delete_given_medication(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->db->query("update iop_nurse_medicine set InActive = 1 where iop_nurse_med_id = ".$id);
		
		redirect(base_url().'app/ipd/medication/'.$iop_no.'/'.$patient_no,$this->data);
	}
	
	public function laboratory(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		
		$this->data['message'] = $this->session->flashdata('message');
		
		//list of category
		$this->data['particular_cat'] = $this->billing_model->particular_cat();
		$this->data['particular_cat1'] = $this->billing_model->particular_cat();
		$this->data['medicine_cat'] = $this->billing_model->medicine_cat();
		
		$this->data['iop_lab'] = $this->Opd_model->iop_laboratory($iop_no);
		$this->data['patient_lab'] = $this->Opd_model->patient_lab($iop_no);
		
		// print_r($this->data['iop_lab']);die;
		
		$this->load->view("app/ipd/laboratory",$this->data);	
	}
	
		public function save_laboratory(){
			//$patient_no = $this->uri->segment("5");
		$this->data = array(
				'iop_id'				=>		$this->input->post('opd_no'),
				'dDate'					=>		$this->input->post('dDate'),
				'dDateTime'				=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
				'iop_id'			=>		$this->input->post('opd_no'),
				'category_id'			=>		$this->input->post('category'),
				'laboratory_id'			=>		!empty($this->input->post('test_name')) ? $this->input->post('test_name'): $this->input->post('item'),
				'findings'				=>		!empty($this->input->post('findings')) ? $this->input->post('findings') : '',
				'result'				=>		!empty($this->input->post('results')) ? $this->input->post('results') : '',
				'doctor'				=>		$this->input->post('doctor'),
				'patient_no'				=>		$this->input->post('patient_no'),
				'added_by'				=>		$this->session->userdata('user_id'),
				'organization'      =>      $this->session->userdata('organization'),
				'InActive'				=>		0
			);
			$this->db->insert('iop_laboratory',$this->data);
			// print_r($this->data);die;
			
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Laboratory successfully Saved!</div>");
			redirect(base_url().'app/ipd/laboratory/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
	}
		public function edit_laboratory(){
			
		$this->data = array(
				'dDate'					=>		$this->input->post('dDate'),
				'dDateTime'				=>		$this->input->post('dDate')." ".$this->input->post('cTime'),
				'category_id'			=>		$this->input->post('category'),
				'laboratory_id'			=>		!empty($this->input->post('test_name')) ? $this->input->post('test_name'): $this->input->post('item'),
				'findings'				=>		$this->input->post('findings'),
				'doctor'				=>		$this->input->post('doctor')
			);


		$id=array('io_lab_id'=>$this->input->post('io_lab_id'));	
		$query = $this->db->update('iop_laboratory',$this->data,$id);
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Laboratory successfully Updated!</div>");
		
		redirect(base_url().'app/ipd/laboratory/'.$this->input->post('opd_no').'/'.$this->input->post('patient_no'),$this->data);
		
	}
	function view_patient_lab($io_lab_id){
        $data = $this->Opd_model->view_patient_lab($io_lab_id);
        //print_r($data);die;
        // header('Content-Type: application/json');
        echo json_encode($data);
     }
	
	public function delete_lab(){
		$id = $this->uri->segment("4");
		$iop_no = $this->uri->segment("5");
		$patient_no = $this->uri->segment("6");
		
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Laboratory successfully Deleted!</div>");
		
		$this->db->query("update iop_laboratory set InActive = 1 where io_lab_id = ".$id);
		
		redirect(base_url().'app/ipd/laboratory/'.$iop_no.'/'.$patient_no,$this->data);
	}
	public function update_patient_type() {
    $iop_no = $this->uri->segment("4");
    $patient_no = $this->uri->segment("5");
    $ptn_type = $this->input->post('ptn_type');

    $this->data = array(
			'patient_type'		=>		$ptn_type
		);
    $this->db->where("IO_ID",$iop_no);
	$this->db->update("patient_details_iop",$this->data);
	
    redirect(base_url().'app/ipd/view/'.$iop_no.'/'.$patient_no, $this->data);

}
public function update_incharge_doctor() {
    $iop_no = $this->uri->segment("4");
    $patient_no = $this->uri->segment("5");
    $incharge_doctor = $this->input->post('doctor');
    $prev_incharge = $this->input->post('prev_incharge');

    $this->data = array(
			'doctor_id'		=>		$this->input->post('doctor')
		);
    $this->db->where("IO_ID",$iop_no);
	$this->db->update("patient_details_iop",$this->data);

	$where = "(
		incharge_doctor= '".$this->input->post('doctor')."' and
		iop_no= '".$iop_no."' 
		)
		and organization= '".$this->session->userdata('organization')."' 
		and InActive = 0";
		$this->db->where($where);
		$query = $this->db->get("iop_patient_incharge_his");
		$nurse_med=$query->result();
		
		if($query->num_rows() > 0)
		{
			
		}
		elseif($incharge_doctor){
			if($prev_incharge)
			{
				$where1 = "(
				incharge_doctor= '".$this->input->post('prev_incharge')."' and
				iop_no= '".$iop_no."' 
				)
				and organization= '".$this->session->userdata('organization')."' 
				and InActive = 0";
				$this->db->where($where1);
				$query1 = $this->db->get("iop_patient_incharge_his");
				$query1->result();
				
				if($query1->num_rows() > 0)
				{
					
				}
				else
				{
					$this->prev_incharge_data = array(
					'iop_no'		=>		$iop_no,
					'patient_no'		=>		$patient_no,
					'incharge_doctor'		=>		$this->input->post('prev_incharge'),
					 'assigned_date'			=>	@$this->input->post('prev_incharge_assign_date'),
					 'added_date'			=>		date("Y-m-d h:i:s A"),
					'added_by'	=>		$this->session->userdata('user_id'),
					'organization'		=>		$this->session->userdata('organization'),
					'InActive'		=>		0
				);
					$this->db->insert("iop_patient_incharge_his",$this->prev_incharge_data);

				}
				
			}
			if($incharge_doctor!=$prev_incharge)
			{
				$this->data1 = array(
				'iop_no'		=>		$iop_no,
				'patient_no'		=>		$patient_no,
				'incharge_doctor'		=>		$this->input->post('doctor'),
				 'assigned_date'			=>		date("Y-m-d h:i:s A"),
				 'added_date'			=>		date("Y-m-d h:i:s A"),
				'added_by'	=>		$this->session->userdata('user_id'),
				'organization'		=>		$this->session->userdata('organization'),
				'InActive'		=>		0
			);
				$this->db->insert("iop_patient_incharge_his",$this->data1);
			}

		}
	
    redirect(base_url().'app/ipd/view/'.$iop_no.'/'.$patient_no, $this->data);

}
function get_progressnote_id_data($nurse_notes_id){
        $data = $this->Opd_model->get_progressnote_id_data($nurse_notes_id);
        echo json_encode($data);
     }
	
	
	
	
	
	
	
	
	
}