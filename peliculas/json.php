<?php
include 'conexion.php';

if(isset($_POST["descarga"])){
$response=array();
$u=mysqli_query($conexion,"select * from movies");
$response['movies']=array();
foreach ($u as $key){
    $datos=array();
    foreach ($key as $k => $v)
        $datos[$k]=$v;
    array_push($response['movies'],$datos);
    $fp= fopen('result.json','w');
    fwrite($fp, json_encode($response));
    fclose($fp);
   /* $salida=$response.".txt";
    header('Content-type: txt ');
    header('Content-disposition: attachment; filname=',$salida);*/
    
}}
//var_dump($response);
//http://localhost/parcial/Pagina-Web-Peliculas/peliculas/json.php
//die (json_encode($response));
?>
    

