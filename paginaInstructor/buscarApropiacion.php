<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");


  $busqueda=strtolower($_REQUEST['busqueda']);
   if(empty($busqueda)){
     header("location: tdaApropiacion.php");
   }

/* codigo de cerrar sesion */
  if(($_SESSION['idUsuario'])!=''){
   ?>
   <?php
   /* capturar variable por método GET */
   if (isset($_GET['pos']))
     $ini=$_GET['pos'];
   else
     $ini=1;
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Buscar Apropiación</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	  <script type="text/javascript">
        $(function() {
          $('#padre > a').hover(function() {
            $('#otro_div').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div').css('color', '');
          });
        });
    </script>  <script type="text/javascript">
        $(function() {
          $('#padre2 > a').hover(function() {
            $('#otro_div2').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div2').css('color', '');
          });
        });
    </script><script type="text/javascript">
        $(function() {
          $('#padre3 > a').hover(function() {
            $('#otro_div3').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div3').css('color', '');
          });
        });
    </script>
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
  background-color: #FFC529;
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
	   
  }
</style>
<link href="../css/plantillaAdmin.css" rel="stylesheet">
      <script type="text/javascript">
        $(function() {
          $('#padre > a').hover(function() {
            $('#otro_div').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div').css('color', '');
          });
        });
    </script>  <script type="text/javascript">
        $(function() {
          $('#padre2 > a').hover(function() {
            $('#otro_div2').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div2').css('color', '');
          });
        });
    </script><script type="text/javascript">
        $(function() {
          $('#padre3 > a').hover(function() {
            $('#otro_div3').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div3').css('color', '');
          });
        });
    </script>
	<script type="text/javascript">
        $(function() {
          $('#padre4 > a').hover(function() {
            $('#otro_div4').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div4').css('color', '');
          });
        });
    </script>
	<script type="text/javascript">
        $(function() {
          $('#padre5 > a').hover(function() {
            $('#otro_div5').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div5').css('color', '');
          });
        });
    </script>   <script type="text/javascript">
        $(function() {
          $('#padre6 > a').hover(function() {
            $('#otro_div6').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div6').css('color', '');
          });
        });
    </script>
</head>				<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="../imagenes/usuarioD.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h5 class="m-0"> <?php   echo  ''  .$_SESSION['nombre']." <br> ".$_SESSION['apellido']; ?></h5>
        <p class="font-weight-light text-muted mb-0">Instructor</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Navegación</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item" id="padre4" >
      <a  href="instructor.php" id="miBoton" class="nav-link   ">
                <i  id="otro_div4" class="fa fa-th-large mr-3  fa-fw navimmg"></i>
                Técnicas Didácticas
            </a>
    </li>
    <li class="nav-item" id="padre5" >
      <a href="quintoBoton.php"  id="miBoton" class="nav-link ">
                <i  id="otro_div5" class="far fa-file-alt  mr-3  fa-fw navimmg " style=""></i>
                        Descubra más aquí
            </a>
    </li> <li class="nav-item" id="padre6">
      <a href="https://epcagropecuariocauca.blogspot.com" target="_blank" id="miBoton" class="nav-link ">
                <i   id="otro_div6"   class=" fa fa-globe  mr-3  fa-fw navimmg "></i>
                Banco de Recursos Didácticos 
            </a>
    </li> <li class="nav-item" id="padre">
      <a href="datosUsuario.php" id="miBoton" class="nav-link ">
                <i   id="otro_div"  class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
                Mis Datos
            </a>
    </li>




    <li class="nav-item " id="padre2" >
      <a href="sugerencia.php"  id="miBoton"   class="nav-link  ">
                <i id="otro_div2" class="fa fa-cubes mr-3  fa-fw navimmg"></i>
                Sugerencias
            </a>
    </li>
 
 <BR>
           <div class="video1">
				<video style=" width:100%;"  controls>
					<source  src="../video/apropiacion.mp4" frameborder="0" >
			   </video>
				</div>
<style>
		.video1{
	/* background:green; */
	width:100%;
	height:40vh;


}
video{
	width:60%;	height:35vh;
	

} 
</style>

</div>
<!-- End vertical navbar -->
<body>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->

    <div style="background:white; margin-top:-32px;" class="bg-red p-5 rounded pl shadow-sm ">
	  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>

        <p class="lead font-italic mb-0 text-muted">
 	<h4  style="float:left; font-size:5vh;font-size:2.5vw;   " >  Apropiación Del Conocimiento</h4>
	<a href="tdaApropiacion.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Volver &nbsp&nbsp&nbsp </button></a>

