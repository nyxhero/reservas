
<?php
$mysqli = new mysqli('localhost','root','', 'prestashop');
$resultado = "";
/* Filtrar los datos */
$nombre = $_POST["id_lugar"];

/* Crear un Array. Simulando una consulta a una base de datos */
$array = 'SELECT * FROM ps_imagen_lugares_turisticos  ilt inner join ps_lugar_turistico lt on lt.id_lugar_turistico = ilt.id_lugar_turistico WHERE ilt.id_lugar_turistico = ' . $nombre;
$query = $mysqli->query( $array )or die( $mysqli->error );

while($ver2=$query->fetch_array()){
    ?>

    <h3><?php echo $ver2['nombre']?></h3>

    <?php
    $array = explode(';',$ver2['imagenes_secundarias']);
    $array2 = array_pop($array); //eliminar
    ?>
    <script src="js/jquery.jcarousel.js"></script>
    <script>
        $(function() {
            $('.jcarousel').jcarousel({
                visible: 3,
                wrap: 'circular',


            }).jcarouselAutoscroll({
                interval: 1000,
                target: '+=1',
                autostart: true
            });
        });
    </script>
    <style>
        .jcarousel {
            position: relative;
            overflow: hidden;
            width: 750px;
        }

        /*
        This is the container of the carousel items.
        You must ensure that the position is relative or absolute and
        that the width is big enough to contain all items.
        */
        .jcarousel ul {
            width: 20000em;
            position: relative;

            /* Optional, required in this case since it's a <ul> element */
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /*
        These are the item elements. jCarousel works best, if the items
        have a fixed width and height (but it's not required).
        */
        .jcarousel li {
            /* Required only for block elements like <li>'s */
            float: left;

        }
    </style>

            <div class="jcarousel">
                <ul>

    <?php
    foreach($array as $index => $value) {

        $img =$array[($index)];
        ?>
<li>
           <img width='250px' height='180px' style="margin: 3px" src='/prestashop123/admin39639dcpu/imagenes_secundarias/<?php echo utf8_encode($img)?>'>

</li>

        <?php
    }
    ?>
                    </ul>
                </div>

<?php
         echo $ver2['descripcion_corta']. "<br>";
         echo $ver2['ubicacion_exacta']. "<br>";
         echo $ver2['leyenda_detallada']. "<br>";

}
?>
