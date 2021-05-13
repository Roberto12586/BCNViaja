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
                        <td class="titulo_horarios" colspan="5">HORARIOS</td>
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
                            <h4>Horario General</h4>
                            <p>Lunes a Jueves: 5:00 - 24:00 h<br>
                                Viernes: 5:00 - 02:00 h<br>
                                Sábados: 05:00 - sin cierre*<br>
                                Domingos: sin cierre* - 24:00 h</p><br><br>

                            <h4>Horario especial</h4>                       
                            <p>
                                24 de Diciembre: 05:00 - 23:00 h<br>
                                Visperas de festivos: 5:00 - 02:00 h<br>
                                festivos: 5:00 - 24:00 h<br>
                                Otras noches con servicio Continuo:<br>
                                - Verbena de Sant Joan, del 23 al 24 de junio.<br>
                                - Fiestas de Grácia, del 17 al 18 de agosto.<br>
                                - Fiestas de la Mercé, del 19 al 20 de septiembre.<br>
                                - La Mercé, del 21 al 22 y del 23 al 24 de septiembre.<br>
                                - Fin de Año, del 31 de diciembre al 1 de enero.<br>
                            </p>                       
                        </td>
                        <td>                        
                            <a href="https://www.redtransporte.com/barcelona/cercanias-renfe/horarios.html" target="_blank">Buscar</a>                                        
                        </td>
                        <td >                        
                            <a href="https://www.tmb.cat/es/barcelona/autobuses/lineas" target="_blank">Buscar</a>                           
                        </td>
                        <td >                        
                            <a href="http://www.tram.cat/es/lineas-y-horarios/" target="_blank">Buscar</a>                            
                        </td>
                        <td >                        
                            <a href="https://www.fgc.cat/es/buscador/" target="_blank">Buscar</a>                           
                        </td>
                    </tr>

                </table>
            </div>
            <?php
            // put your code here
            ?>
    </body>
</html>