</p>		</div><br>
  <div class="row ">





<div class="w3-content w3-white" style="width:100%; display:block">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">





  <form action="buscarApropiacion.php" method="get" class="form-inline my-2 my-lg-0" >
       <input style="width:50%"type="text" name="busqueda" id="busqueda" class="form-control mr-sm-2" placeholder="Buscar" aria-label="Buscar">&nbsp&nbsp
       <button name="b1"  class="btn btn-outline-warning ">Buscar</button>	&nbsp&nbsp
	   <a href="tdaApropiacion.php"> <button  width="20%" class="btn btn-warning text-dark " > Mostrar todas </button></a>
   </form><br>


      <div id="tablephp">
        <?php
                require_once("../conexiondb.php");
                mysqli_set_charset($conecta,"utf8");
                echo "<table border='1'  class='table table-bordered table-hover'>
                 <thead> <tr>
                   <th class='t2' >Nombre</th>
                   <th class='t3'>Descripción</th>
                 
                   <th class='t5'>Archivo</th>


                  </tr>
				      </thead>";
                ?>


              <?php


              $consulta = "SELECT * FROM tda inner join tipotda on tipotda.idTipoTda=tda.idTipoTdas
              where (
              idTda like '%$busqueda%' OR
              nombreTda like '%$busqueda%' OR
              descripcionTda like '%$busqueda%'
                  )
              and
              idTipoTdas='3'";
              $resultado = $conecta->query($consulta);


              if ($resultado->num_rows > 0 ){
                  while($fila = $resultado->fetch_assoc()) {
                  echo "<tr>

                  <td> ".$fila["nombreTda"]."</td>
                  <td> ".$fila['descripcionTda']."</td>
                  
                  <td><a href=../pdf/".$fila["rutaPDF"]."><img src='../images/ver.png' width='100%'></a></td>


                  ";
                  }
                } else {
                  echo "<td colspan='4'  >
<div class='alert alert-warning' role='alert'>
   No hay resultado de la busqueda.
</div>
				  </td>  </tr>";
                }

                echo "</table>";
                $conecta->close();
                ?>
      </div>


  <!-- END GRID -->
  </div>

<!-- END w3-content -->
 </div>



      <div class="bg-white p-0 rounded my-10 shadow-lg">
        <footer>

        <div class="divFp">

          <div class="div1F">
            <img src="../images/sena2.png" width="" class="imagfooter" >
          </div>




        <div class="div3F" style="font-size: 15px">

        Centro Agropecuario Regional Cauca <br>
        Dirección: Cr 9 No 71 N 60, Alto del Cauca - Kilómetro 7 vía a Cali<br>
        Teléfono: (2) 8247678 IP: 22112 Fax: (2) 8247678<br>
        Correo: agropecuario@misena.edu.co

        </div>

                 <div class="div2F">
                  <img src="../imagenes/SENOVA.png"  class="imag2footer" >
                </div>
          </div>

           </footer>
   </div>

  </div>

</div>







<?php
}else{
  header("location:../index.php");
}
 ?>





</body>
</html>

<script src="JS/jquery-3.3.1.min.js"></script>
          <script src="JS/popper.min.js"></script>
            <script src="JS/bootstrap.min.js"></script>
<script>

$(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});

</script>


<script>
// script de sacar el modal
$(document).ready(function(){

  $("#myBtn3").click(function(){
    $("#myModal3").modal({backdrop: "static"});
  });
});
</script>


<script>

                          <?php
                          if(isset($_GET['opcion1'])&& $_GET['opcion1']=='true'){
                            echo 'alert ( "Registro exitoso")';
                          }
                          if(isset($_GET['opcion2'])&& $_GET['opcion2']=='true'){

                            echo 'alert ( "El pdf ya existe en la base de datos")';

                          }
                          if(isset($_GET['opcion8'])&& $_GET['opcion8']=='true'){

                            echo 'alert ( "Se a actualizado correctamente")';

                          }
 if(isset($_GET['opcion6']) && $_GET['opcion6'] == 'true'){
                              echo 'alert ( "La extensión o el tamaño de los archivos no es correcta, vuelva a intentarlo.")';
                            }



                            if(isset($_GET['opcion7']) && $_GET['opcion7'] == 'true'){
                            echo 'alert ( "Ocurrió algún error no pudo guardarse el formato vuelva a intentarlo.")';

                            }

                                    ?>


                       </script>
