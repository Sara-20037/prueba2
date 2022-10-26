<?php
  $Nombre = $_POST['Número1'];
  $Asignatura = $_POST['Número2'];
  $Promedio1 = $_POST['Número3'];
  $Promedio2 = $_POST['Número4'];
  $Promedio3 = $_POST['Número5'];
  $Prom1 = "El promedio es";
  

  $Suma = ($Promedio1 + $Promedio2 + $Promedio3) / 3;

  echo $Nombre." ".$Asignatura." ".$Prom1." ".$Suma;
  
 ?>