<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../estilos/estilobcnviatja.css">  
<!--        <script type="text/javascript" src="horariostransporte.js"></script>-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
<!--                <ul class="nav navbar-nav">      
                </ul>-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a  href="#"><span class="glyphicon glyphicon-user"></span> Nombre usuario</a></li>
                    <li><a  href="../paginas/cerrarSesion.php"> <span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                </ul>
            </div>
        </nav>
        <div id="contenedor2">
            <!--        <header>
                        <h1>BCN Viatja</h1>
                    </header>-->
            <div class="nav">

                <ul id="navigationMenu">
                   <li ><a class="menuPrincipal" href="../paginas/tickets.php"><span>Mis tickets</span></a></li>
                    <li><a class="menuPrincipal" href="../paginas/recibos.php"><span>Recibos</span></a></li>
                    <li><a class="menuPrincipal" href="../paginas/comprar.php"><span>Comprar</span></a></li>
                    <li><a class="menuPrincipal" href="../paginas/horarios.php"><span>Horarios</span></a></li>
                    <li><a class="menuPrincipal" href="../paginas/mapa_zonas.php"><span>Mapa Zonas</span></a></li>
                    <li><a class="menuPrincipal" href="../paginas/contacto.php"><span>Contacto</span></a></li>
                </ul>
            </div>
            
            <div class="contacto">
            <h1 class="contacta_titulo">Contacta con nosotros</h1>
            <p>Puedes contactar con nosotros en caso de dudas<br>
            o si necesitas ayuda.</p>
            
            <h3>Telefono: </h3><p>+34 921389076</p>
            <h3>Email: </h3><p>info.bcnviatja@bcnvtj.com</p><br>
            
            
            
            <form action="">
                
                    <legend>Envíanos un mensaje</legend>
                    Asunto:<br>
                    <input class="asunto" type="text" name="asunto"/>
                    <br>
                    Mensaje:<br>
                    <textarea type="text" name="mensaje" placeholder="Escribe tu mensaje..."></textarea>
                    <br><br>
                    <input type="submit" class="boton_enviar" value="Enviar">
               
            </form>
            </div>
            <?php
            // put your code here
            ?>
    </body>
</html>