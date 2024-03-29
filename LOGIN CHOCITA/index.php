<?php 
    session_start();
    if(isset($_SESSION['Usuario'])){
        header("location: Main.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mi Chocita - CesarGJC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Condensed:wght@700&family=Roboto+Slab:wght@300;400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera__login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn__Iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera__register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para iniciar Sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            
            <!--Formulario Logins-->
            <div class="contenedor__login-register">
                <form action="php/login_usuario.php"method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correro Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                    <img src="..//LOGIN CHOCITA/assets/images/Logo.png" alt="Logo">
                </form>
            <!--Formulario Registros-->
                <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electroníco" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Regístrarse</button>
                    <img src="..//LOGIN CHOCITA/assets/images/Logo.png" alt="Logo">
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>