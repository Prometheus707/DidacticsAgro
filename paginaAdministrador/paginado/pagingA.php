

<script language="JavaScript">
function confirmar ( mensaje ) {
return confirm( mensaje );
}
</script>

<?php


/* variables */

$order="nombreTda ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 3;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM tda where idTipoTdas='3'";



  $num = $conecta->query($count);
  $x = $num->fetch_array();

  $total = ceil($x[0]/$limit_end);
  // se encarga de los caracteres //
 mysqli_set_charset($conecta,"utf8");
  echo "<table border='1' class='table table-bordered table-hover'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th class='t2' style='background:#29a900; color:white;'>Nombre</th>";

  echo "<th class='t3' style='background:#29a900; color:white;'>Descripción</th>";
  echo "<th class='t5' style='background:#29a900; color:white;'>Archivo</th>";
  echo "<th class='t6' style='background:#29a900; color:white;'>Actualizar</th>";
  echo "<th class='t6' style='background:#29a900; color:white;'>Eliminar</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  $rs = mysqli_query($conecta, "SELECT DISTINCT  MAX(idTda) FROM tda where idTipoTdas='3'");
  if ($row = mysqli_fetch_row($rs)) {
  $id = trim($row[0]);


  }
  $select = "SELECT * FROM tda inner join tipotda on tipotda.idTipoTda=tda.idTipoTdas where idTipoTdas='3' ORDER BY idTda DESC";
  $select .= " LIMIT $init, $limit_end";
  $c = $conecta->query($select);
  while($rows = $c->fetch_assoc())
  {
    if($id == $rows['idTda']) {
    echo "<tr>";
    echo "<td>".$rows['nombreTda']."</td>";
    echo "<td>".$rows['descripcionTda']."</td>
          <td><a href=../pdf/".$rows["rutaPDF"]."><img src='../images/ver.png' width='100%'></a></td>";
    echo "<td> <a href='actualizarApropia.php?id=".$rows['idTda']."'> <input  class='btn   btn-sm' style='color: green; font-size: 18px' type='button' value=' Actualizar'></a></td>";
    
    echo "<td id='t9'> <a href='eliminarApropia.php?id=".$rows['idTda']."' onclick=\"return confirmar('¿Está seguro que desea eliminar el registro?')\"> <input  class='btn   btn-sm' style='color: green; font-size: 18px' type='button' value=' Eliminar'></a></td>";


    echo "</tr>";
    }
    if(  $rows['idTda'] < $id) {
      echo "<tr>";
      echo "<td>".$rows['nombreTda']."</td>";
      echo "<td>".$rows['descripcionTda']."</td>
            <td><a href=../pdf/".$rows["rutaPDF"]."><img src='../images/ver.png' width='100%'></a></td>";
      echo "<td> <a href='actualizarApropia.php?id=".$rows['idTda']."'> <input  class='btn   btn-sm' style='color: green; font-size: 18px' type='button' value=' Actualizar'></a></td>";
      
      echo "<td id='t9'> <a href='eliminarApropia.php?id=".$rows['idTda']."' onclick=\"return confirmar('¿Está seguro que desea eliminar el registro?')\"> <input  class='btn   btn-sm' style='color: green; font-size: 18px' type='button' value=' Eliminar'></a></td>";


      echo "</tr>";
      }

  }

  echo "</tbody>";
  echo "<table>";

  /* numeración de registros [importante]*/
  echo "<div class='pagination'>";
  echo "<ul>";
  /****************************************/
  if(($ini - 1) == 0)
  {
    echo "<li style='background: #e2e2e2;'><a style='color:black' href='#'>&laquo;</a></li>";
  }
  else
  {
    echo "<li style='background: #e2e2e2'><a style='color:black' href='$url?pos=".($ini-1)."'><b>&laquo;</b></a></li>";
  }
  /****************************************/
  for($k=1; $k <= $total; $k++)
  {
    if($ini == $k)
    {
      echo "<li style='background: #e2e2e2'><a style='color:black' href='#'><b>".$k."</b></a></li>";
    }
    else
    {
      echo "<li style='background: #e2e2e2'><a style='color:black' href='$url?pos=$k'>".$k."</a></li>";
    }
  }
  /****************************************/
  if($ini == $total)
  {
    echo "<li  style='background: #e2e2e2'><a style='color:black' href='#'>&raquo;</a></li>";
  }
  else
  {
    echo "<li  style='background: #e2e2e2'><a style='color:black' href='$url?pos=".($ini+1)."'><b>&raquo;</b></a></li>";
  }
  /*******************END*******************/
  echo "</ul>";
  echo "</div>";

?>

<style>
img{
	max-width:10vh;
	min-width:5vh;
}
@media screen and (max-width: 600px) {
       table {
           width:100%;
		     display: block;
       overflow-x: auto;
	     font-size:3vw;
   font-size:2vh;
       }


       thead {
           display: none;
		   	     font-size:3vw;
         font-size:2vh;
       }
       tr:nth-of-type(2n) {
           background-color: inherit;
       }
       tr td:first-child {
           background:  #Ff6b00;
		   color:white;
		   width:100%;


       }
       tbody td {
           display: block;
           text-align:center;

   /* background:yellow; */
       }
       tbody tr:before {
           content: attr(data-th);
           display: block;
           text-align:center;
		    background: #Ff6b00;
		   	  font-family:  "Latin Modern Roman 10";
	  font-style: oblique;
	  font-size:3vh;
	  font-weight: 500;


       }
	   		/* .table tr:nth-of-type(1):before { content: ""; } */

}
/* wstilo paginado*/



.pagination  ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

.pagination li {
  float: left;
}

.pagination li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 19px;
  text-decoration: none;
  font-size: 3vh;
}

#bo li a:hover {
  background-color: #FABC15;
  color: white;
}

th {
	    background: #Ff6b00;
}


.t2{
	  width:20%;



	  font-size:3vh;
	  font-weight: 400;

  }
  .t3{
	  width:45%;


	     font-size:3vh;
	  font-weight: 400;

  }
  .t4{
	  width:15%;


	     font-size:3vh;
	  font-weight: 400;

  }
  .t5{
	  width:15%;


	     font-size:3vh;
	  font-weight: 400;

  }.t6{
	  width:15%;
	  font-size:3vh;
	  font-weight: 400;
  }
</style>
