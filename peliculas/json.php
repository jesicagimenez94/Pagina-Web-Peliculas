<?php
include 'conexion.php';



/*
$response=array();
$posts=array();
$result= mysqli_query($conexion,"select * from movies");
if(isset($_POST["descarga"])){
while ($row= mysqli_fetch_array($result)){
    $titulo=$row['titulo'];
    $anio=$row['anio'];
    $puntaje=$row['puntaje'];
    $duracion=$row['duracion'];
    $genero=$row['genero'];
    $descripcion=$row['descripcion'];
    $imagen=$row['imagen'];
    
    $posts[]=array('titulo'=>$titulo,'anio'=>$anio,'puntaje'=>$puntaje,'duracion'=>$duracion,'genero'=>$genero,'descripcion'=>$descripcion,'imagen'=>$imagen);
}
$response['posts']='posts';
$fp= fopen('results.json','w');
fwrite($fp, json_encode($response));
fclose($fp);
}*/

if(isset($_POST["generar json"])){
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
  
    
    
}}
//var_dump($response);
//http://localhost/parcial/Pagina-Web-Peliculas/peliculas/json.php
//die (json_encode($response));
?>
    

