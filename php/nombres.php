<?php
    $array=scandir("D:\xampp\htdocs\ejs\subirFicheros\archivos\ ");
    foreach ($array as $indice => $nombre) {
       echo $nombre;
    }
?>