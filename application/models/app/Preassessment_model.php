<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Preassessment_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();	
	}
	public function save_preassessment_details($data)
	{     
        $this->db->insert('patient_preassessment', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
	}
	public function save_family_details($data)
	{     
        return $this->db->insert('patient_family', $data);    
	}
		public function save_child_details($data)
	{     
        return $this->db->insert('patient_chl', $data);    
	}
		public function treating_doctor_details($data)
	{     
        return $this->db->insert('treating_doctor', $data);    
	}
		public function save_psychological_cond_details($data)
	{     
        return $this->db->insert('patient_psychological_cond', $data);    
	}
		public function save_med_details($data)
	{     
        return $this->db->insert('preassessment_medicines', $data);    
	}
		public function save_immunization_details($data)
	{     
        return $this->db->insert('preassessment_immunization_his', $data);    
	}
	
}