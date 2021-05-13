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

            <div class="tabla">

                <table>
                    <tr>
                        <th colspan="2">Elige un ticket de compra: </th>     
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-sencillo</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>        
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-1 día</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>        
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-1/T-2</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>        
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-10</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>                 
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-50/30</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>                  
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-70/30</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>                               
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-mes</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>                               
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-trimestre</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>                               
                    </tr>
                    <tr>
                        <td><img scr="img/factura.png" /> T-trimestre jove</td>
                        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalTicket">Comprar</button></td>                               
                    </tr>
                    
                </table>
            </div>

            <div id="modalTicket" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Codigo QR</h4>
                        </div>
                        <div class="modal-body">
                            <img src="../img/reciboticket.jpg" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // put your code here
            ?>
    </body>
</html>