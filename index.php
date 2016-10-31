<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservas</title>
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.10.0.custom.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/validationEngine.jquery.css"/>

    <script type="text/javascript" src="js/jquery.jcarousellite.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <script src="js/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src="js/funciones.js"></script>

    <style>

    </style>

</head>
<body>

<?php

$mysqli = new mysqli('localhost','root','', 'yamcajamarcadb');


$sql = "SELECT DISTINCT tcl.id_cir as id_circuito,
                c.nombre as nombrecir,
                c.total as total,
                c.capacidad as capacidad,
                c.max_reservas as max_reservas,
                c.costo_adulto as adulto,
                c.costo_ninio as ninio,
                c.costo_infante as infante,
                tcl.id_lug as id_lugar_turistico,
                lt.nombre as nombre,
                ilt.id_imagen_lugares_turisticos as id_imagen_lugares_turisticos,
                ilt.imagen_principal as imagen_principal
FROM tr_tmp_circuito_lugar tcl
  INNER JOIN tr_imagen_lugares_turisticos ilt
    ON ilt.id_lugar_turistico = tcl.id_lug
  inner join tr_lugar_turistico lt
    on ilt.id_lugar_turistico = lt.id_lugar_turistico
  inner join tr_circuito c
    on c.id_circuito = tcl.id_cir
ORDER BY c.id_circuito ASC";

$query = $mysqli->query( $sql )or die( $mysqli->error );
$prev_cat = '';
?>

<div class="jcarousellite">
    <div class="jcarousel">
        <ul>

<?php

while( $dados = $query->fetch_object() ){

    if( $prev_cat!=$dados->id_circuito ) {
        $prev_cat = $dados->id_circuito;

        if( $prev_cat!='' ) {
            ?>
            <li class="li" id="lista">

            <div class="padre col-lg-10 col-lg-offset-1 col-xs-12"  style="padding: 20px;">
                <fieldset class="sombras col-lg-11 col-xs-11" style="">
                    <legend class="fondito"><?php echo utf8_encode($dados->nombrecir) ?></legend>
                    <a class="btn idcircuitoclick" data-toggle="modal" data-target="#myModal" ><strong>Reservar</strong></a>
                    <input type="hidden" class="idcircuito" value="<?php echo $dados->id_circuito ?>">
                    <input type="hidden" class="maxres" value="<?php echo $dados->max_reservas ?>">
                    <input type="hidden" class="sobrantes" value="<?php echo $dados->sobrantes ?>">
                    <label class="btn pull-right" style="border: 0; background-color: #1f497d; color: white"><strong> Costo Total S/. <?php echo $dados->total ?> </strong></label>
                    <input type="hidden" class="capacidad" value="<?php echo $dados->capacidad ?>">



                    <div class="container col-lg-12">
                                <div class="outer_div">
                                    <div class="row">
                                <?php

                                $sql2 = 'select DISTINCT c.id_circuito as id_circuito,
       lt.id_lugar_turistico as id_lugar_turistico,
       c.nombre as nombrecircuito,
       c.capacidad as capacidad,
       c.costo_adulto as adulto,
       c.costo_ninio as ninio,
       c.costo_infante as infante,
       c.total as total,
       c.max_reservas as max_reservas,
       lt.nombre as nombreturistico,
       ilt.imagen_principal as imagen_principal
from tr_circuito c INNER JOIN tr_tmp_circuito_lugar tlc
              ON c.id_circuito = tlc.id_cir INNER JOIN tr_lugar_turistico lt
              ON tlc.id_lug = lt.id_lugar_turistico INNER JOIN tr_imagen_lugares_turisticos ilt
              ON lt.id_lugar_turistico = ilt.id_lugar_turistico WHERE c.id_circuito = ' . $dados->id_circuito .' ORDER BY nombreturistico asc';

                                $query2 = $mysqli->query( $sql2 )or die( $mysqli->error );


                                while ($dados2 = $query2->fetch_object()) {
                                    ?>

                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                    <div class="d thumbnail col-xs-12">

                                        <img alt="" class="imagenes" src="/YamCajamarca/admin5755/<?php echo utf8_encode($dados2->imagen_principal) ?>">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="<?php echo $dados2->id_lugar_turistico ?>">
                                                <h4 style="text-align: center"><?php echo utf8_encode($dados2->nombreturistico) ?></h4>

                                            </div>
                                    </div>
                                </div>

                                <?php } ?>
                                    </div>
                                </div>
                            </div>

                    <div class="col-xs-12">
                    <h4 class="text-right"><strong >Precio Adulto S/. <?php echo $dados->adulto?><span>&nbsp;&nbsp;--&nbsp;&nbsp;</span>Precio Niño S/. <?php echo $dados->ninio ."\t" ?><span>&nbsp;&nbsp;--&nbsp;&nbsp;</span> Precio Infante S/. <?php echo $dados->infante ."\t" ?></strong></h4>
                    </div>

                </fieldset>
            </div>
            </li>

            <?php
            }

        }

    }
