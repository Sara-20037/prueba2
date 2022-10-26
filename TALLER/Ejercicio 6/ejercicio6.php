<?php

    $Volantes = $_POST['Volantes'];
    $Posters = $_POST['Posters'];
    $T_Presen = $_POST['T_Presen'];

    $VVolantes = $Volantes * 2000;
    $VPosters = $Posters * 5000;
    $VT_Presen = $T_Presen * 500;

    $Suma = ($VVolantes + $VPosters + $VT_Presen);
    
    echo "Cantidad de Volantes: ".$VVolantes.", Cantidad de Posters: ".$VPosters.", Cantidad de Tarj. Presentasión: ".$VT_Presen.", El total a pagar es: ".$Suma;
?>


