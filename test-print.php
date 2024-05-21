<?php
require_once __DIR__ . '/vendor/autoload.php';

// Initialize MPDF
$mpdf = new \Mpdf\Mpdf();

// Write HTML content to PDF
$mpdf->WriteHTML($html);

// Output PDF
$mpdf->Output('Surat_Tugas.pdf', 'D');

?>