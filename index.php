<?php
    if(isset($_POST["enviar"])){
        guardarFichero();
    }
    function guardarFichero(){
        $ruta= 'D:\xampp\htdocs\ejs\subirFicheros\archivos\ ';
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta.basename($_FILES["imagen"]["name"]));
    }
?>
<!DOCTYPE html>
<html lang="es">
    
    <head>
        <title>Archivos</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
        <link rel=stylesheet href=css/estilo.css />
    </head>
    <body>
        <h2>Subir imagenes</h2>
        <form method="post" enctype="multipart/form-data" action="">
            <label for="imagen">Introduce una imagen</label><br />
            <input type="file" name="imagen"><br />
            <input type="submit" name="enviar">
        </form>
        <h2><a href="php/nombres.php">Ver nombres imagen</a></h2>
        <h2><a href="php/imagenes.php">Ver imagenes </a></h2>
    </body>
</html>