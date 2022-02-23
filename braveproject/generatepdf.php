<?php
include "config.php";
include "fpdf/fpdf.php";

$pdf = new FPDF();
$pdf->AddPage();

// The code for setting heading

$pdf->SetFont('Arial','B' ,12);
$ret = "SELECT COLUMN_NAME  FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='brave' AND TABLE_NAME='students'";

$ret_result=mysqli_query($link,$ret);

//data
$data_sql ="SELECT  `fullName`, `phoneNumber`, `location`, `gender`, `photo`  FROM `students`";
$data_result=mysqli_query($link,$data_sql);

if ($data_result){
    $data_check = mysqli_num_rows($data_result);

    if ($data_check>0){

        while ($row = mysqli_fetch_array($data_result)){
            foreach ($data_result as $row){
                $pdf->SetFont('Arial','',12);
                $pdf->Ln();
                foreach ($row as $column){
                    $pdf->Cell(40, 12,$column,1);
                }

            }
            $pdf->Output();

        }

    }


}
?>