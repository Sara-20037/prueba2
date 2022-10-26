<?php
$N1 = $_GET['N1'];
$N2 = $_GET['N2'];
$N3 = $_GET['N3'];

/* Operadores
== igualdad
> mayor que
< menor que
>= mayor que o igual que
<= menor que o igual que

&& operador y 
or perador o

*/
   if($N1>$N2){
    if($N1>$N3){
        echo $N1. " Es mayor que ".$N2." y ".$N3;
    }
    else{
    echo $N3. " Es mayor que ".$N1." y ".$N2;
    }
    }
    else{
        if($N2>$N3){
            echo $N2." Es Es mayor que".$N1." y ".$N3;
        }
        else{
            echo $N3." Es mayor que".$N1." y ".$N2;
        }
    }

   
?>