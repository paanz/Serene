<?php

require_once 'FPDF/fpdf.php';
require_once 'Connection_LoginPhp.php';

$sql= "select * from admin";
$data = mysqli_query($conn,$sql);

	if(isset($_POST['btn_pdf1']))
	{
		$pdf = new FPDF('p','mm','a4');
		$pdf->SetFont('arial','B','12');
		$pdf->AddPage();
		$pdf->cell('25','10','Admin ID','1','0','C');
		$pdf->cell('65','10','Admin Name','1','0','C');
		$pdf->cell('50','10','Admin Email','1','0','C');
		$pdf->cell('50','10','Admin Password','1','1','C');

		while($row = mysqli_fetch_assoc($data))
		{
			$pdf->cell('25','10', $row['adminID'],'1','0','C');
			$pdf->cell('65','10', $row['admin_Name'],'1','0','C');
			$pdf->cell('50','10', $row['admin_Email'],'1','0','C');
			$pdf->cell('50','10', $row['admin_Password'],'1','1','C');
		}

		$pdf->Output();

	}
/*
class PDF extends FPDF
{
	$this->Image('img/GBJSB-Logo.png',10,6,30);
	$this->SetFont('Arial','B','15');
	$this->cell(80);
	$this->cell(30,10,'Title',1,0,'C');
	$this->Ln(20);
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
+/
*/
?>