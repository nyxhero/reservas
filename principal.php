<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Carousel</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="js/jquery.jcarousel.js"></script>
    <script>
        (function($) {
            $(function() {
                $('.jcarousel')
                    .jcarousel({
                        vertical: true,
                        wrap: 'circular',
                    }).jcarouselAutoscroll({
                        interval: 2000,
                        target: '+=1',
                        autostart: true

                    }).on('mouseover',function(e){
                    $(this).jcarouselAutoscroll('stop');
                }).on('mouseout',function(e){
                    $(this).jcarouselAutoscroll('start');
                });;

//                $('.jcarousel-control-prev')
//                    .on('jcarouselcontrol:active', function() {
//                        $(this).removeClass('inactive');
//                    })
//                    .on('jcarouselcontrol:inactive', function() {
//                        $(this).addClass('inactive');
//                    })
//                    .jcarouselControl({
//                        target: '-=1'
//                    });
//
//                $('.jcarousel-control-next')
//                    .on('jcarouselcontrol:active', function() {
//                        $(this).removeClass('inactive');
//                    })
//                    .on('jcarouselcontrol:inactive', function() {
//                        $(this).addClass('inactive');
//                    })
//                    .jcarouselControl({
//                        target: '+=1'
//                    });
//
//                $('.jcarousel-pagination')
//                    .on('jcarouselpagination:active', 'a', function() {
//                        $(this).addClass('active');
//                    })
//                    .on('jcarouselpagination:inactive', 'a', function() {
//                        $(this).removeClass('active');
//                    })
//                    .jcarouselPagination();
            });
        })(jQuery);

    </script>
    <style>



        .jcarousel-wrapper .photo-credits {
            position: absolute;
            right: 15px;
            bottom: 0;
            font-size: 13px;
            color: #fff;
            text-shadow: 0 0 1px rgba(0, 0, 0, 0.85);
            opacity: .66;
        }

        .jcarousel-wrapper .photo-credits a {
            color: #fff;
        }

        /** Carousel **/

        .jcarousel {
            position: relative;
            overflow: hidden;
            width: auto;
            height: 1000px;
        }

        .jcarousel img {
            display: block;
        }

        .jcarousel ul {
            width: auto;
            height: auto;
            position: relative;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .jcarousel li {
            float: left;
        }

        /** Carousel Controls **/

        .jcarousel-control-prev,
        .jcarousel-control-next {
            position: absolute;
            top: 200px;
            width: 30px;
            height: 30px;
            text-align: center;
            background: #4E443C;
            color: #fff;
            text-decoration: none;
            text-shadow: 0 0 1px #000;
            font: 24px/27px Arial, sans-serif;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
            -webkit-box-shadow: 0 0 2px #999;
            -moz-box-shadow: 0 0 2px #999;
            box-shadow: 0 0 2px #999;
        }

        .jcarousel-control-prev {
            left: -50px;
        }

        .jcarousel-control-next {
            right: -50px;
        }

        .jcarousel-control-prev:hover span,
        .jcarousel-control-next:hover span {
            display: block;
        }

        .jcarousel-control-prev.inactive,
        .jcarousel-control-next.inactive {
            opacity: .5;
            cursor: default;
        }

        /** Carousel Pagination **/

        .jcarousel-pagination {
            position: absolute;
            bottom: 0;
            left: 15px;
        }

        .jcarousel-pagination a {
            text-decoration: none;
            display: inline-block;

            font-size: 11px;
            line-height: 14px;
            min-width: 14px;

            background: #fff;
            color: #4E443C;
            border-radius: 14px;
            padding: 3px;
            text-align: center;

            margin-right: 2px;

            opacity: .75;
        }

        .jcarousel-pagination a.active {
            background: #4E443C;
            color: #fff;
            opacity: 1;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.75);
        }

    </style>

</head>
<body>
<div class="wrapper">

    <div class="jcarousel" data-jcarousel="true" data-jcarouselautoscroll="true">
        <ul style="left: 0px; top: -1948px;">

            <li class="li" id="lista">

                <div class="padre col-lg-10 col-lg-offset-1 col-xs-12" style="padding: 20px;">
                    <fieldset class="robtherslider col-lg-11 col-xs-11" style="border:3px solid #1f497d">
                        <legend>Nombre circuito</legend>
                        <a class="btn idcircuitoclick" style="background-color: #e26b0a; color: white" data-toggle="modal" data-target="#myModal">Reservar</a>
                        <input type="hidden" class="idcircuito" value="14">
                        <input type="hidden" class="maxres" value="4">
                        <input type="hidden" class="sobrantes" value="<br />
