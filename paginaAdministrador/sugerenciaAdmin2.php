<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>


<?php

	require_once("../conexiondb.php");

	$comentario=$_POST['comentario'];
  $id=$_POST['id'];


  mysqli_set_charset($conecta,"utf8");

  $sql = "UPDATE sugerencia SET comentario='$comentario', respuesta='Atendido' WHERE idSugerencia=".$id;

  if ($conecta->query($sql) === TRUE){

  	header('location: sugerenciaAdmin.php?opcion2=true');
  }
  else
  {
  	echo "Error al ejecutar la consulta: ".$conecta->error;
  }
  $conecta->close();


   ?>

 </body>
 </html>
