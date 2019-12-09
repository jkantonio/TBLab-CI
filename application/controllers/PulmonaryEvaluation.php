<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PulmonaryEvaluation extends CI_controller{
    public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('PulmonaryEvaluation_Model');
    }
    
	public function index(){
        //call search function
        $data['results'] = $this->PulmonaryEvaluation_Model->getSpecimenCode();
        $data['userID'] = $this->session->userdata('userID');
        $this->load->view('pages/pulmonary-evaluation', $data);
    }

    public function schedEvalDate(){
        // For PDF
        // $PatientFN = $row['PatientFirstName'];
        // $PatientMN = $row['PatientMiddleName'];
        // $PatientLN = $row['PatientLastName'];
        //get values from post
        $PatientName = $this->input->post('patientFullName');
        $PatientID = $this->input->post('patientID');
        $date = $this->input->post('scheduledDate');
        $time = $this->input->post('scheduledTime');
        $sputumCollectionID = $this->input->post('sputumCollectionID');
        $this->PulmonaryEvaluation_Model->setScheduleDate($date, $time, $sputumCollectionID);
        $this->generate_pdf($PatientID, $PatientName, $date, $time);
        $this->load->view('pulmoeval', $data);
    }

    public function generate_pdf($PatientID, $PatientName, $date, $time)
    {
        // Load PDF Library
        $this->load->library('PulmoPdf');

        $pdf = new PulmoPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('tblab');
        $pdf->SetTitle('Pulmonary Evaluation stream_resolve_include_path(filename)');
        $pdf->SetSubject('PDF of Pulmonary Evaluation Slip');
        $pdf->SetKeywords('TCPDF, tblab');

        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set font
        $pdf->SetFont('times', 'BI', 12);
        
        // ---------------------------------------------------------

        //Generate HTML table data from MySQL - start
        $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('times', '', 12, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
    $pdf->AddPage(); 
  
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    // Set some content to print
    $html = "
        Name: ".$PatientName."
        Date of Collection: ".$date."

    <div>
            Please come personally at ".$time."
        Present this slip and your passport at the ground floor 
        Pulmonary Evaluation counter for the smear result.
    </div>
    <div>
            Incubation period for the culture requires eight (8) 
        weeks or two (2) months for a negative result to be 
        released.
    </div>

    <div>                                   ________________________</div>
                                      Lab Representative";

    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', '<pre>'.$html.'</pre>', 0, 1, 0, true, 'L', true);   
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output("Pulmonary Evaluation Patient " .$PatientID. " Slip", 'D');
    exit();  
  


    //============================================================+
    // END OF FILE
    //============================================================+
    }
}
?>