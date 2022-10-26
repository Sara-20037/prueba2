<?php
  $Ganar = $_POST['Ganar'];
  $Perder = $_POST['Perder'];
  $Empate = $_POST['Empate'];

  $PuntajeG = $Ganar * 3;
  $PuntajeP = $Perder * 0;
  $PuntajeE = $Empate * 1;

  $Resultado = $PuntajeG + $PuntajeP + $PuntajeE ;

  echo "Partidos Ganados: ".$Ganar." Partidos Perdidos: ".$Perder." Empates: ".$Empate." Puntaje Final: ".$Resultado;
  
 ?>