<b>Notice</b>:  Undefined property: stdClass::$sobrantes in <b>C:\xampp\htdocs\principalReservas\index.php</b> on line <b>83</b><br />
">
                        <label class="btn pull-right" style="border: 0; background-color: #1f497d; color: white"><strong> Costo Total S/. 176 </strong></label>

                        <!--                    <div class="jcarousellite">-->
                        <!--                        <div class="carousel">-->

                        <div class="container col-lg-12">
                            <div class="outer_div">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/11Tarjetas-de-feliz-día-mamá.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="12">
                                                <h4 style="text-align: center">Cajabamba</h4>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <div class="col-xs-12">
                            <h4 class="text-right"><strong>Precio Adulto S/. 88<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span>Precio Niño S/. 88	<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span> Precio Infante S/. 0	</strong></h4>
                        </div>

                    </fieldset>
                </div>
            </li><li class="li" id="lista">

                <div class="padre col-lg-10 col-lg-offset-1 col-xs-12" style="padding: 20px;">
                    <fieldset class="robtherslider col-lg-11 col-xs-11" style="border:3px solid #1f497d">
                        <legend>Circuito Otuzco de Día</legend>
                        <a class="btn idcircuitoclick" style="background-color: #e26b0a; color: white" data-toggle="modal" data-target="#myModal">Reservar</a>
                        <input type="hidden" class="idcircuito" value="15">
                        <input type="hidden" class="maxres" value="8">
                        <input type="hidden" class="sobrantes" value="<br />
<b>Notice</b>:  Undefined property: stdClass::$sobrantes in <b>C:\xampp\htdocs\principalReservas\index.php</b> on line <b>83</b><br />
">
                        <label class="btn pull-right" style="border: 0; background-color: #1f497d; color: white"><strong> Costo Total S/. 111 </strong></label>

                        <!--                    <div class="jcarousellite">-->
                        <!--                        <div class="carousel">-->

                        <div class="container col-lg-12">
                            <div class="outer_div">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Desert.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="2">
                                                <h4 style="text-align: center">Frailones</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Jellyfish.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="4">
                                                <h4 style="text-align: center">Frailones 3</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1plaza.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="13">
                                                <h4 style="text-align: center">Otuzco</h4>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <div class="col-xs-12">
                            <h4 class="text-right"><strong>Precio Adulto S/. 78<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span>Precio Niño S/. 33	<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span> Precio Infante S/. 0	</strong></h4>
                        </div>

                    </fieldset>
                </div>
            </li><li class="li" id="lista">

                <div class="padre col-lg-10 col-lg-offset-1 col-xs-12" style="padding: 20px;">
                    <fieldset class="robtherslider col-lg-11 col-xs-11" style="border:3px solid #1f497d">
                        <legend>Circuito 1</legend>
                        <a class="btn idcircuitoclick" style="background-color: #e26b0a; color: white" data-toggle="modal" data-target="#myModal">Reservar</a>
                        <input type="hidden" class="idcircuito" value="10">
                        <input type="hidden" class="maxres" value="6">
                        <input type="hidden" class="sobrantes" value="<br />
<b>Notice</b>:  Undefined property: stdClass::$sobrantes in <b>C:\xampp\htdocs\principalReservas\index.php</b> on line <b>83</b><br />
">
                        <label class="btn pull-right" style="border: 0; background-color: #1f497d; color: white"><strong> Costo Total S/. 80 </strong></label>

                        <!--                    <div class="jcarousellite">-->
                        <!--                        <div class="carousel">-->

                        <div class="container col-lg-12">
                            <div class="outer_div">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Chrysanthemum.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="1">
                                                <h4 style="text-align: center">Cumbe Mayo</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Desert.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="2">
                                                <h4 style="text-align: center">Frailones</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Hydrangeas.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="3">
                                                <h4 style="text-align: center">Frailones 2</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Jellyfish.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="4">
                                                <h4 style="text-align: center">Frailones 3</h4>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <div class="col-xs-12">
                            <h4 class="text-right"><strong>Precio Adulto S/. 50<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span>Precio Niño S/. 20	<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span> Precio Infante S/. 10	</strong></h4>
                        </div>

                    </fieldset>
                </div>
            </li><li class="li" id="lista">

                <div class="padre col-lg-10 col-lg-offset-1 col-xs-12" style="padding: 20px;">
                    <fieldset class="robtherslider col-lg-11 col-xs-11" style="border:3px solid #1f497d">
                        <legend>sdajd</legend>
                        <a class="btn idcircuitoclick" style="background-color: #e26b0a; color: white" data-toggle="modal" data-target="#myModal">Reservar</a>
                        <input type="hidden" class="idcircuito" value="11">
                        <input type="hidden" class="maxres" value="6">
                        <input type="hidden" class="sobrantes" value="<br />
