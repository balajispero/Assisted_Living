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
	public function print_invoice($invoice_id)
	{
		//print_r($invoice_id);
		/*if(!empty($invoice_id) && $invoice_id)
		{*/
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
            /*$invoiceFileName = 'Invoice-'.$this->data['invoiceValues'][0]['order_id'].'.pdf';
            $dompdf->stream($invoiceFileName,array("Attachment" => 0));*/

            $dompdf->stream('bill.pdf',array("Attachment" => 0));
		/*}*/
		
		    // $this->load->view('app/billing/print_invoice',$this->data);
	}
	
	
	
	
	
	
	
	
	
}