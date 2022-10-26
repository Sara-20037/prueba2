<?php

    $Valpago = $_POST['Val'];
    $precio = $Valpago-($Valpago*0.2);

    if($Valpago>=20000){
        echo "Total a pagar: ".$precio;    
        }else{
            echo "Total a pagar: ".$Valpago;  
    }
    
?>