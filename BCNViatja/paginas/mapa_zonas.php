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
            
            <div class="tabla_comprar">
            <table>
                <tr>
                    <td class="titulo_horarios" colspan="5">MAPA DE ZONAS TRANSPORTES</td>
                </tr>
                <tr>
                    <td>Metro</td>
                    <td>Renfe</td>
                    <td>Bus</td>
                    <td>Tranvia</td>
                    <td>FGC</td>
                </tr>
                <tr>
                    <td rowspan="3">       
                        <a href="../pdfs/planometrobarcelona.pdf" target="_blank">Metro BCN</a>             
                    </td>
                    <td>
                        <a href="../pdfs/planorenfebcn.pdf" target="_blank">Renfe BCN</a>                                           
                    </td>
                    <td >
                        <a href="../pdfs/planoBUSbcn.pdf" target="_blank">Bus BCN</a>                       
                    </td>
                    <td >
                        <a href="../pdfs/planotranviabcn.pdf" target="_blank">Tranvia BCN</a>                       
                    </td>
                    <td >
                        <a href="../pdfs/planoFGCbcn.pdf" target="_blank">FGC</a>                       
                    </td>
                </tr>
                
            </table>
            </div>
            <?php
            // put your code here
            ?>
    </body>
</html>