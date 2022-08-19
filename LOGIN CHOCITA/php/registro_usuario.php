<?php 
    include 'conexion.php';

    //Variables
    $nombre_completo=$_POST['nombre_completo'];
    $correo =$_POST['correo'];
    $usuario =$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    //Encriptacion con Algoritmo sha512
    $contrasena=hash('sha512',$contrasena);

    $query="INSERT INTO usuarios(NomCompleto,Correo,Usuario,Contraseña)
        VALUES('$nombre_completo','$correo','$usuario','$contrasena')";
    
    //Verificar que el correo no se repita
    $verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE Correo='$correo'");
    if(mysqli_num_rows($verificar_correo)>0){
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location="..//index.php";
            </script>
        ';
        exit();
    }
    //Verificar que el Usuario no se repita
    $verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE Usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario)>0){
        echo '
            <script>
                alert("Este usuario ya está registrado, intenta con otro diferente");
                window.location="../index.php";
            </script>
        ';
        exit();
    }


    $ejecutar =mysqli_query($conexion,$query);
    if($ejecutar){
        echo'
            <script>
                alert("Usuario almacenado exitosamente");
                window.location="..//index.php";
            </script>
        ';
    }else{
        echo'
            <script>
                alert("Inténtalo nuevamente");
                window.location="..//index.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>