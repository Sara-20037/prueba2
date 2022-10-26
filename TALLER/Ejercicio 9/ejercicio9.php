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
 if (($Exm1>5) || ($Exm2>5) || ($Exm3>5)) {
    echo "Digite un número entre 0 y 5";
 }
 else{
    echo "El estudiante ".$Nom." aprobo con una nota de ".$final;
 }
}
elseif ($final<4){
    if (($Exm1>0) || ($Exm2>0) || ($Exm3>0)) {
        echo "Digite un número entre 0 y 5";
     }
     else{
        echo "El estudiante ".$Nom." Reprobo con una nota de ".$final;
     } 
}
?>