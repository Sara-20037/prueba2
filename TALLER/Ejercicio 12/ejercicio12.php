<?php

    $Vcapital = $_POST['Cap'];
    $Inter1 = $Vcapital+($Vcapital * 0.2);
    $Inter2 = $Vcapital+($Vcapital * 0.45);
    $Inter3 = $Vcapital+($Vcapital * 0.07);

    if($Vcapital<=500){
        echo "Capital ingresado: ".$Vcapital." Valor de la capital a pagar: ".$Inter1;    
    }
    elseif($Vcapital>=500 && $Vcapital<=1500){
        echo "Capital ingresado: ".$Vcapital."  Valor de la capital a pagar: ".$Inter2;
    }
    if($Vcapital>=1500){
        echo "Capital ingresado: ".$Vcapital."  Valor de la capital a pagar: ".$Inter3;
    }
?>