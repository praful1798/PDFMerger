<?php
use PDFMerger\PDFMerger;
require_once 'PDFMerger.php';

$pdf = new PDFMerger;

$pdf->addPDF('pdf1.pdf', '1')
	->addPDF('pdf2.pdf', '1')
	->addPDF('control system.pdf', 'all')
	->merge('download', 'TEST2.pdf');
	
	
	
	//REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
	//You do not need to give a file path for browser, string, or download - just the name.
