<?php
    $target_path = 'Este equipo/Descragas';
    $subir_archivo = $target_path . basename( $_FILES['file1']['name']); 
    if(move_uploaded_file($_FILES['file1']['tmp_name'], $subir_archivo)) {
        echo "El archivo se ha subido correctamente";
    } else{
        echo "Ha ocurrido un error, intente de nuevo";
    }
?>
