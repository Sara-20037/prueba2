<?php

$Ed = $_POST['Edad'];
$Sex = $_POST['Sexo'];


if($Ed>=63 && $Sex=="Masculino"){
    echo "Apto para jubilarse";
}

elseif($Ed>=54 && $Sex=="Femenino"){
    echo "Apto para jubilarse";
}
else{
    echo "No es apto para jubilarse";
}
?>