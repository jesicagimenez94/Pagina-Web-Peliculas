<?php 
      require ("conexion.php");
	?>
<!DOCTYPE html>
 <html>
   <head>
    <title>Alta Pelicula</title> 
   </head>
   <body>
   <?php require ("menu.php");?>

    <div class="container">
		<div class="row">
            <div align="center" class="col-md-12">
   
    <form method="POST" action="alta.php?alta=1" style="width:50%;color:white">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Titulo</label>
      <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="ingrese nombre de la pelicula">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">imagen</label>
      <input type="text" class="form-control" name="imagen" id="imagen" required placeholder="ingrese link de la imagen">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Puntaje</label>
      <input type="text" class="form-control" name="puntaje" id="puntaje" required placeholder="ingrese solo numeros">
    </div>
  <div class="form-group col-md-4">
      <label for="inputPassword4">Duracion</label>
      <input type="text" class="form-control" name="duracion" id="duracion" required placeholder="ingrese solo numeros">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">año</label>
      <input type="text" class="form-control" name="anio" id="anio" required placeholder="ingrese solo numeros enteros">
    </div>
  </div>
  <div class="form-group">
					
                    <label for="selectGenero">Género</label>
                    <select class="form-control" id="selectGenero" name="genero">
                       <option>Comedia</option>
                       <option>Terror</option>
                       <option>Animacion</option>
                    </select>
                
    </div>
  <div class="form-group">
   
    <label for="inputEmail4">Descripcion</label>
    <textarea type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="ingrese descripcion de la pelicula"></textarea>
    
  </div>
  <button type="submit" class="btn btn-dark" name="guardar" value="guardar">Cargar</button>
</form>
</div>
</div>
</div>
<?php if (isset($_GET['alta'])&& $_GET['alta']==1){
           require("conexion.php");
           $titulo=$_POST['titulo'];
           $genero=$_POST['genero'];
           $duracion=$_POST['duracion'];
           $puntaje=$_POST['puntaje'];
           $imagen=$_POST['imagen'];
           $descripcion=$_POST['descripcion'];
           $anio=$_POST['anio'];
           $Insert=mysqli_query($conexion,"INSERT INTO movies values (00,'$titulo',$anio,$puntaje,$duracion,'$genero','$descripcion','$imagen')");
           echo "<script>alert('pelicula agregada');</script>";
	
      }
 ?>
        
		
   </body>
</html>