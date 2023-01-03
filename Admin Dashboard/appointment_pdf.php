<?php

require_once 'FPDF/fpdf.php';
require_once 'connection_db.php';

$sql= "select * from appointment";
$data = mysqli_query($conn,$sql);

	if(isset($_POST['btn_pdf1']))
	{
		$pdf = new FPDF('p','mm','a4');
		$pdf->SetFont('arial','B','12');
		$pdf->AddPage();
		$pdf->cell('0','20','Appointment Table','0','1','');

		$pdf->SetFont('arial','B','7');
		$pdf->cell('22','10','Appointment ID','1','0','C');
		$pdf->cell('28','10','Customer Name','1','0','C');
		$pdf->cell('35','10','Customer Phone Number','1','0','C');
		$pdf->cell('38','10','Customer Email','1','0','C');
		$pdf->cell('43','10','Property Type','1','0','C');
		$pdf->cell('26','10','Apppointment Date','1','1','C');

		while($row = mysqli_fetch_assoc($data))
		{
			$pdf->cell('22','10', $row['appointID'],'1','0','C');
			$pdf->cell('28','10', $row['cust_Name'],'1','0','C');
			$pdf->cell('35','10', $row['cust_phone'],'1','0','C');
			$pdf->cell('38','10', $row['cust_Email'],'1','0','C');
			$pdf->cell('43','10', $row['property_Name'],'1','0','C');
			$pdf->cell('26','10', $row['appoint_Date'],'1','1','C');
		}

		$pdf->Output();

	}

?>