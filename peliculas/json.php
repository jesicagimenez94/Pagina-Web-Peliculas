<?php
include 'conexion.php';
$response=array();
$u=mysqli_query($conexion,"select * from movies");
$response['movies']=array();
foreach ($u as $key){
    $datos=array();
    foreach ($key as $k => $v)
        $datos[$k]=$v;
    array_push($response['movies'],$datos);
    $la=1;
}
//var_dump($response);
//http://localhost/parcial/Pagina-Web-Peliculas/peliculas/json.php
die (json_encode($response));
?>

