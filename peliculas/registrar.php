<!DOCTYPE html>
<html>
    <head>
        <title>Registrate</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <style>
            .logoUser form label{
                 float:left;
            }
        </style>
    </head>
    <body style="background-color: #121212;">
        <div class="container">
            <div class="row">
               <div class="col-md-12" align="center" style="padding-top:10px;">
               <a style="color:white" class="navbar-brand" href="index.php"><img src="assets/img/logoo.jpg" style="width: 150px;height:60px;border-radius: 10px"><i style="margin-left:20px">Peliculas Jesica</i></a>
              </div>
                <div class="col-md-12" align="center" style="padding-top:60px">
                        <div class="col-md-8 logoUser" style="background:#e8ead3">
                             <form  method="POST" action="registrar.php?pagina=1" onsubmit="return valida2(this)">
                                <h4>Registrate</h4><br>
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <!-- nombre entre 3 y 50 caracteres-->
                                         <label>Nombre</label>
                                         <input type="text" class="form-control" name="nombre" id="nombre" pattern="[a-zA-Z]{2,50}" title="Ingrese su nombre. entre 3 y 50 caracteres" placeholder="ingrese su nombre">
                                       
                                      </div>
                                      
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <!-- validacion formato mail-->
                                         <label>E-mail</label>
                                         <input type="text" class="form-control" name="mail" id="mail" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Ingrese un formato de mail valido" placeholder="ingrese su e-mail" onkeyup="validarMail()">
                                         
                                      </div>
                                      <div class="form-group">
                                          <!-- Contraseña entre 8 y 12 caracteress-->
                                         <label>Contraseña</label>
                                         <input type="password" class="form-control" name="contr" id="contr" pattern="[A-Za-z0-9!?-]{8,12}" title="Ingrese una contraseña de min. 8 y max. 12 caracteres" placeholder="ingrese su contraseña entre 8 y 12 caracteres">
                                         
                                      </div>
                                    </div>
                                    <a style="float:left;margin-left:15px;text-decoration: #121212;" href="login.php">Ya tengo una cuenta</a>
                                    <br><br>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <button name="registrado" value="registrado" id="btn2" class="btn btn-dark" onclick="valida2()">registrate</button>
                                       </div>
                                    </div>
                                </div>
                             </form>
                        </div>
                </div>
            </div>
        </div>
        <?php
          if (isset($_GET['pagina'])&& $_GET['pagina']==1) {
            $nombre=$_REQUEST['nombre'];
            $user=$_REQUEST['mail'];
            $pass=$_REQUEST['contr'];
            require("conexion.php");
              if (!empty($nombre) && !empty($user) && !empty($pass)) {
              $sql=mysqli_query($conexion,"select * from users where email='$user'");
                if(mysqli_num_rows($sql)>0){ 
                      echo "<script>alert('email invalido');</script>";          
                }else{
                    mysqli_query($conexion,"insert into users(nombre,email,contrasenia)values 
                      ('$nombre','$user','$pass')");
                      echo "<script>alert('fue registrado con exito!');</script>";
               }
               }
            } 
        ?>
        <div style="padding-top:100px;color: white;">
         <footer>
                  <div align="center">
                     <h3><strong>Peliculas Jesica</strong></h3>
                 </div>   
         </footer>
        
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/2be8605e79.js"></script>
        <script>
            function valida2(v){
                ok=true;
                msg="falta llenar campos: \n";
                if (v.elements["nombre"].value=="") {
                   msg+="Nombre\n";
                   ok=false;
                }
                if (v.elements["apellido"].value=="") {
                   msg+="Apellido\n";
                   ok=false;
                }
                if (v.elements["mail"].value=="") {
                   msg+="Mail\n";
                   ok=false;
                }
                if (v.elements["contr"].value=="") {
                   msg+="Contraseña\n";
                   ok=false;
                }
                if (ok==false) {
                      alert(msg);
                      return ok;
                }
            }
           </script>
    </body>
</html>