
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

    foreach($array as $index => $value) {

        $img =$array[($index)];
        ?>
    <div class="jcarousellite">
        <div class="carousel pull-right">
            <ul>
                <li>
                    <img width='250px' height='180px' src='/prestashop123/admin39639dcpu/imagenes_secundarias/<?php echo utf8_encode($img)?>'>

                </li>
            </ul>
        </div>
    </div>

        <?php
    }

         echo $ver2['descripcion_corta']. "<br>";
         echo $ver2['ubicacion_exacta']. "<br>";
         echo $ver2['leyenda_detallada']. "<br>";

}
?>
