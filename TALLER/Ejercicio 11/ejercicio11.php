<?php
$Vpro = $_POST['Costo'];
$Prvender = $Vpro + ($Vpro * 0.15);

if($Vpro){
    echo "Se vendió por: ".$Prvender;
}

?>