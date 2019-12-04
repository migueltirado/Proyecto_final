<?php
    $con=mysqli_connect('localhost','root','','digitalizacion_titulacion') or die('Error en la conexion');
    
    $consulta= "SELECT * FROM tb_usuario where usuario='".$_POST["matricula"]."' ";
    $ejecutaconsulta = mysqli_query($con,$consulta);
    $ver=mysqli_num_rows($ejecutaconsulta);
    $filas=mysqli_fetch_array($ejecutaconsulta);
        if(!$ejecutaconsulta){echo "Error al ajecutar la consulta"}
        else{(ver<1){echo "No se encontro el registro del usuario"}
        
        

        
        

 ?>