<?php
    session_start();
    include 'conexion.php';

    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $contrasena=hash('sha512',$contrasena);

    $validar_login=mysqli_query($conexion,"SELECT * FROM usuarios WHERE Correo='$correo'
     and Contraseña='$contrasena'");

     if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario']=$correo;
        header("location: ..//Main.php");
        exit;
     }else{
        echo '
            <script>
                alert("Usuario no existe, verifique los datos introducidos");
                window.location="..//index.php";
            </script>
        ';
        exit();
     }
?>