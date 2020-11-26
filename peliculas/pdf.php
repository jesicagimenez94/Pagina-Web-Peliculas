<?php
include 'conexion.php';

if(isset($_POST["pdf"])){
$response='hola mundo';

    $fp= fopen('json/result.PDF','w');
    fwrite($fp, $response);
    
    
    fclose($fp);

    
}
//var_dump($response);
//http://localhost/parcial/Pagina-Web-Peliculas/peliculas/json.php
//die (json_encode($response));
?>
    

