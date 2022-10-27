<?php

    $Vcapital = $_POST['Cap'];
    $Inter1 = $Vcapital+($Vcapital * 0.2);
    $Inter2 = $Vcapital+($Vcapital * 0.45);
    $Inter3 = $Vcapital+($Vcapital * 0.07);

    if($Vcapital<=500){
        echo "Capital ingresado: ".$Vcapital." Valor a capital ".$Inter1;    
    }
    elseif($Vcapital>=500 && $Vcapital<=1500){
        echo "Capital ingresado: ".$Vcapital." Valor a capital ".$Inter2;
    }
    if($Vcapital>=1500){
        echo "Capital ingresado: ".$Vcapital." Valor a capital ".$Inter3;
    }
?>