<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="../widget/css/rcarousel.css" />
    <style type="text/css">
        #container {
            width: 500px;
            height: 500px;
            position: relative;
        }

        #carousel {
            position: absolute;
            top: 50px;
        }

        #carousel img {
            border: 0;
        }

        #ui-carousel-next, #ui-carousel-prev {
            width: 100px;
            height: 50px;
            background: url(images/arrow-bottom.png) #fff center center no-repeat;
            display: block;
            position: absolute;
            left: 0
            z-index: 100;
        }

        #ui-carousel-next {
            top: 0;
            background-image: url(images/arrow-top.png);
        }

        #ui-carousel-prev {
            bottom: 0;
        }

        #ui-carousel-next > span, #ui-carousel-prev > span {
            display: none;
        }
    </style>
</head>
<body>

<div id="header">
    <p>
        This is an example of <em>rcarousel</em> – a jQuery UI continuous carousel.
        Go back to the <a href="http://ryrych.github.com/rcarousel/">documentation</a>
    </p>
</div>

<div id="content">
    <h1>vertical carousel</h1>

    <div id="container">
        <div id="carousel">
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
            <img src="img/1.jpg" />
        </div>
        <a href="#" id="ui-carousel-next"><span>next</span></a>
        <a href="#" id="ui-carousel-prev"><span>prev</span></a>
    </div>
</div>

<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.core.js"></script>
<script type="text/javascript" src="js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="js/jquery.ui.rcarousel.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $("#carousel").rcarousel({
            orientation: "vertical",
            auto: {
                enabled: true,
                interval: 3000
            }
        });

        $( "#ui-carousel-next" )
            .add( "#ui-carousel-prev" )
            .hover(
                function() {
                    $( this ).css( "opacity", 0.7 );
                },
                function() {
                    $( this ).css( "opacity", 1.0 );
                }
            );
    });
</script>

</body>
</html>




