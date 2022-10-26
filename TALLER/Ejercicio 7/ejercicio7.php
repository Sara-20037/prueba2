<?php

$Nom = $_POST['Nombre'];
$Asig = $_POST['Asignatura'];
$Cal = $_POST['Cal'];

if($Cal<7){
    echo $Nom." ".$Asig." ".$Cal.":"." Desaprobado";
}else{
    echo $Nom." ".$Asig." ".$Cal.":"." Aprobado";

}

?>