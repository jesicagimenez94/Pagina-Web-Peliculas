<?php
require("conexion.php");
 if (isset($_GET['id_movie'])) {
    $id=$_GET['id_movie'];
    $delete= mysqli_query($conexion,"select funcion_eliminar_pelicula('$id')");
    header("location:peliculas.php?eliminada=1");
}
?>