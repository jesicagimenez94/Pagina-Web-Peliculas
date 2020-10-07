<!DOCTYPE html>
<html>
  <head>
    <title>info de la peli</title> 
  </head>
  <body>
    <div class="container">
      <div class="row">
             <div class="col-md-12" id="inicio">
                 <?php
                    require("menu.php");
                 ?>
             </div>
             <div class="col-md-12" align="center" style="color: white">
                    <?php
                      require("conexion.php");
               
                      $idPeli=$_GET['id_movie'];
                      $registro=mysqli_query($conexion,"select * from movies where id_movie=".$_GET['id_movie']) or die("Problemas en el select:".mysqli_error($conexion));
                      while ($r=mysqli_fetch_array($registro)) {
                    ?>
                    
                       <div>
                          <img src="<?php echo $r['imagen'];?>" style="width:350px;height: 350px">
                       </div>
                       <div>
                 	        <h4 style="padding: 3%">
                            <?php  echo $r['titulo']."<br>"; echo $r['puntaje']."   |   ".$r['anio'];?>
                          </h4>
                          <h4><?php echo $r['descripcion'];?></h4>
                       </div>   
                      
                    <?php
                       }
                    ?>
             </div>
      </div>
      </div>
      <div style="padding-top:100px;color: white;">
         <footer>
                  <div align="center">
                     <h3><strong>Peliculas Jesica</strong></h3>
                 </div>   
         </footer>
       </div>
  </body>
</html>
</body>
</html>