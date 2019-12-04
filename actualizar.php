<?php
    $con=mysqli_connect('localhost','root','','digitalizacion_titulacion') or die('Error en la conexion');
    
    $sql= "INSERT INTO 
    tb_usuario
     VALUES ('".$_POST["usuario"]."','".$_POST["contraseña"]."','".$_POST["nombres"]."',
     '".$_POST["apPaterno"]."','".$_POST["apMaterno"]."','".$_POST["telefono"]."','".$_POST["correo"]."','".$_POST["rol"]."')";
    
    $resultado=mysqli_query($con,$sql) or die ('Error al guardar los datos');
    mysqli_close($con);
    echo 'Gracias '.$_POST["nombres"].' tu registro a sido exitoso';

 ?>