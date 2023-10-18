<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Patient_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function getAll($limit = 10, $offset = 0){
		

		$this->db->select("
			A.patient_no,
			concat(B.cValue,' ',A.firstname,' ',A.middlename,' ',A.lastname) as 'name',
			C.cValue as 'gender',
			D.cValue as 'civil_status',
			A.age,
			A.date_entry
			",false);
		$where = "(

		A.middlename like '%".$this->session->userdata("search_patient_master")."%' or 
		A.patient_no like '%".$this->session->userdata("search_patient_master")."%' or
		C.cValue like '%".$this->session->userdata("search_patient_master")."%' or 
		D.cValue like '%".$this->session->userdata("search_patient_master")."%'
		) 
		and A.InActive = 0";
		$this->db->where($where);
		$this->db->order_by('A.date_entry','desc');
		$this->db->join("system_parameters B","B.param_id = A.title","left outer");
		$this->db->join("system_parameters C","C.param_id = A.gender","left outer");
		$this->db->join("system_parameters D","D.param_id = A.civil_status","left outer");
		$query = $this->db->get("patient_personal_info A", $limit, $offset);
		return $query->result();
	}
	
	public function count_all(){
		$this->db->select("
			A.patient_no,
			concat(B.cValue,' ',A.firstname,' ',A.middlename,' ',A.lastname) as 'name',
			C.cValue,
			D.cValue,
			A.age,
			A.date_entry
			",false);
		$where = "(
		A.lastname like '%".$this->session->userdata("search_patient_master")."%' or 
		A.firstname like '%".$this->session->userdata("search_patient_master")."%' or 
		A.middlename like '%".$this->session->userdata("search_patient_master")."%' or 
		C.cValue like '%".$this->session->userdata("search_patient_master")."%' or 
		D.cValue like '%".$this->session->userdata("search_patient_master")."%'
		) 
		and A.InActive = 0";
		$this->db->where($where);
		$this->db->order_by('lastname','asc');
		$this->db->join("system_parameters B","B.param_id = A.title","left outer");
		$this->db->join("system_parameters C","C.param_id = A.gender","left outer");
		$this->db->join("system_parameters D","D.param_id = A.civil_status","left outer");
		$query = $this->db->get("patient_personal_info A");
		return $query->num_rows();
	}
	
	public function lastPatientID(){
		$this->db->select("(cValue + 1) as patient_no");
		$this->db->where("cCode","patient_no");
		$query = $this->db->get("system_option");	
		return $query->row();
	}
	public function preassesNo(){
		$this->db->select("*");	
		$this->db->where(array(
			'ptn_eligible'=>"Yes",
			'on_admission'=>"No",
			'InActive'	=>	0	
		));
		//$this->db->order_by('cValue','asc');
		$query = $this->db->get("patient_preassessment");
		return $query->result();
	}
	/*public function get_preasses_id_data($preasses_id){
		$this->db->select("*");
		$query = $this->db->get_where("patient_preassessment",array('preasses_no' => $preasses_id));	
		return $query->result();
	}*/
	public function get_preasses_id_data($preasses_id){
		$this->db->select('ptn_preasses.*,local_guardian.*');
			$this->db->from('patient_preassessment ptn_preasses');
			/*$this->db->join('patient_family ptn_fmly', 'ptn_fmly.preasses_no = ptn_preasses.preasses_no', 'left');*/
			$this->db->join('preassessment_guardian local_guardian','local_guardian.preasses_no = ptn_preasses.preasses_no','left');
			$this->db->where(array('ptn_preasses.InActive'=>0,'ptn_preasses.preasses_no'=>$preasses_id));
			$query = $this->db->get();
			if ( $query->num_rows() > 0 )
			{
				$row = $query->result();
				return $row;
			}
			}
	
	public function validate_email(){
		$this->db->where(array(
			'email_address'		=>		$this->input->post('email'),
			'InActive'			=>		0
		));
		$query = $this->db->get("patient_personal_info");
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function validate_patient(){
		$this->db->where(array(
			'lastname'		=>		$this->input->post('lastname'),
			'firstname'		=>		$this->input->post('firstname'),
			'birthday'		=>		$this->input->post('birthday'),
			'InActive'		=>		0
		));
		$query = $this->db->get("patient_personal_info");
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function save(){
		$age = 0;
		$dob = strtotime($this->input->post('birthday'));
		$tdate = strtotime(date("Y-m-d"));
		while( $tdate > $dob = strtotime('+1 year', $dob))
		{
			++$age;
		}
		if(!empty($dob))
		{
			$age=0;
		}
		if(!empty($this->input->post('age')))
		{
			$age=$this->input->post('age');	
		}
		$fname='';
		$this->load->library('upload');
		if (!empty($_FILES["dischargefile"]["name"])) {
			$config = array(
				'allowed_types'		=>		'*',
				'upload_path'		=>realpath('public/on_admission_discharge_report'),
				'max_size'			=>		0
			);
			// $this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('dischargefile')){
				$image_data = $this->upload->data();
				$fname=$image_data['file_name'];
			}
		}
		if (!empty($_FILES["aadharfile"]["name"])) {
			$config1 = array(
				'allowed_types'		=>		'*',
				'upload_path'		=>realpath('public/aadhar'),
				'max_size'			=>		0
			);
			// $this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if($this->upload->do_upload('aadharfile')){
				$aadhar_image_data = $this->upload->data();
				$aadhar_fname=$aadhar_image_data['file_name'];
			}
		}    

		$this->data = array(
			'patient_no'		=>		$this->input->post('patientID'),
			'title'				=>		$this->input->post('title'),
			// 'lastname'			=>		$this->input->post('lastname'),
			// 'firstname'			=>		$this->input->post('firstname'),
			'middlename'		=>		$this->input->post('name'),
			'gender'			=>		$this->input->post('gender'),
			'civil_status'		=>		$this->input->post('civil_status'),
			'birthday'			=>		$this->input->post('birthday'),
			// 'birthplace'		=>		$this->input->post('birthplace'),
			'relative_name'		=>		$this->input->post('relative_name'),
			// 'address2'			=>		$this->input->post('address2'),
			'age'				=>		$age,
			'religion'			=>		!empty($this->input->post('religion')) ? $this->input->post('religion') : '',
			'street'			=>		!empty($this->input->post('noofhouse')) ? $this->input->post('noofhouse') : '',
			'province'			=>		!empty($this->input->post('province')) ? $this->input->post('province') : '',
			// 'subd_brgy'			=>		$this->input->post('brgy'),
			'province'			=>		!empty($this->input->post('province')) ? $this->input->post('province') : '',
			'phone_no_office'	=>		!empty($this->input->post('phone_office')) ? $this->input->post('phone_office') : '',
			'phone_no'			=>		!empty($this->input->post('phone')) ? $this->input->post('phone') : '',
			'mobile_no'			=>		!empty($this->input->post('mobile')) ? $this->input->post('mobile') : '',
			'email_address'		=>		$this->input->post('email'),
			'date_entry'		=>		!empty($this->input->post('admission_date')) ? $this->input->post('admission_date') : date("Y-m-d h:i:s a"),
			'blood_group'		=>		$this->input->post('bloodGroup'),
			'aadhar_no'			=>		!empty($this->input->post('aadhar_no')) ? $this->input->post('aadhar_no') : '',
			'tpa_name'			=>		$this->input->post('tpa_name'),
			'tpa_no'			=>		$this->input->post('tpa_no'),
			'upload_aadhar'			=>		!empty($aadhar_fname) ? $aadhar_fname : '',
			'Insurance_comp'	=>		$this->input->post('insurance_comp'),
			'insurance_no'		=>		$this->input->post('insurance_id'),
			'id_identifiers'	=>		$this->input->post('patient_iden'),
			'ptn_asses_form'    =>		$this->input->post('ptn_asses_form'),
			'ptn_kco'    =>		!empty($this->input->post('ptn_kco')) ? $this->input->post('ptn_kco') : '',
			'ptn_chf_comp'    =>		!empty($this->input->post('ptn_chf_comp')) ? $this->input->post('ptn_chf_comp') : '',
			'ptn_fam_his'    =>		!empty($this->input->post('ptn_fam_his')) ? $this->input->post('ptn_fam_his') : '',
			'ptn_past_his'    =>		!empty($this->input->post('ptn_past_his')) ? $this->input->post('ptn_past_his') : '',
			'ptn_pulse'    =>		!empty($this->input->post('ptn_pulse')) ? $this->input->post('ptn_pulse') : '',
			'ptn_cvs'    =>		!empty($this->input->post('ptn_cvs')) ? $this->input->post('ptn_cvs') : '',
			'ptn_bp'    =>		!empty($this->input->post('ptn_bp')) ? $this->input->post('ptn_bp') : '',
			'ptn_cns'    =>		!empty($this->input->post('ptn_cns')) ? $this->input->post('ptn_cns') : '',
			'ptn_spo2'    =>		!empty($this->input->post('ptn_spo2')) ? $this->input->post('ptn_spo2') : '',
			'ptn_localex'    =>		!empty($this->input->post('ptn_localex')) ? $this->input->post('ptn_localex') : '',
			'ptn_temp'    =>		!empty($this->input->post('ptn_temp')) ? $this->input->post('ptn_temp') : '',
			'ptn_um'    =>		!empty($this->input->post('ptn_um')) ? $this->input->post('ptn_um') : '',
			'ptn_pa'    =>		!empty($this->input->post('ptn_pa')) ? $this->input->post('ptn_pa') : '',
			'ptn_rs'    =>		!empty($this->input->post('ptn_rs')) ? $this->input->post('ptn_rs') : '',
			// 'ptn_mobi'    =>		$this->input->post('ptn_mobi'),
			'ptn_foodin'    =>		!empty($this->input->post('ptn_foodin')) ? $this->input->post('ptn_foodin') : '',
			'ptn_sugess_medi' => @implode(",",$this->input->post('member')),
			'relation_with' => $this->input->post('relation_with'),
			'from_hospital_walkin' => $this->input->post('from_hospital_walkin'),
			'discharge_report' => $fname,
			'rel_name1' => $this->input->post('rel_name1'),
			'rel_name2' => $this->input->post('rel_name2'),
			'rel_add' => $this->input->post('rel_add'),
			'rel_city' => $this->input->post('rel_city'),
			'rel_phone' => $this->input->post('rel_phone'),
			'relation_with2' => $this->input->post('relation_with2'),
			'rel_add2' => $this->input->post('rel_add2'),
			'rel_city2' => $this->input->post('rel_city2'),
			'rel_phone2' => $this->input->post('rel_phone2'),
			'rel_email1' => $this->input->post('rel_email1'),
			'rel_email2' => $this->input->post('rel_email2'),
			'preassessment_no' => $this->input->post('preassessment_no'),
			'InActive'			=>		0,
			'ptn_addtnl_note' => $this->input->post('ptn_addtnl_note')
		);

    /*********************Start Previous Discharge Report code*********************/
		$images = array();
	  if (!empty($_FILES["previous_dischargefile"]["name"])) {
	  	
      for($i=0;$i<count($_FILES['previous_dischargefile']['name']);$i++){
    
          $_FILES['file']['name'] = $_FILES['previous_dischargefile']['name'][$i];
          $_FILES['file']['type'] = $_FILES['previous_dischargefile']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['previous_dischargefile']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['previous_dischargefile']['error'][$i];
          $_FILES['file']['size'] = $_FILES['previous_dischargefile']['size'][$i];
  
          $config3['upload_path'] = realpath('public/previous_discharge_report'); 
          $config3['allowed_types'] = '*';
          $config3['max_size'] = 0;
          //$config['file_name'] = rand()."".$_FILES['files']['name'][$i];
          $config3['file_name'] = $_FILES['previous_dischargefile']['name'][$i];
          //print_r($config['file_name']);
   
          // $this->load->library('upload',$config3); 
          $this->upload->initialize($config3);
          
          if($this->upload->do_upload('file')){
          	//echo $this->upload->do_upload('file');
            $uploadData = $this->upload->data();
            //$filename = $uploadData['file_name'];
            $images[] = $uploadData['file_name'];      
            //$images[] = $filename; 
            
          }
          /*$upload_error = $this->upload->display_errors();
          print_r($upload_error);*/
   
      }
      
      //$filename = implode(',',$images);
        //$data['file_name'] =$filename;
        $this->data['previous_discharge_report']=implode(',',$images);
        //$this->data['previous_discharge_report']=$filename;
    }
    /*********************End Previous Discharge Report code*********************/

		$res=$this->db->insert("patient_personal_info",$this->data);
		$preasses=$this->input->post('preassessment_no');
		if($preasses)
		{
			if($res){
				$this->data1 = array(
			'on_admission'		=>"Yes");
				$this->db->where("preasses_no",$preasses);
				$this->db->update("patient_preassessment",$this->data1);

			}

		}
		// print_r ($this->data);die;
		
		
	}
	
	public function updateAutoNum(){
		$this->db->where(array(
			'cCode'			=>		'patient_no',
			'InActive'		=>		0
		));	
		$this->data = array('cValue'	=>		$this->input->post('userID2'));
		$this->db->update("system_option",$this->data);
	}
	
	public function getPatient($id){
		$query = $this->db->get_where("patient_personal_info", array('patient_no' => $id));	
		return $query->row();
	}
	public function getDCPatient($id){
		$query = $this->db->get_where("patient_details_discharge", array('patient_no' => $id));	
		return $query->row();
	}
	
	public function validate_patient_edit(){
		$age = 0;
		$dob = strtotime($this->input->post('birthday'));
		$tdate = strtotime(date("Y-m-d"));
		while( $tdate > $dob = strtotime('+1 year', $dob))
		{
			++$age;
		}
		$this->db->where(array(
			'lastname'		=>		$this->input->post('lastname'),
			// 'firstname'		=>		$this->input->post('firstname'),
			'patient_no !='	=>		$this->input->post('id'),
			'birthday'		=>		$this->input->post('birthday'),
			'InActive'		=>		0
		));
		$query = $this->db->get("patient_personal_info");
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function validate_email_edit(){
		$this->db->where(array(
			'email_address'		=>		$this->input->post('email'),
			'patient_no !='		=>		$this->input->post('id'),
			'InActive'			=>		0
		));
		$query = $this->db->get("patient_personal_info");
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function update(){
		$age = 0;
		$dob = strtotime($this->input->post('birthday'));
		$tdate = strtotime(date("Y-m-d"));
		while( $tdate > $dob = strtotime('+1 year', $dob))
		{
			++$age;
		}
		if(!empty($dob))
		{
			$age=0;
		}
		if(!empty($this->input->post('age')))
		{
			$age=$this->input->post('age');	
		}
		$this->data = array(
			'patient_no'		=>		$this->input->post('patientID'),
			'title'				=>		$this->input->post('title'),
			// 'lastname'			=>		$this->input->post('lastname'),
			// 'firstname'			=>		$this->input->post('firstname'),
			'middlename'		=>		$this->input->post('middlename'),
			'aadhar_no'		=>		!empty($this->input->post('aadhar_no')) ? $this->input->post('aadhar_no') : '',
			'tpa_name'			=>		$this->input->post('tpa_name'),
			'tpa_no'			=>		$this->input->post('tpa_no'),
			'gender'			=>		$this->input->post('gender'),
			'civil_status'		=>		$this->input->post('civil_status'),
			'birthday'			=>		$this->input->post('birthday'),
			// 'birthplace'		=>		$this->input->post('birthplace'),
			'relative_name'		=>		$this->input->post('relative_name'),
			// 'address2'			=>		$this->input->post('address2'),
			'age'				=>		$age,
			'religion'			=>		$this->input->post('religion'),
			'street'			=>		$this->input->post('noofhouse'),
			// 'subd_brgy'			=>		$this->input->post('brgy'),
			'province'			=>		$this->input->post('province'),
			'phone_no_office'	=>		$this->input->post('phone_relative'),
			'phone_no'			=>		$this->input->post('phone_home'),
			'mobile_no'			=>		$this->input->post('phone_mobi'),
			'email_address'		=>		$this->input->post('email'),
			//'date_entry'		=>		date("Y-m-d h:i:s a"),
			'blood_group'		=>		$this->input->post('bloodGroup'),
			'Insurance_comp'	=>		$this->input->post('insurance_comp'),
			'insurance_no'		=>		$this->input->post('insurance_id'),
			'id_identifiers'	=>		$this->input->post('patient_iden'),
			'ptn_asses_form'    =>		$this->input->post('ptn_asses_form'),
			'ptn_kco'    =>		$this->input->post('ptn_kco'),
			'ptn_chf_comp'    =>		$this->input->post('ptn_chf_comp'),
			'ptn_fam_his'    =>		$this->input->post('ptn_fam_his'),
			'ptn_past_his'    =>		$this->input->post('ptn_past_his'),
			'ptn_pulse'    =>		$this->input->post('ptn_pulse'),
			'ptn_cvs'    =>		$this->input->post('ptn_cvs'),
			'ptn_bp'    =>		$this->input->post('ptn_bp'),
			'ptn_cns'    =>		$this->input->post('ptn_cns'),
			'ptn_spo2'    =>		$this->input->post('ptn_spo2'),
			'ptn_localex'    =>		$this->input->post('ptn_localex'),
			'ptn_temp'    =>		$this->input->post('ptn_temp'),
			'ptn_um'    =>		$this->input->post('ptn_um'),
			'ptn_pa'    =>		$this->input->post('ptn_pa'),
			'ptn_rs'    =>		$this->input->post('ptn_rs'),
			'ptn_mobi'    =>		$this->input->post('ptn_mobi'),
			'ptn_foodin'    =>		$this->input->post('ptn_foodin'),
			'ptn_sugess_medi' => implode(",",$this->input->post('medicine')),
			'relation_with' => $this->input->post('relation_with'),
			'from_hospital_walkin' => $this->input->post('from_hospital_walkin'),
			'rel_name1' => $this->input->post('rel_name1'),
			'rel_name2' => $this->input->post('rel_name2'),
			'rel_add' => $this->input->post('rel_add'),
			'rel_city' => $this->input->post('rel_city'),
			'rel_phone' => $this->input->post('rel_phone'),
			'relation_with2' => $this->input->post('relation_with2'),
			'rel_add2' => $this->input->post('rel_add2'),
			'rel_city2' => $this->input->post('rel_city2'),
			'rel_email1' => $this->input->post('rel_email1'),
			'rel_email2' => $this->input->post('rel_email2'),
			'rel_phone2' => $this->input->post('rel_phone2'),
		);
		$this->load->library('upload');
		/*********************Start upload image code*********************/
		if (!empty($_FILES["dischargefile"]["name"])) {
			$config = array(
				'allowed_types'		=>		'*',
				'upload_path'		=>realpath('public/on_admission_discharge_report'),
				'max_size'			=>		0
			);
			//$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('dischargefile')){
				$image_data = $this->upload->data();
				$this->data['discharge_report']=$image_data['file_name'];
			}	
		}
		/*********************End upload image code*********************/

		/*********************Start upload aadhar code*********************/
		if (!empty($_FILES["aadharfile"]["name"])) {
			$config1 = array(
				'allowed_types'		=>		'*',
				'upload_path'		=>realpath('public/aadhar'),
				'max_size'			=>		0
			);
			// $this->load->library('upload', $config1);
			$this->upload->initialize($config1);

			if($this->upload->do_upload('aadharfile')){
				$aadhar_image_data = $this->upload->data();
				$this->data['upload_aadhar']=$aadhar_image_data['file_name'];
			}
			//$error = $this->upload->display_errors();
			//print_r($error);die;	
		}
		/*********************End upload aadhar code*********************/

		/*********************Start Previous Discharge Report code*********************/
		$images = array();
		/*print_r($_FILES["previous_dischargefile"]["name"]);*/
	  if (!empty($_FILES["previous_dischargefile"]["name"])) {
	  	
      for($i=0;$i<count($_FILES['previous_dischargefile']['name']);$i++){
    
          $_FILES['file']['name'] = $_FILES['previous_dischargefile']['name'][$i];
          $_FILES['file']['type'] = $_FILES['previous_dischargefile']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['previous_dischargefile']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['previous_dischargefile']['error'][$i];
          $_FILES['file']['size'] = $_FILES['previous_dischargefile']['size'][$i];
  
          $config3['upload_path'] = realpath('public/previous_discharge_report'); 
          $config3['allowed_types'] = '*';
          $config3['max_size'] = 0;
          //$config['file_name'] = rand()."".$_FILES['files']['name'][$i];
          $config3['file_name'] = $_FILES['previous_dischargefile']['name'][$i];
          //print_r($config['file_name']);
   
          //$this->load->library('upload',$config3); 
          $this->upload->initialize($config3);
          
          if($this->upload->do_upload('file')){
          	//echo $this->upload->do_upload('file');
            $uploadData = $this->upload->data();
            //$filename = $uploadData['file_name'];
            $images[] = $uploadData['file_name'];       
            //$images[] = $filename; 
            
          }
          /*$upload_error = $this->upload->display_errors();
          print_r($upload_error);*/
   
      }
      
      // $filename = implode(',',$images);
        //$data['file_name'] =$filename;
        // $this->data['previous_discharge_report']=$filename;
        $this->data['previous_discharge_report']=implode(',',$images);
    }
    /*********************End Previous Discharge Report code*********************/

		$this->db->where("patient_no",$this->input->post('id'));
		$this->db->update("patient_personal_info",$this->data);
		// print_r($this->data);die;
	}
	public function updates(){
		$age = 0;
		$dob = strtotime($this->input->post('birthday'));
		$tdate = strtotime(date("Y-m-d"));
		while( $tdate > $dob = strtotime('+1 year', $dob))
		{
			++$age;
		}
		if(!empty($dob))
		{
			$age=0;
		}
		if(!empty($this->input->post('age')))
		{
			$age=$this->input->post('age');	
		}
		$this->data = array(
			'patient_no'		=>		$this->input->post('patientID'),
			'title'				=>		$this->input->post('title'),
			// 'lastname'			=>		$this->input->post('lastname'),
			// 'firstname'			=>		$this->input->post('firstname'),
			'middlename'		=>		$this->input->post('middlename'),
			'aadhar_no'		=>		!empty($this->input->post('aadhar_no')) ? $this->input->post('aadhar_no') : '',
			'tpa_name'			=>		$this->input->post('tpa_name'),
			'tpa_no'			=>		$this->input->post('tpa_no'),
			'gender'			=>		$this->input->post('gender'),
			'civil_status'		=>		$this->input->post('civil_status'),
			'birthday'			=>		$this->input->post('birthday'),
			// 'birthplace'		=>		$this->input->post('birthplace'),
			'relative_name'		=>		$this->input->post('relative_name'),
			// 'address2'			=>		$this->input->post('address2'),
			'age'				=>		$age,
			'religion'			=>		$this->input->post('religion'),
			'street'			=>		$this->input->post('noofhouse'),
			// 'subd_brgy'			=>		$this->input->post('brgy'),
			'province'			=>		$this->input->post('province'),
			'phone_no_office'	=>		$this->input->post('phone_relative'),
			'phone_no'			=>		$this->input->post('phone_home'),
			'mobile_no'			=>		$this->input->post('phone_mobi'),
			'email_address'		=>		$this->input->post('email'),
			//'date_entry'		=>		date("Y-m-d h:i:s a"),
			'blood_group'		=>		$this->input->post('bloodGroup'),
			'Insurance_comp'	=>		$this->input->post('insurance_comp'),
			'insurance_no'		=>		$this->input->post('insurance_id'),
			'id_identifiers'	=>		$this->input->post('patient_iden'),
			'relation_with' => $this->input->post('relation_with'),
			'from_hospital_walkin' => $this->input->post('from_hospital_walkin'),
			'rel_name1' => $this->input->post('rel_name1'),
			'rel_name2' => $this->input->post('rel_name2'),
			'rel_add' => $this->input->post('rel_add'),
			'rel_city' => $this->input->post('rel_city'),
			'rel_phone' => $this->input->post('rel_phone'),
			'relation_with2' => $this->input->post('relation_with2'),
			'rel_add2' => $this->input->post('rel_add2'),
			'rel_city2' => $this->input->post('rel_city2'),
			'rel_phone2' => $this->input->post('rel_phone2'),
			'rel_email1' => $this->input->post('rel_email1'),
			'rel_email2' => $this->input->post('rel_email2'),
		);
		$this->load->library('upload');
		/*********************Start upload image code*********************/
		if (!empty($_FILES["dischargefile"]["name"])) {
			$config = array(
				'allowed_types'		=>		'*',
				'upload_path'		=>realpath('public/on_admission_discharge_report'),
				'max_size'			=>		0
			);
			// $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('dischargefile')){
				$image_data = $this->upload->data();
				$this->data['discharge_report']=$image_data['file_name'];
			}	
		}
		/*********************End upload image code*********************/

		/*********************Start upload aadhar code*********************/
		if (!empty($_FILES["aadharfile"]["name"])) {
			$config1 = array(
				'allowed_types'		=>		'*',
				'upload_path'		=>realpath('public/aadhar'),
				'max_size'			=>		0
			);
			// $this->load->library('upload', $config1);
			$this->upload->initialize($config1);

			if($this->upload->do_upload('aadharfile')){
				$aadhar_image_data = $this->upload->data();
				$this->data['upload_aadhar']=$aadhar_image_data['file_name'];
			}
			//$error = $this->upload->display_errors();
			//print_r($error);die;	
		}
		/*********************End upload aadhar code*********************/
		/*********************Start Previous Discharge Report code*********************/
		$images = array();
		/*print_r($_FILES["previous_dischargefile"]["name"]);*/
	  if (!empty($_FILES["previous_dischargefile"]["name"])) {
	  	
      for($i=0;$i<count($_FILES['previous_dischargefile']['name']);$i++){
    
          $_FILES['file']['name'] = $_FILES['previous_dischargefile']['name'][$i];
          $_FILES['file']['type'] = $_FILES['previous_dischargefile']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['previous_dischargefile']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['previous_dischargefile']['error'][$i];
          $_FILES['file']['size'] = $_FILES['previous_dischargefile']['size'][$i];
  
          $config3['upload_path'] = realpath('public/previous_discharge_report'); 
          $config3['allowed_types'] = '*';
          $config3['max_size'] = 0;
          //$config['file_name'] = rand()."".$_FILES['files']['name'][$i];
          $config3['file_name'] = $_FILES['previous_dischargefile']['name'][$i];
          //print_r($config['file_name']);
   
          // $this->load->library('upload',$config3); 
          $this->upload->initialize($config3);
          
          if($this->upload->do_upload('file')){
          	//echo $this->upload->do_upload('file');
            $uploadData = $this->upload->data();
            //$filename = $uploadData['file_name'];
            $images[] = $uploadData['file_name'];       
            //$images[] = $filename; 
            
          }
          /*$upload_error = $this->upload->display_errors();
          print_r($upload_error);*/
   
      }
      
      // $filename = implode(',',$images);
        //$data['file_name'] =$filename;
        // $this->data['previous_discharge_report']=$filename;
        $this->data['previous_discharge_report']=implode(',',$images);
    }
    /*********************End Previous Discharge Report code*********************/

		$this->db->where("patient_no",$this->input->post('id'));
		$this->db->update("patient_personal_info",$this->data);
		
	}
	
	public function getPatientAttachment($id){
		$this->db->select("
			A.date_uploaded,
			A.attach_id,
			A.description,
			A.file_name,
			A.file_type,
			A.file_size,
			A.patient_no,
			concat(B.firstname,' ',B.lastname) as name
			",false);
		$this->db->where(array(
			'A.patient_no'	=>		$id,
			'A.InActive'		=>		0
		));
		$this->db->join("users B","B.user_id = A.uploaded_by","left outer");
		$query = $this->db->get("patient_attachment A");
		return $query->result();
	}
	
	
	public function uploadAttachment($image_data){
		$this->data = array(
			'patient_no'		=>		$this->input->post('patient_no'),
			'date_uploaded'		=>		date("Y-m-d h:i:s a"),
			'uploaded_by'		=>		$this->session->userdata('user_id'),
			'description'		=>		$this->input->post('description'),
			'file_name'			=>		$image_data['file_name'],
			'file_type'			=>		$image_data['file_type'],
			'file_size'			=>		$image_data['file_size'],
			'InActive'			=>		0
		);
		$this->db->insert('patient_attachment',$this->data);
		

	}
	public function uploadform($form_data){
		$this->data = array(
			'patient_no'		=>		$this->input->post('patient_no'),
			'date_uploaded'		=>		date("Y-m-d h:i:s a"),
			'uploaded_by'		=>		$this->session->userdata('user_id'),
			'description'		=>		$this->input->post('description'),
			'file_name'			=>		$form_data['file_name'],
			'file_type'			=>		$form_data['file_type'],
			'file_size'			=>		$form_data['file_size'],
			'InActive'			=>		0
		);
		$this->db->insert('patient_assesment_form',$this->data);
		

	}
	
	
	public function uploadImg($image_data,$emp_id){
		$this->data = array(
			'picture'	=>		$image_data['file_name']
		);
		$this->db->where('patient_no',$emp_id);
		$this->db->update('patient_personal_info',$this->data);
		

	}
	
	public function getPatientHistory($id){
		$this->db->select("allergies,warnings,social_history,family_history,personal_history,past_medical_history");
		$this->db->where("patient_no",$id);
		$this->db->order_by('id','desc');
		$query = $this->db->get("patient_details_iop");
		return $query->row();
	}
	
	public function getPatientInfo($id){
		$this->db->select("*");
		$this->db->where("A.patient_no",$id);
		$this->db->order_by('middlename','asc');
		// $this->db->join("patient_personal_info H","H.patient_no = A.param_id","left outer");
		$this->db->join("system_parameters B","B.param_id = A.title","left outer");
		$this->db->join("system_parameters C","C.param_id = A.gender","left outer");
		$this->db->join("system_parameters D","D.param_id = A.civil_status","left outer");
		$this->db->join("system_parameters E","E.param_id = A.religion","left outer");
		$this->db->join("system_parameters F","F.param_id = A.blood_group","left outer");
		// $this->db->join("insurance_comp G","G.in_com_id = A.Insurance_comp","left outer");
		$query = $this->db->get("patient_personal_info A");
		return $query->row();
	}
	public function getmedicine($id){
		$this->db->select("ptn_sugess_medi",$id);
		$this->db->where("patient_no",$id);
		// $this->db->order_by('id','desc');
		$query = $this->db->get("patient_personal_info");
		
		return $query->row();
	}
	public function discharge_save(){
		$age = 0;
		$dob = strtotime($this->input->post('birthday'));
		$tdate = strtotime(date("Y-m-d"));
		while( $tdate > $dob = strtotime('+1 year', $dob))
		{
			++$age;
		}
		if(!empty($this->input->post('discharge_date')))
		{
			$tdate=$this->input->post('discharge_date');	
		}
		
		$this->data = array(
			'patient_no'		=>		$this->input->post('patientID'),
			'title'				=>		$this->input->post('title'),
			'name'		=>		$this->input->post('middlename'),
			'gender'			=>		$this->input->post('gender'),
			'civil_status'		=>		$this->input->post('civil_status'),
			'birthday'			=>		!empty($this->input->post('birthday')) ? $this->input->post('birthday') : '',
			'age'				=>		$age,
			'religion'			=>		!empty($this->input->post('religion')) ? $this->input->post('religion') : '',
			'street'			=>		$this->input->post('noofhouse'),
			'province'			=>		$this->input->post('province'),
			'phone_no_office'	=>		$this->input->post('phone_relative'),
			'phone_no'			=>		$this->input->post('phone_home'),
			'mobile_no'			=>		$this->input->post('phone_mobi'),
			'email_address'		=>		$this->input->post('email'),
			'blood_group'		=>		$this->input->post('bloodGroup'),
			'Insurance_comp'	=>		$this->input->post('insurance_comp'),
			'insurance_no'		=>		$this->input->post('insurance_id'),
			'id_identifiers'	=>		$this->input->post('patient_iden'),
			'ptn_kco'    =>		$this->input->post('ptn_kco'),
			'ptn_chf_comp'    =>		$this->input->post('ptn_chf_comp'),
			'ptn_fam_his'    =>		$this->input->post('ptn_fam_his'),
			'ptn_past_his'    =>		$this->input->post('ptn_past_his'),
			'ptn_pulse'    =>		$this->input->post('ptn_pulse'),
			'ptn_cvs'    =>		$this->input->post('ptn_cvs'),
			'ptn_bp'    =>		$this->input->post('ptn_bp'),
			'ptn_cns'    =>		$this->input->post('ptn_cns'),
			'ptn_spo2'    =>		$this->input->post('ptn_spo2'),
			'ptn_localex'    =>		$this->input->post('ptn_localex'),
			'ptn_temp'    =>		$this->input->post('ptn_temp'),
			'ptn_um'    =>		$this->input->post('ptn_um'),
			'ptn_pa'    =>		$this->input->post('ptn_pa'),
			'ptn_rs'    =>		$this->input->post('ptn_rs'),
			'ptn_foodin'    =>		$this->input->post('ptn_foodin'),
			'ptn_sugess_medi' => implode(",",$this->input->post('medicine')),
			'relation_with' => $this->input->post('relation_with'),
			'rel_add' => $this->input->post('rel_add'),
			'rel_city' => $this->input->post('rel_city'),
			'rel_phone' => $this->input->post('rel_phone'),
			'relation_with2' => $this->input->post('relation_with2'),
			'rel_add2' => $this->input->post('rel_add2'),
			'rel_city2' => $this->input->post('rel_city2'),
			'rel_phone2' => $this->input->post('rel_phone2'),
			'discharged_date'			=>$tdate,
			'InActive'			=>		0,
			'ptn_addtnl_note' => $this->input->post('ptn_addtnl_note')
		);
		
		 return $this->db->insert("patient_details_discharge",$this->data);
		 
	}
	public function getpreassesmedicine($preasses_id){
		$this->db->select("medicine");
		$query = $this->db->get_where("preassessment_medicines",array('preasses_no' => $preasses_id));	
		return $query->result();
	}
	
	
	
	
	
}