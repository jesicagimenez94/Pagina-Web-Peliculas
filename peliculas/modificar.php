<!-- Autor: Jesica Gimenez
     Curso: 3° 1°
     Año: 2020
     Parcial Nro 1 EDI 3
-->

<?php 
      require ("conexion.php");
      
   if (isset($_GET['id_movie'])) {
      $idpelicula=$_GET['id_movie'];
      
      $consulta="SELECT * FROM movies where id_movie=$idpelicula;";
      $resultado=mysqli_query($conexion,$consulta);
      while ($rs=mysqli_fetch_array($resultado)) {
         $id=$rs['id_movie'];
         $titulo=$rs['titulo'];
         $anio=$rs['anio'];
         $puntaje=$rs['puntaje'];
         $duracion=$rs['duracion'];
         $genero=$rs['genero'];
         $descripcion=$rs['descripcion'];
         $imagen=$rs['imagen'];

      }
    }
	?>
<!DOCTYPE html>
 <html>
   <head>
    <title>Modificar Pelicula</title> 
   </head>
   <body>
   <?php require ("menu.php");?>

    <div class="container">
		<div class="row">
            <div align="center" class="col-md-12">
   
    <form method="POST" action="mod.php" style="width:50%;color:white">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Titulo</label>
      <input type="text" class="form-control" name="id_movie" id="id_movie" value="<?php echo $id;?>" hidden>
      <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $titulo;?>" required placeholder="ingrese nombre de la pelicula">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">imagen</label>
      <input type="text" class="form-control" name="imagen" id="imagen" value="<?php echo $imagen;?>" required placeholder="ingrese link de la imagen">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Puntaje</label>
      <input type="text" class="form-control" name="puntaje" id="puntaje" value="<?php echo $puntaje;?>" required placeholder="ingrese solo numeros">
    </div>
  <div class="form-group col-md-4">
      <label for="inputPassword4">Duracion</label>
      <input type="text" class="form-control" name="duracion" id="duracion" value="<?php echo $duracion;?>" required placeholder="ingrese solo numeros">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">año</label>
      <input type="text" class="form-control" name="anio" id="anio" value="<?php echo $anio;?>"required placeholder="ingrese solo numeros enteros">
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="selectGenero">Género</label>
    <select class="form-control" id="selectGenero" name="genero">
                       <option value="fantasia" <?php if($genero=='Animacion') echo 'Selected'?>>comedia</option>
                       <option value="terror" <?php if($genero=='terror') echo 'Selected'?>>terror</option>
                       <option value="accion" <?php if($genero=='accion') echo 'Selected'?>>accion</option>
                    </select>
                
    </div>
  <div class="form-group">
   
    <label for="inputEmail4">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $descripcion;?>" required>
    
  </div>
  <button type="submit" class="btn btn-dark">Modificar</button>
</form>
</div>
</div>
</div>
       
       
<?php 

  if(isset($_GET['mod']) && $_GET['mod']==1){
        echo "<script>alert('pelicula modificada');</script>";
      }
    
?>

        
		
   </body>
</html>
<!-- Autor: Jesica Gimenez
     Curso: 3° 1°
     Año: 2020
     Parcial Nro 1 EDI 3
-->