<b>Notice</b>:  Undefined property: stdClass::$sobrantes in <b>C:\xampp\htdocs\principalReservas\index.php</b> on line <b>83</b><br />
">
                        <label class="btn pull-right" style="border: 0; background-color: #1f497d; color: white"><strong> Costo Total S/. 55 </strong></label>

                        <!--                    <div class="jcarousellite">-->
                        <!--                        <div class="carousel">-->

                        <div class="container col-lg-12">
                            <div class="outer_div">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Hydrangeas.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="3">
                                                <h4 style="text-align: center">Frailones 2</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Jellyfish.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="4">
                                                <h4 style="text-align: center">Frailones 3</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Lighthouse.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="8">
                                                <h4 style="text-align: center">Frailones 4444444</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Koala.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="6">
                                                <h4 style="text-align: center">Un texto es una com</h4>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <div class="col-xs-12">
                            <h4 class="text-right"><strong>Precio Adulto S/. 30<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span>Precio Niño S/. 20	<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span> Precio Infante S/. 5	</strong></h4>
                        </div>

                    </fieldset>
                </div>
            </li><li class="li" id="lista">

                <div class="padre col-lg-10 col-lg-offset-1 col-xs-12" style="padding: 20px;">
                    <fieldset class="robtherslider col-lg-11 col-xs-11" style="border:3px solid #1f497d">
                        <legend>Circuito 3</legend>
                        <a class="btn idcircuitoclick" style="background-color: #e26b0a; color: white" data-toggle="modal" data-target="#myModal">Reservar</a>
                        <input type="hidden" class="idcircuito" value="12">
                        <input type="hidden" class="maxres" value="8">
                        <input type="hidden" class="sobrantes" value="<br />
<b>Notice</b>:  Undefined property: stdClass::$sobrantes in <b>C:\xampp\htdocs\principalReservas\index.php</b> on line <b>83</b><br />
">
                        <label class="btn pull-right" style="border: 0; background-color: #1f497d; color: white"><strong> Costo Total S/. 40 </strong></label>

                        <!--                    <div class="jcarousellite">-->
                        <!--                        <div class="carousel">-->

                        <div class="container col-lg-12">
                            <div class="outer_div">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Chrysanthemum.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="1">
                                                <h4 style="text-align: center">Cumbe Mayo</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Hydrangeas.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="3">
                                                <h4 style="text-align: center">Frailones 2</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Jellyfish.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="4">
                                                <h4 style="text-align: center">Frailones 3</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Lighthouse.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="8">
                                                <h4 style="text-align: center">Frailones 4444444</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Koala.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="6">
                                                <h4 style="text-align: center">Un texto es una com</h4>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <div class="col-xs-12">
                            <h4 class="text-right"><strong>Precio Adulto S/. 20<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span>Precio Niño S/. 10	<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span> Precio Infante S/. 10	</strong></h4>
                        </div>

                    </fieldset>
                </div>
            </li><li class="li" id="lista">

                <div class="padre col-lg-10 col-lg-offset-1 col-xs-12" style="padding: 20px;">
                    <fieldset class="robtherslider col-lg-11 col-xs-11" style="border:3px solid #1f497d">
                        <legend>Circuito Rx</legend>
                        <a class="btn idcircuitoclick" style="background-color: #e26b0a; color: white" data-toggle="modal" data-target="#myModal">Reservar</a>
                        <input type="hidden" class="idcircuito" value="13">
                        <input type="hidden" class="maxres" value="3">
                        <input type="hidden" class="sobrantes" value="<br />
<b>Notice</b>:  Undefined property: stdClass::$sobrantes in <b>C:\xampp\htdocs\principalReservas\index.php</b> on line <b>83</b><br />
">
                        <label class="btn pull-right" style="border: 0; background-color: #1f497d; color: white"><strong> Costo Total S/. 60 </strong></label>

                        <!--                    <div class="jcarousellite">-->
                        <!--                        <div class="carousel">-->

                        <div class="container col-lg-12">
                            <div class="outer_div">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Desert.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="2">
                                                <h4 style="text-align: center">Frailones</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/1Hydrangeas.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="3">
                                                <h4 style="text-align: center">Frailones 2</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/110606338_10152703543539715_3324635302110838134_n.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="11">
                                                <h4 style="text-align: center">Lugar Turístico Naylamb</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-xs-12" style="margin-top: 20px; height: 300px;width: 300px">
                                        <div class="thumbnail col-xs-12">

                                            <img alt="" class="imagenes" src="/YamCajamarca/admin5755/mis_imagenes/11511905_1385968955043376_8907928285237842816_n.jpg" data-toggle="modal" data-target="#paramostrar" style="cursor:pointer; height: 220px">
                                            <div class="caption col-xs-12">
                                                <input type="hidden" id="id_lugar_turistico" class="id_lugar_turistico" name="id_lugar_turistico" value="10">
                                                <h4 style="text-align: center">Luna huana</h4>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <div class="col-xs-12">
                            <h4 class="text-right"><strong>Precio Adulto S/. 50<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span>Precio Niño S/. 10	<span>&nbsp;&nbsp;--&nbsp;&nbsp;</span> Precio Infante S/. 0	</strong></h4>
                        </div>

                    </fieldset>
                </div>
            </li></ul>
    </div>

    </div>

</body>
</html>
