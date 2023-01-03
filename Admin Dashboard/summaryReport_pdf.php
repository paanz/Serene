<?php

require_once 'FPDF/fpdf.php';
require_once 'connection_db.php';

$sql1= "select * from admin";
$data1 = mysqli_query($conn,$sql1);

$sql2= "select * from appointment";
$data2 = mysqli_query($conn,$sql2);

$sql3= "select * from booking";
$data3 = mysqli_query($conn,$sql3);

$sql4= "select * from customer";
$data4 = mysqli_query($conn,$sql4);

$sql5= "select * from gallery";
$data5 = mysqli_query($conn,$sql5);

$sql6= "select * from property";
$data6 = mysqli_query($conn,$sql6);

$sql7= "select * from report";
$data7 = mysqli_query($conn,$sql7);

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();



	if(isset($_POST['btn_pdf1']))
	{
		/*------ADMIN-------*/
		$pdf = new FPDF('p','mm','a4');
		$pdf->SetFont('arial','B','12');
		$pdf->AddPage();
		$pdf->cell('0','20','Admin Table','0','1','');
		$pdf->cell('25','10','Admin ID','1','0','C');
		$pdf->cell('65','10','Admin Name','1','0','C');
		$pdf->cell('50','10','Admin Email','1','0','C');
		$pdf->cell('50','10','Admin Password','1','1','C');

		while($row = mysqli_fetch_assoc($data1))
		{
			$pdf->cell('25','10', $row['adminID'],'1','0','C');
			$pdf->cell('65','10', $row['admin_Name'],'1','0','C');
			$pdf->cell('50','10', $row['admin_Email'],'1','0','C');
			$pdf->cell('50','10', $row['admin_Password'],'1','1','C');
		}
		$pdf->cell('20','10','','0','1','');

		/*------APPOINTMENT-------*/
		$pdf->SetFont('arial','B','12');
		$pdf->cell('0','20','Appointment Table','0','1','');

		$pdf->SetFont('arial','B','7');
		$pdf->cell('22','10','Appointment ID','1','0','C');
		$pdf->cell('28','10','Customer Name','1','0','C');
		$pdf->cell('35','10','Customer Phone Number','1','0','C');
		$pdf->cell('38','10','Customer Email','1','0','C');
		$pdf->cell('43','10','Property Type','1','0','C');
		$pdf->cell('26','10','Apppointment Date','1','1','C');

		while($row = mysqli_fetch_assoc($data2))
		{
			$pdf->cell('22','10', $row['appointID'],'1','0','C');
			$pdf->cell('28','10', $row['cust_Name'],'1','0','C');
			$pdf->cell('35','10', $row['cust_phone'],'1','0','C');
			$pdf->cell('38','10', $row['cust_Email'],'1','0','C');
			$pdf->cell('43','10', $row['property_Name'],'1','0','C');
			$pdf->cell('26','10', $row['appoint_Date'],'1','1','C');
		}
		$pdf->cell('20','10','','0','1','');

		/*------BOOKING-------*/
		$pdf->SetFont('arial','B','12');
		$pdf->cell('0','20','Booking Table','0','1','');

		$pdf->SetFont('arial','B','8');
		$pdf->cell('17','10','Booking ID','1','0','C');
		$pdf->cell('30','10','Customer Name','1','0','C');
		$pdf->cell('37','10','Customer Phone Number','1','0','C');
		$pdf->cell('40','10','Customer Email','1','0','C');
		$pdf->cell('45','10','Property Type','1','1','C');
		//$pdf->cell('22','10','Booking Date','1','1','C');

		while($row = mysqli_fetch_assoc($data3))
		{
			$pdf->cell('17','10', $row['bookingID'],'1','0','C');
			$pdf->cell('30','10', $row['cust_Name'],'1','0','C');
			$pdf->cell('37','10', $row['cust_phone'],'1','0','C');
			$pdf->cell('40','10', $row['cust_Email'],'1','0','C');
			$pdf->cell('45','10', $row['property_Name'],'1','1','C');
			//$pdf->cell('22','10', $row['booking_Date'],'1','1','C');
		}
		$pdf->cell('20','10','','0','1','');

		/*------CUSTOMER-------*/
		$pdf->SetFont('arial','B','12');
		$pdf->cell('0','20','Customer Table','0','1','');

		$pdf->SetFont('arial','B','12');
		$pdf->cell('30','10','Customer ID','1','0','C');
		$pdf->cell('45','10','Customer Name','1','0','C');
		$pdf->cell('55','10','Customer Phone Number','1','0','C');
		$pdf->cell('60','10','Customer Email','1','1','C');


		while($row = mysqli_fetch_assoc($data4))
		{
			$pdf->cell('30','10', $row['custID'],'1','0','C');
			$pdf->cell('45','10', $row['cust_Name'],'1','0','C');
			$pdf->cell('55','10', $row['cust_phone'],'1','0','C');
			$pdf->cell('60','10', $row['cust_Email'],'1','1','C');
		}
		$pdf->cell('20','10','','0','1','');

		/*------GALLERY-------*/
		/*
		$pdf->SetFont('arial','B','12');
		$pdf->cell('0','20','Gallery Table','0','1','');

		$pdf->SetFont('arial','B','12');
		$pdf->cell('30','10','Picture ID','1','0','C');
		$pdf->cell('60','10','Picture','1','1','C');


		while($row = mysqli_fetch_assoc($data5))
		{
			$pdf->cell('55','10', $row['pictureID'],'1','0','C');
			$pdf->cell('60','10', $row['picture'],'1','1','C');
		}
		$pdf->cell('20','10','','0','1','');
		*/

		/*------PROPERTY-------*/
		$pdf->SetFont('arial','B','12');
		$pdf->cell('0','20','Property Table','0','1','');

		$pdf->SetFont('arial','B','12');
		$pdf->cell('30','10','Property ID','1','0','C');
		$pdf->cell('70','10','Property Name','1','1','C');


		while($row = mysqli_fetch_assoc($data6))
		{
			$pdf->cell('30','10', $row['propertyID'],'1','0','C');
			$pdf->cell('70','10', $row['property_Name'],'1','1','C');
		}
		$pdf->cell('20','10','','0','1','');

		/*------REPORT-------*/
		/*
		$pdf->SetFont('arial','B','12');
		$pdf->cell('0','20','Report Table','0','1','');

		$pdf->SetFont('arial','B','12');
		$pdf->cell('25','10','Report ID','1','0','C');
		$pdf->cell('45','10','Inquiry Report ID','1','0','C');
		$pdf->cell('45','10','Payment Report','1','0','C');
		$pdf->cell('45','10','Respond Report','1','0','C');
		$pdf->cell('35','10','Onsite Report','1','1','C');


		while($row = mysqli_fetch_assoc($data7))
		{
			$pdf->cell('25','10', $row['reportID'],'1','0','C');
			$pdf->cell('45','10', $row['inquiry_Rep'],'1','0','C');
			$pdf->cell('45','10', $row['payment_Rep'],'1','0','C');
			$pdf->cell('45','10', $row['respond_Rep'],'1','0','C');
			$pdf->cell('35','10', $row['onsite_Rep'],'1','1','C');
		}
		$pdf->cell('20','10','','0','1','');
		*/
	}

$pdf->Output();
?>