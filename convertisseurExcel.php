<?php

include 'PHPExcel/Classes/PHPExcel.php';


$filepath = $_POST["filepath"];
$split = explode("/", $filepath);
$filename = end($split);
$filename = explode(".", $filename);
$tmppath = "./data/".$filename[0];


$fileType=PHPExcel_IOFactory::identify($filepath);
$objReader = PHPExcel_IOFactory::createReader($fileType);
//Excel5 is the type of excel file.
 
$objReader->setReadDataOnly(true);   
$objPHPExcel = $objReader->load($filepath);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');

$objWriter->save($tmppath.".csv");

header('Location: index.php');

?>