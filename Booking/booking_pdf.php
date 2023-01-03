<?php

require_once 'FPDF/fpdf.php';
require_once 'connection_db.php';

$sql= "select * from booking";
$data = mysqli_query($conn,$sql);

	if(isset($_POST['btn_pdf1']))
	{
		$pdf = new FPDF('p','mm','a4');
		$pdf->SetFont('arial','B','12');
		$pdf->AddPage();
		$pdf->cell('0','20','Booking Table','0','1','');

		$pdf->SetFont('arial','B','8');
		$pdf->cell('17','10','Booking ID','1','0','C');
		$pdf->cell('30','10','Customer Name','1','0','C');
		$pdf->cell('37','10','Customer Phone Number','1','0','C');
		$pdf->cell('40','10','Customer Email','1','0','C');
		$pdf->cell('45','10','Property Type','1','1','C');

		while($row = mysqli_fetch_assoc($data))
		{
			$pdf->cell('17','10', $row['bookingID'],'1','0','C');
			$pdf->cell('30','10', $row['cust_Name'],'1','0','C');
			$pdf->cell('37','10', $row['cust_phone'],'1','0','C');
			$pdf->cell('40','10', $row['cust_Email'],'1','0','C');
			$pdf->cell('45','10', $row['property_Name'],'1','1','C');
		}

		$pdf->Output();

	}

?>