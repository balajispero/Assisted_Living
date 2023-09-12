<?php if (!defined('BASEPATH')) exit ('No Access');

class fpdf_gen
{
    public function __construct()
    {
        require_once APPPATH.'third_party/fpdf/fpdf.php';
        $pdf=new FPDF();
        $pdf->Addpage('L');
        $CI=get_instance();
        $CI->fpdf=$pdf;
    }
}


?>