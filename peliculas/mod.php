<?php 
require("conexion.php");
$idmovie=$_POST['id_movie'];
$titulo=$_POST['titulo'];
$genero=$_POST['genero'];
$duracion=$_POST['duracion'];
$puntaje=$_POST['puntaje'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$anio=$_POST['anio'];
$modificar=mysqli_query($conexion,"UPDATE movies SET titulo='$titulo',anio=$anio,puntaje=$puntaje,duracion=$duracion,genero='$genero',descripcion='$descripcion',imagen='$imagen' WHERE id_movie='$idmovie'")or die("error al actualizar");
header("location:modificar.php?id_movie=$idmovie&mod=1");
?>