<?php
include 'conexion.php';


if(isset($_POST["txt"])){
    $fh = fopen('json/result.txt', 'w'); 

    $result = mysqli_query($conexion,"select * from movies"); 
    while ($row = mysqli_fetch_array($result)) {   
     $last = end($row);   
     $num = mysqli_num_fields($result) ;  
     for($i = 0; $i < $num; $i++) {    
      fwrite($fh, $row[$i]);      
      if ($row[$i] != $last) 
       fwrite($fh, " \ "); 
     }                 
     fwrite($fh, " \n"); 
} 
    fclose($fh); 
}
?>