<?php

  $zip = new ZipArchive();
  
  //Nombre del archivo ZIP que se creara
  $archivo = "pruebaBoton.zip";
  
  if($zip->open($archivo,ZIPARCHIVE::CREATE)==true){

    //Nombre y ruta del archivo que se agregara al zip
    $zip->addfile("archivo1.txt");
    //Nombre y ruta del archivo que se agregara al zip
    $zip->addfile("archivo2.txt");
    //Nombre y ruta del archivo que se agregara al zip
    $zip->addfile("prueba/archivo1.txt");
    $zip->close();
    echo "Se ha creado el archivo ".$archivo;
    ?>
    <script>
      window.location.href= 'pruebaBoton.zip';
    </script>
    <?php
    }else{
    echo "Se ha presentado un error al crear el archivo ".$archivo;

  }
  /*
  NOTA
  Verificar que contemos con permisos de escritura dentro de la carpeta que se creara el archivo
  */
?>