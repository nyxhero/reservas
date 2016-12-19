<?php
$mysqli = new mysqli('localhost','root','', 'yamcajamarcadb');

    $key=$_GET['key'];
    $array = array();

    $query=mysqli_query("select * from tr_reservas where nombre LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
        $array[] = $row['title'];
    }
    echo json_encode($array);

