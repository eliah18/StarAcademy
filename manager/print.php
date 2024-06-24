<?php
include("conn.php"); 
error_reporting(0);
ob_start();
session_start(); 

	function generateRow($connection){
    $date1=$_GET['start'];
$date2=$_GET['end'];

		$contents = '';
	 	
        $contents .=  '
      
        <thead>
          <tr>
            <th>Nat_ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>School</th>
            <th> Num of Az</th>
            <th>Accepted By</th>
            <th> Date Added</th>
            <th>Time Added</th>
           
          </tr>
        </thead>
        
        ' ;
       
        $sqln="SELECT * FROM personal_info WHERE status ='Accepted'  order by Az desc ";
        $query = $connection->query($sqln);
        while ($row = $query->fetch_assoc()){
          
             
             
            $contents .=  "
            <tbody>
                <tr>
                  
                  <td>".$row['nat_id']."</td>
                  <td>".$row['name']."</td>
                  <td>".$row['surname']."</td>
                  <td>".$row['xul_name']."</td>
                  <td>".$row['Az']."</td>
                  <td>".$row['accepted_rejected']."</td>
                  <td>".$row['date_added']."</td>
                  <td>".$row['time_added']."</td>

                 
                </tr>
                </tbody>
                ";
            }
           
		return $contents;
	}
		
	$parse = parse_ini_file('config.ini', FALSE, INI_SCANNER_RAW);
    $title = $parse['Accepted_Students'];

	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Accepted: '.$title);  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center">HIGHERLIFE FOUNDATION</h2>
      	<h4 align="center">STAR ACADEMY '.$title.'</h4>
      	<table class="table table-bordered" border="1" id="dataTable" width="100%" cellspacing="0"> 
      ';  
   	$content .= generateRow($connection);  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('accepted_students.pdf', 'I');

?>