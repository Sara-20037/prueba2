<?php
$Nom = $_GET['Nombre'];
$Mat = $_GET['Materia'];
$Exm1 = $_GET['Exam1'];
$Exm2 = $_GET['Exam2'];
$Exm3 = $_GET['Exam3'];

$porc1 = $Exm1 * 0.3;
$porc2 = $Exm2 *0.3;
$porc3 = $Exm3 * 0.4;

$final = $porc1 + $porc2 + $porc3;

if ($final<4) {
   echo "El estudiante ".$Nom." Reprobo con una nota de ".$final;
}
 else{
    echo "El estudiante ".$Nom." aprobo con una nota de ".$final;
 }
 
?>