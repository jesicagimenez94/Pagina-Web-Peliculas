
<!DOCTYPE html>

<html>

<head>
   <title>Productos</title>
</head>

<body>
   <?php
 
   require("menu.php");
   require("conexion.php");
   require("json.php");
   require ("txt.php");
   require ("pdf.php");
   ?>
   <br>
   <div class="container">
      <div class="row">
         <?php
         $sql = mysqli_query($conexion, "SELECT * FROM movies");
         $pelisporpag = 12;
         $totalpaginas = mysqli_num_rows($sql);
         $pag = $totalpaginas / $pelisporpag;
         $pag = ceil($pag);
         if (isset($_SESSION['login'])) {
            $idUser = $_SESSION['login'];
            $permiso = $_SESSION['mail'];
            if ($permiso == "admin@gmail.com") {
         ?>
               <div id="np" class="col-md-12" style="padding-top: 30px">
                  <ul class="nav justify-content-center">
                     <li class="nav-item">
                        <a id="nuevoProducto" class="btn btn-primary" href="alta.php"><i class="far fa-arrow-alt-circle-up"></i> cargar pelicula</a>
                     </li>
                  </ul>
               </div>
            <?php
            }
         }
         if (isset($_GET['peliculas'])) {
                     $sql = mysqli_query($conexion, "SELECT * FROM movies");
         $pelisporpag = 12;
         $totalpaginas = mysqli_num_rows($sql);
         $pag = $totalpaginas / $pelisporpag;
         $pag = ceil($pag);
            $paginacion = ($_GET['peliculas'] - 1) * $pelisporpag;
            $sqlpag = mysqli_query($conexion, "SELECT * FROM movies limit $paginacion,$pelisporpag");

            while ($r = mysqli_fetch_array($sqlpag)) {
            ?>
               <div align="center" class="col-md-4" style="padding:1%;">
                  <div class="contenedor">
                     <a href="infopelis.php?id_movie=<?php echo $r['id_movie']; ?>"><img src="<?php echo $r['imagen']; ?>" style="width:250px;height:300px"></a>

                     <br>
                     <?php
                     if (isset($_SESSION['login'])) {
                        if ($permiso == "admin@gmail.com") { ?>
                           <div style="background:#212121;width:250px;">
                           <form method="GET" action="modificar.php">
                                 <button style="float: left;border-radius:30px" type="submit" name="id_movie" value="<?php echo $r['id_movie']; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                                 <a style="border-radius:30px" class="btn btn-primary" href="eliminar.php?id_movie=<?php echo $r['id_movie'];?>"><i class="fas fa-trash-alt"></i></a>
                           </form>
                           </div>
                     <?php
                        }
                     }
                     ?>
                  </div>
               </div>
            <?php } ?>
            <div class="container" style="padding-top:40pz">
               <nav arial-label="page navigation">
                  <ul class="pagination justify-content-center">
                     <li class="page-item <?php echo $_GET['peliculas'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="peliculas.php?peliculas=<?php echo $_GET['peliculas'] - 1 ?>">Anterior</a></li>
                     <?php for ($i = 1; $i <= $pag; $i++) : ?>
                        <li class="page-item <?php echo $_GET['peliculas'] == $i ? 'active' : '' ?>"><a class="page-link" href="peliculas.php?peliculas=<?php echo $i ?>"><?php echo $i ?></a></li>
                     <?php endfor ?>
                     <li class="page-item <?php echo $_GET['peliculas'] >= $pag ? 'disabled' : '' ?>"><a class="page-link" href="peliculas.php?peliculas=<?php echo $_GET['peliculas'] + 1 ?>">Siguiente</a></li>
                  </ul>
               </nav>
            </div>
            <?php
         } else {
            $consulta = mysqli_query($conexion, "SELECT * FROM movies limit $pelisporpag");
            while ($r = mysqli_fetch_array($consulta)) {
            ?>

               <div align="center" class="col-md-4" style="padding:1%;">
                  <div class="contenedor">
                     <a href=#><img src="<?php echo $r['imagen']; ?>" style="width:250px;height:300px"></a>
                     <br>
                     <?php
                     if (isset($_SESSION['login'])) {
                        if ($permiso == "admin@gmail.com") { ?>
                           <div style="background:#212121;width:250px;">
                              <form method="GET" action="modificar.php">
                                 <button style="float: left;border-radius:30px" type="submit" name="id_movie" value="<?php echo $r['id_movie']; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                                 <a style="border-radius:30px" class="btn btn-primary" href="eliminar.php?id_movie=<?php echo $r['id_movie']; ?>"><i class="fas fa-trash-alt"></i></a>
                              </form>


                           </div>
                     <?php
                        }
                     }
                     ?>
                  </div>
               </div>
            <?php } ?>
            <div class="container" style="padding-top:40pz">
               <nav arial-label="page navigation">
                  <ul class="pagination justify-content-center">
                     <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                     <li class="page-item active"><a class="page-link" href="peliculas.php?peliculas=1">1</a></li>
                     <?php for ($i = 2; $i <= $pag; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="peliculas.php?peliculas=1"<?php echo $i ?>"><?php echo $i ?></a></li>
                     <?php endfor ?>
                     <li class="page-item"><a class="page-link" href="peliculas.php?peliculas=2">Siguiente</a></li>
                <form method="post">
                <input id="json" style="color:black" class="btn btn-danger" type="submit" name="json" value="json">
                <input id="json" style="color:black" class="btn btn-danger" type="submit" name="txt" value="txt">
                <input id="json" style="color:black" class="btn btn-danger" type="submit" name="pdf" value="pdf">
                
            </form>

                  </ul>
               </nav>
            </div>

      </div>
   </div>
<?php
         }
         if (isset($_GET['eliminada']) && $_GET['eliminada'] == 1) {
            echo "<script>alert('pelicula eliminada');</script>";
         }
?>
<script>
   function stock() {
      alert("el producto se encuentra sin stock");
   }
</script>
</body>

</html>