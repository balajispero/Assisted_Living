<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';      
use Dompdf\Dompdf;
require APPPATH.'controllers/General.php'; 

class Invoice extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		$this->load->model("app/billing_model");
		$this->load->model("app/opd_model");
		$this->load->model("app/patient_model");
		$this->load->model('app/Invoicemodel');

		$this->load->model("app/doctor_model");
		$this->load->model("app/ipd_model");
		/*if(General::is_logged_in() == FALSE){
            redirect(base_url().'login');    
        }*/
		General::variable();	
	}

	public function invoice_list()
	{
		$this->data['invoiceList'] = $this->Invoicemodel->getInvoiceList();
		
		$this->load->view('app/billing/invoice_list',$this->data);
	}
	/*public function print_invoice($invoice_id)
	{
		//print_r($invoice_id);
		//if(!empty($invoice_id) && $invoice_id)
		//{
			$this->data['invoiceValues'] = $this->Invoicemodel->getInvoice($invoice_id);	
				
			$this->data['invoiceItems'] = $this->Invoicemodel->getInvoiceItems($invoice_id);
			
            
			$dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled',TRUE);
            $canvas=$dompdf->get_canvas();
            //$this->load->view('app/doctor/preassessment_report',$this->data);
            $html = $this->load->view('app/billing/print_invoice',$this->data,true);

            $dompdf->loadHtml($html);
           
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser
            //$invoiceFileName = 'Invoice-'.$this->data['invoiceValues'][0]['order_id'].'.pdf';
            //$dompdf->stream($invoiceFileName,array("Attachment" => 0));

            $dompdf->stream('bill.pdf',array("Attachment" => 0));
		//}
		
		    // $this->load->view('app/billing/print_invoice',$this->data);
	}*/


	public function ipd($offset = 0){
				 
		$this->session->set_userdata(array(
				 'tab'			=>		'billing',
				 'module'		=>		'bill_history',
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
		$config['base_url'] = base_url().'app/invoice/ipd/';
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
									anchor('app/invoice/view/'.$patient->IO_ID.'/'.$patient->patient_no,$patient->patient_no),
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
		$this->load->view('app/billings/ipd',$this->data);	
	}
	public function view(){
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['getOPDPatient'] = $this->ipd_model->getIPDPatient($iop_no);
		$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
		
		$this->load->view("app/billings/view",$this->data);	
	}

	public function lab_invoice()
	{
		$iop_no = $this->uri->segment("4");
		$patient_no = $this->uri->segment("5");
			$this->data['patientInfo'] = $this->patient_model->getPatientInfo($patient_no);
			$this->data['invoiceItems'] = $this->Invoicemodel->generate_lab_bill($iop_no,$patient_no);
			/*echo "<pre>";
			print_r($this->data['invoiceItems']);die;*/
            
			$dompdf = new Dompdf();
            $dompdf->set_option('isRemoteEnabled',TRUE);
            $canvas=$dompdf->get_canvas();
            //$this->load->view('app/doctor/preassessment_report',$this->data);
            $html = $this->load->view('app/billings/lab_invoice',$this->data,true);

            $dompdf->loadHtml($html);
           
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser
            /*$invoiceFileName = 'Invoice-'.$this->data['invoiceValues'][0]['order_id'].'.pdf';
            $dompdf->stream($invoiceFileName,array("Attachment" => 0));*/

            $dompdf->stream('bill.pdf',array("Attachment" => 0));
		
		
		    // $this->load->view('app/billing/print_invoice',$this->data);
	}
	
	
	
	
	
	
	
	
	
}