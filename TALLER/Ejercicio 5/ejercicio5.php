<?php

    $Her_1 = $_POST['Edad_1'];
    $Her_2 = $_POST['Edad_2'];

    
    if($Her_1>$Her_2){
        $Edades = $Her_1 - $Her_2;        
        echo "El hermano mayor tiene ".$Her_1." y el hermano menor tiene ".$Her_2." y la diferencia es: ".$Edades;
            
    }else{
        $Edades = $Her_2 - $Her_1; 
        echo "El hermano mayor tiene ".$Her_2." y el hermano menor tiene ".$Her_1." Entoces la diferencia es de: ".$Edades;
        }
?>