

<?php

class PDF extends FPDF
{
	//Page header
	function Header() {

		// Logo
		// $this->Image(base_url() . 'asset/admin/img/pdf-logo.jpg',10,6,30, 'jpeg');
		// Arial bold 15
		$this->SetFont('Arial', '', 9);
		// Move to the right
		$this->Cell(35);
		// Title
		$this->Cell(30, 30, 'Jl. Veteran UH IV RT 34 RW 08 No. 996 Warungboto, Umbulharjo, Yogyakarta');
		// Line break
		$this->Ln(20);
		//buat garis horizontal
		$this->Line(11, $this->GetY(), 199, $this->GetY());
		$this->Ln(0.6);
		$this->Line(11, $this->GetY(), 199, $this->GetY());
		$this->Ln(5);
		$this->SetLeftMargin(11);
		$this->setFont('Arial','',10);
        $this->setFillColor(230,230,200);
        $this->cell(10,10,'No',1,0,'C',1);
        $this->cell(43,10,'Pembeli',1,0,'C',1);
        $this->cell(50,10,'Produk',1,0,'C',1);
        $this->cell(40,10,'Tanggal',1,0,'C',1);
        $this->cell(25,10,'Harga',1,0,'C',1);
        $this->cell(20,10,'Status',1,1,'C',1);
	}
 
	function Content($data) {
		$ya = 40;
		$rw = 6;
		$no = 1;
		foreach ($data as $key) {
			$this->setFont('Arial', '', 10);
			$this->setFillColor(255, 255, 255);
			$this->cell(10,10,$no,1,0,'C',1);
			$this->cell(43, 10, $key->nama, 1, 0, 'L', 1);
			$this->cell(50, 10, $key->nama_produk, 1, 0, 'C', 1);
			$this->cell(40, 10, $key->date, 1, 0, 'C', 1);
			$this->cell(25, 10, number_format($key->harga,  0, ',', ','), 1, 0, 'C', 1);
			$this->cell(20, 10, $key->status, 1, 1, 'C', 1);
			$ya = $ya + $rw;
			$no++;
		}
	}
	
	function Footer() {
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(11, $this->GetY(), 199, $this->GetY());
		//Arial italic 9
		$this->SetFont('Arial', 'I', 9);
		$this->Cell(0, 10, 'copyright sjprostore.com. Allright Reserved ' . date('Y'), 0, 0, 'L');
		//nomor halaman
		$this->Cell(0, 10, 'Halaman ' . $this->PageNo() . ' dari {nb}', 0, 0, 'R');
	}

}
 
ob_start();
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($data);
$pdf->Output();
ob_end_flush();