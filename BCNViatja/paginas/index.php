<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilobcnviatja.css">  
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    </head>
    <body>
        <div class="container-fluid">
            <!--<div id="contenedor">-->
            <header>
                <h1>BCN Viatja</h1>
            </header>
            <div class="ini">
                <form action='' method="post">
                    <h2>Inicio de sesion: </h2><br><br>
                    <input type="text" class="datos" placeholder="Nombre de usuario" name="usuario" /><br>
                    <input type="password" class="datos" placeholder="Contraseña" name="contraseña" /><br><br>
                    <input type="submit"  name="iniciar" class="boton" value="Iniciar"/>
                </form>
            </div>
            <div class="ini">
                <form action='' method="post">
                    <h2>Crea una nueva cuenta: </h2><br><br>
                    <input type="text" class="datos" placeholder="Nombre" name="nombre" /><br>
                    <input type="text" class="datos" placeholder="Apellidos" name="apellidos" /><br>
                    <input type="date" class="datos" placeholder="Fecha nacimiento" name="fecha_nac" /><br>
                    <input type="email" class="datos" placeholder="C@rreo" name="correo" /><br>
                    <input type="tel" class="datos" placeholder="telefono" name="telefono"/><br>
                    <input type="text" class="datos" placeholder="Nombre usuario" name="nom_usuario"/><br>
                    <input type="password" class="datos" placeholder="Contraseña" name="contraseña1" /><br>
                    <input type="password" maxlenght="10" class="datos" placeholder="Repite contraseña" name="contraseña2" /><br><br>
                    <input type="submit" name="crea" class="boton" value="Crear cuenta"/><br><br>
                    <label><input type="checkbox" id="chcbx" value="first_checkbox"> He leído y acepto los términos y licencia de uso</label><br>
                </form>
            </div>
        </div>
        <!--</div>-->
    </body>
</html>
<?php

error_reporting(E_ALL ^ E_NOTICE);

@$conexion = new mysqli('localhost', 'root', '', 'bcnviatja');
$error = $conexion->connect_errno;

if ($error) {
    echo "ERROR EN LA CONEXION BDD";
    exit();
} else {

    //INSERTAR DATOS INTRODUCIDOS POR EL USUARIO EN LA BASE DE DATOS.
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha_nac = $_POST['fecha_nac'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $nom_usuario = $_POST['nom_usuario'];
    $contrasenya = $_POST['contraseña1'];

    //CREA CUENTA

    if (isset($_POST['crea'])) {

        //Comprueba que el nombre de usuario, telefono o correo no estan en la bbdd.
        $verificaNoExisteCuenta = "SELECT * FROM clientes WHERE nom_usuario='" . $_POST['nom_usuario'] . "' OR Email='" . $_POST['correo'] . "' OR Telefono='" . $_POST['telefono'] . "'";
        $r = $conexion->query($verificaNoExisteCuenta);
        $n = mysqli_num_rows($r);

        if ($n > 0) {

            echo'<script>alert("Asegurese que los campos de Email,Telefono o Usuario son correctos.")</script>';
        } else {
            //Si esta todo validado crea la cuenta y la guarda en la bbdd.   
            $insertaRegistro = "INSERT INTO clientes (id,Nombre,Apellidos,Fecha_nac,Email,Telefono,nom_usuario,Contrasenya) VALUES ('0','$nombre','$apellidos','$fecha_nac','$email','$telefono','$nom_usuario','$contrasenya')";

            if ($conexion->query($insertaRegistro) === TRUE) {
                echo'<script>alert("Se ha registrado correctamente, inicie sesion.")</script>';
            } else {
                echo'error' . $insertaRegistro . "<br>" . $conexion->error;
            }
        }
    }

    //INICIA SESION
    if (isset($_POST['iniciar'])) {
        //Comprobamos que los campos no estan vacios.
        if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['contraseña']) && !empty($_POST['contraseña'])) {

            //Verifica el nombre de usuario y contraseña. Que existan en la bbdd.
            $verificaInicioSesion = "SELECT * FROM clientes WHERE nom_usuario='" . $_POST['usuario'] . "' AND Contrasenya='" . $_POST['contraseña'] . "'";
            $resultado = $conexion->query($verificaInicioSesion);
            $num = mysqli_num_rows($resultado);

            //Si existen registros con ambos valores inicia session.
            if ($num > 0) {
                session_start();
                $_SESSION[login] = 1;
                header('Location: ../paginas/tickets.php');
            } else {
                echo "<script>alert('El usuario o contraseña no son correctos. Intentelo de nuevo.')</script>";
            }
        }
    }
}

        
