<?php
    $conexion=mysqli_conect("localhost","root","","login_register_chocita");
    if($conexion){
        echo 'Conectado exitosamente a la base de datos';
    }else{
        echo'No se ha conectado a la base de datos';
    }
    $datab="usuarios";
    $
?>