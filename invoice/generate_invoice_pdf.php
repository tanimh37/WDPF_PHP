<?php 
require('fpdf.php');


$invoiceData = [
    'title' => 'Product/Service Title',
    'price' => '5000.00',
    'transaction_id' => 'TRX123456',
    'date' => date('d-m-Y'),
    'client_name' => 'Client Name',
    'payment_method' => 'Credit Card'
];

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Invoice', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial', '', 12);

// Output invoice details
$pdf->Cell(0, 10, 'Client Name: ' . $invoiceData['client_name'], 0, 1);
$pdf->Cell(0, 10, 'Title: ' . $invoiceData['title'], 0, 1);
$pdf->Cell(0, 10, 'Transaction ID: ' . $invoiceData['transaction_id'], 0, 1);
$pdf->Cell(0, 10, 'Price: ৳' . number_format($invoiceData['price'], 2), 0, 1);
$pdf->Cell(0, 10, 'Payment Method: ' . $invoiceData['payment_method'], 0, 1);
$pdf->Cell(0, 10, 'Date: ' . $invoiceData['date'], 0, 1);


$pdf->Output('I', 'invoice.pdf');

?>