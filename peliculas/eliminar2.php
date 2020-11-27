<?php
require("conexion.php");
 if (isset($_GET['id_movie'])) {
    $id=$_GET['id_movie'];
    $delete= mysqli_query($conexion,"delete from movies where id_movie='$id'");
    header("location:peliculas.php?eliminada=1");
}
?>