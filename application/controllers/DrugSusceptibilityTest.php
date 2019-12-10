<?php
class DrugSusceptibilityTest extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('DrugSusceptibilityTest_Model');
	}

	public function index()
	{
		$row = $this->DrugSusceptibilityTest_Model->getData();
		$data['specimenCode'] = $row['SpecimenCode'];
		$data['patientID'] = $row['PatientID'];
		$data['patientFirstName'] = $row['PatientFirstName'];
		$data['patientMiddleName'] = $row['PatientMiddleName'];
		$data['patientLastName'] = $row['PatientLastName'];
		$data['gender'] = $row['PatientSex'];
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');
		$data['medtechs'] = $this->DrugSusceptibilityTest_Model->getMedTechs();
		$this->load->view('pages/drug-susceptibility-test',$data);
	}

	public function add(){
		$this->DrugSusceptibilityTest_Model->inputData();
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');

		$result1 = $this->input->post('streptomycinResult');
		$result2 = $this->input->post('isoniazidResult');
		$result3 = $this->input->post('rifampicinResult');
		$result4 = $this->input->post('ethambutolResult');
		$result5 = $this->input->post('p2aResult');
		$MedTech = $this->input->post('medTech');
		$PatientName = $this->input->post('patientNameHidden');
        $PatientID = $this->input->post('patientIDHidden');
        $ReportDate = $this->input->post('dateReported');
		$this->generate_pdf($PatientID, $PatientName, $ReportDate, $result1, $result2, $result3, $result4, $result5, $MedTech);
		$this->load->view('menu',$data);
	}

	public function generate_pdf($PatientID, $PatientName, $ReportDate, $result1, $result2, $result3, $result4, $result5, $MedTech)
    {
        // Load PDF Library
        $this->load->library('DSTPdf');

        $pdf = new DSTPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('tblab');
        $pdf->SetTitle('Drug Susceptibility stream_resolve_include_path(filename)');
        $pdf->SetSubject('PDF of Drug Susceptibility Test Result');
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
    
    $pdf->setCellHeightRatio(1.0);
        $txt = "<pre>
<h1>TB LABORATORY DEPARTMENT</h1>
<h4>DRUG SUSCEPTIBILITY TEST REPORT</h4>
</pre>";

    $pdf->writeHTMLCell(0, 0, '', '', '<pre>'.$txt.'</pre>', 0, 1, 0, true, 'C', true); 
  
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    // Set some content to print
    $html = "
        Patient Name: ".$PatientName."
        Patient ID: ".$PatientID."

    <div>
       	DRUG SUSCEPTIBILITY TEST RESULT

        DRUG							\t\t\t\t\tDRUG CONCENTRATION						RESULT
        Streptomycin				1.0 mcg/ml 												".$result1."
        Isoniazid							0.1 mcg/ml 												".$result2."
        Rifampicin						1.0 mcg/ml 												".$result3."
        Ethambutol						5.0 mcg/ml 												".$result4."
        Pyrazinamide				100 mcg/ml 												".$result5."
    </div>
    
    Date Reported: ".$ReportDate."

    <div>                                   ________________________</div>
                                      Medical Technologist
                                      ".$MedTech."";

    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', '<pre>'.$html.'</pre>', 0, 1, 0, true, 'L', true);   
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output("Drug Susceptibility Test " .$PatientID. " Result", 'I');
    exit();  
  


    //============================================================+
    // END OF FILE
    //============================================================+
    }
}
?>