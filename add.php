<?php
$mysqli = new mysqli('localhost','root','', 'yamcajamarcadb');

$id_circuito = $_POST['id_circuito'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$salida = $_POST['salida'];
$adultos = $_POST['adultos'];
$ninios = $_POST['ninios'];
$infantes = $_POST['infantes'];
$total = $_POST['personas'];
$adicional = $_POST['consulta'];


$consulta = "select * from tr_circuito WHERE id_circuito = " . $id_circuito;

$query1 = $mysqli->query( $consulta )or die( $mysqli->error );


$consulta2 = "select * from tr_reservas_circuito WHERE id_circuito=" . $id_circuito ." AND  fecha = '" . $salida . "'";
//echo $consulta2;
$query2 = $mysqli->query( $consulta2 )or die( $mysqli->error );

$row2 =$query2->num_rows;



if( $row2 > 0 ){

    $consulta3 = "select sobrantes from tr_reservas_circuito WHERE id_circuito=" . $id_circuito ." AND  fecha = '" . $salida . "'";


    $query3 = $mysqli->query( $consulta3 )or die( $mysqli->error );

    $row =$query3->fetch_assoc();

    $sobrantes = $row['sobrantes'];

    if($sobrantes >= 0) {
        $restantes = $sobrantes - $total;
//    echo $restantes;
        if($restantes >= 0) {
            $sqlupd = "UPDATE tr_reservas_circuito SET sobrantes = '" . $restantes . "' where id_circuito = $id_circuito AND fecha = '" . $salida . "'";

            $query5 = $mysqli->query($sqlupd) or die($mysqli->error);
        }else{
            echo "No se pudo registrar la reserva" . $sobrantes;
        }
    }
    else{
        echo "Solo quedan " . $sobrantes . " reservas";
    }


}else{

    $consulta4 = "select capacidad from tr_circuito WHERE id_circuito = " . $id_circuito;

    $query4 = $mysqli->query( $consulta4 )or die( $mysqli->error );

    $row =$query4->fetch_assoc();

    $capacidad = $row['capacidad'];

    $restantes = $capacidad - $total;


    $sqladd = "insert into tr_reservas_circuito (id_circuito,fecha,capacidad,sobrantes) VALUES ('" .$id_circuito. "','". $salida ."','". $capacidad ."','". $restantes ."')";

    $queryadd = $mysqli->query( $sqladd )or die( $mysqli->error );

}


    $sql = "insert into tr_reservas (id_circuito,nombre,correo,celular,fecha_salida,adultos,ninios,infantes,total_personas,consulta_adicional,estado_reserva) VALUES ('" . $id_circuito . "','" . $nombre . "','" . $correo . "','" . $celular . "','" . $salida . "','" . $adultos . "','" . $ninios . "','" . $infantes . "','" . $total . "','" . $adicional . "','1')";

    $query = $mysqli->query($sql) or die($mysqli->error);

    if(!$query)
    {
        echo "Ha ocurrido un error";
    }
    else
    {
        echo "La reserva se registro ";
    }