?>

        </ul>
    </div>
</div>

<!--modallllll-->
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
                <form class="modal-content" name="frm" method="POST" id="frm">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><strong>Reservas</strong></h4>
                        <input type = "hidden" style="border: 0px" class="btn-default reservas" id="res">
                        <input type = "hidden" class="capacidad2" id="capacidad2">
                        <label class="reservas btn btn-default" style="float: right; font-family: 'Cooper Black'; color: red"></label>
<!--                        <label class="sobra btn btn-default" style="font-family: 'sans-serif'; color: red"></label>-->

                    </div>
                <div class="modal-body">


                        <div class="col-xs-7">
                            <input type="hidden" class="idcircuito2" id="id_circuito" name="id_circuito">
                            <div class="form-group">
                                <label for="textinput">Nombre</label>
                                <input id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre completo" class="form-control input-md validate[required] text-input">
                            </div>

                            <div class="form-group">
                                <label for="textinput">Correo</label>
                                <input id="correo" name="correo" type="text" placeholder="Ingrese su correo electronico" class="form-control input-md" >

                            </div>

                            <div class="form-group">
                                <label for="textinput">Celular</label>
                                <input type="tel" id="celular" name="celular" placeholder="Ingrese su numero de celular" class="form-control input-md validate[required,custom[number],maxSize[11]]">

                            </div>

                            <div class="form-group">

                                <label for="tbSalida">Fecha de Salida</label>
                                <div class="form-group">
                                    <div class='input-group date' id="calendar">
                                        <input id="salida" name="salida" placeholder="Fecha de Salida" class="form-control input-md ui-datepicker validate[required,custom[date2]]" data-prompt-position="topLeft:200,5">
                                        <span class="input-group-addon" style="cursor: pointer;">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        <i class="icon-calendar"></i>
                                       </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="textinput">Nro. Adultos</label>
                                    <input id="adultos" name="adultos" type="number" placeholder="# Adultos" class="form-control input-md" min="1" max="100" onChange="sumar(); borracampoA(); validar();" onClick="borracampoA(); validar();" onBlur="restauracampoA()" value="0">

                                </div>
                            </div>

                            <div class="col-xs-4">

                                <div class="form-group">
                                    <label for="textinput">Nro. Niños</label>
                                    <input id="ninios" name="ninios" type="number" placeholder="# Niños" class="form-control input-md" min="0" max="100" onChange="sumar();borracampoN() ; validar();" onClick="borracampoN(); validar();" onBlur="restauracampoN()" value="0">

                                </div>

                            </div>
                            <div class="col-xs-4">

                                <div class="form-group">
                                    <label for="textinput">Nro. Infantes</label>
                                    <input id="infantes" name="infantes" type="number" placeholder="# Infantes" class="form-control input-md" min="0" max="100" onChange="sumar();borracampoI() ; validar();" onClick="borracampoI(); validar();" onBlur="restauracampoI()" value="0">

                                </div>
                            </div>

                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="textinput"># de Personas</label>
                                <input id="personas" name="personas" class="form-control input-md" readonly="readonly">

                            </div>
                            <div class="form-group">
                                <label for="consulta" class="text-right">Consulta Extra</label>
                                <textarea name="consulta" id="consulta" cols="30" rows="10"></textarea>

                                <div id="mensaje"></div>

                            </div>
                        </div>



                        <p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" id="btnProcesar" name="btnProcesar" class="btn btn-primary" value="Reservar">


                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>


        </div>
    </div>

</div>

<!--modal 2 para imagenes-->

<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="paramostrar" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="formulario">
                    <input type="hidden" class="id_lugar_turistico2" id="id_lugar_turistico2" name="id_lugar">

                    </form>


                    <div id="respuesta">

                    </div>

                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>
    </div>

</div>
</body>

<link href="css/toastr.min.css" rel="stylesheet" />
<script src="js/toastr.min.js"></script>

</html>

