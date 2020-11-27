<?php
require("conexion.php");
 if (isset($_GET['id_movie'])) {
    $id=$_GET['id_movie'];
    $eliminar="SELECT funcion_eliminar_pelicula($id)";
    $delete= mysqli_query($conexion,$eliminar);
    if($del=mysqli_fetch_array($delete)){
    header("location:peliculas.php?eliminada=1");
    echo "peliculas eliminadas";
    }
    else{
        "pelicula no eliminada";
    }
}
?>