<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");



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
    <title>administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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
           $('#padrep > a').hover(function() {
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
               $('#div5').css('color', 'white');
             }, function() {
               // vuelve a dejar el <div> como estaba al hacer el "mouseout"
               $('#div5').css('color', '#ff6b00');
             });
           });
       </script>

</head>				<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="../images/usuarioD.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
       <h5 class="m-0"> <?php   echo  ''  .$_SESSION['nombre']." <br> ".$_SESSION['apellido']; ?></h5>
        <p class="font-weight-light text-muted mb-0">Administrador</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Navegación</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item" id="padre5">
      <a  href="administrador.php" id="miBoton" class="nav-link " >
                <i  style="color:#ff6b00" id="div5" class="fa fa-th-large mr-3  fa-fw"></i>
                Técnicas Didácticas
            </a>
        </li>

            <li class="nav-item"  id="padre">
              <a href="rompehielo.php" id="miBoton" class="nav-link " style="background:#Ff6b00 ;color:white">
                        <i     id="otro_div" class="far fa-file-alt  mr-3 rh text-white fa-fw navimmg " style=""></i>
                        Descubra más aquí
                    </a>
            </li>


    <li class="nav-item"  id="padrep">
      <a href="usuario.php" id="miBoton" class="nav-link ">
                <i     id="otro_div3" class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
                Usuarios
            </a>
    </li>




    <li class="nav-item"  id="padre2">
      <a href="sugerenciaAdmin.php"  id="miBoton"   class="nav-link">
                <i  id="otro_div2" class="fa fa-cubes mr-3  fa-fw navimmg"></i>
                Sugerencias
            </a>
    </li>
    <li class="nav-item"  id="padre4">
      <a href="reporte/reportes.php"  id="miBoton"   class="nav-link ">
                <i  id="otro_div4" class="far fa-file-archive mr-3  fa-fw navimmg"></i>
                Reportes
            </a>
    </li>

  </ul>


</div>
<!-- End vertical navbar -->
<body>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->

    <div style="background:white; margin-top:-32px;" class="bg-red p-5 rounded pl shadow-sm ">
	  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menú</small></button>

        <p class="lead mb-0 text-muted">
	<h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   " >Forma De Conformar Grupos</h4>
		  <a href="rompehielo.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Volver &nbsp&nbsp&nbsp </button></a>


</p>		</div><br>
  <div class="row ">





<div class="w3-content w3-white" style="width:100%; display:table">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">
  <p class="lead   text-black"> Es importante explicar, que un grupo no es sólo un agrupamiento de personas, ya que como seres sociales pueden formar grupos en su ámbito de estudio o mismo en su vida cotidiana, y además desarrollar una o más tareas, algo por resolver entre ellos, así como la conciencia de pertenecer al mismo, que es fundamental porque provee de modelos, normas, valores, etcétera. Lo mencionado es esencial porque todo ser humano necesita de la compañía de otros; es relevante que cada miembro sea aceptado por los otros gracias a sus características individuales ya que todos tienen la necesidad de estima, es decir, ser apreciado por el grupo. Debido a esto, se puede decir que realizando las actividades en forma grupal los aprendices, pueden llegar a lograr lo mencionado ya que tienen un doble ejercicio: además de realizar la tarea pautada, tienen la posibilidad de conocerse porque se establece una interacción profunda entre ellos centrada en la comunicación que es la herramienta más importante y gracias a ella se potenciará la cohesión. La suma de estos factores permitirá tener la conciencia de pertenecer, de confirmación por los otros miembros y de estima. Por ende, como primera medida se puede decir que los aprendices formando grupos tienen una oportunidad única que no la da la individualidad que es interactuar con otros, sentir la pertenencia, identidad grupal, el ser querido, entre otros.</p>
  <h6>  Click en la imagen para agregar un nuevo archivo con Gráfica</h6><br>
    <p > CONTENEDOR 1:</p>
    <div class="w3-half">

    <a href="#myBtn3">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="myBtn3" style="color:#59b548;font-size:100px">
    <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
    <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
  </svg>
     </a>
     <br>
  </div>
  <div style=" margin-top:-8.9%"class="w3-half">
  <h6>  Click en la imagen para agregar un nuevo archivo con documento</h6><br>
  <p > CONTENEDOR 2:</p>
  <a href="#myBtn34">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="myBtn34" style="color:#59b548;font-size:100px">
          <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
          <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
        </svg>
           </a>

           </div>
           <br><br><br><br><br><br><br><br>
 <div class="container mt-3">
   <!-- Modal -->
   <div class="modal fade" id="myModal34" role="dialog">
     <div class="modal-dialog">

       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <h4 class="modal-title">Añadir Formas De Conformar Grupos
 con documento</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body" >


           <form  class="" enctype="multipart/form-data"  onSubmit="return validar();" action="agregartda/agregarConforpdf.php" method="post">

             <p style="font-size: 18px;"> Nombre:</p> <textarea name="nombre" style="width:100%; height:15%" rows="8" cols="80" required></textarea> <br>

             <p style="font-size: 18px;">    Descripción:</p><textarea name="descripcion" style="width:100%;height:20%" rows="8" cols="80" required></textarea>

             <p style="font-size: 18px;">    Añadir pdf:</p><input type="file" name="grafica" value=""  id="archivoInput22" onchange="return validarExt()" required>

             <p style="font-size: 18px;">    Añadir anexo:</p><input type="file" name="enlace" value="">

             <br>
            <div id="visorArchivo">
             <!--Aqui se desplegará el fichero-->
            </div>

         </div>
         <div class="modal-footer">
           <input type="submit" style="margin-right: 3%" class='btn  btn-success' name="enviar" value="Agregar">
           </form>
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
         </div>
       </div>
     </div>
   </div>
 </div>

 <script>
// script de sacar el modal
$(document).ready(function(){

  $("#myBtn34").click(function(){
    $("#myModal34").modal({backdrop: "static"});
  });
});
</script>
    <!------ menu de busqueda--------->



      <div id="tablephp">
      <p > CONTENEDOR 1:</p>
      <form action="buscarEquipos.php" method="get" class="form-inline my-2 my-lg-0" style=" float:right; margin-top:-50%;">
       <input style="" type="text" name="busqueda" id="busqueda" class="form-control mr-sm-2" placeholder="Buscar" aria-label="Buscar">&nbsp
       <button style=" " name="b1" class="btn btn-outline-warning ">Buscar</button>
   </form><br><br>
        <?php

         include('paginado/pagingEquipos.php'); ?>
      </div>
      <br>
      <p>1 a 7, Tomado y adaptado de:  <a href="https://www.academia.edu/search?utf8=%E2%9C%93&q=c%C3%B3mo+armar+grupos" > Link</a> </p>

<br><br>   <p > CONTENEDOR 2:</p>
      <div id="tablephp">
        <?php

         include('paginado/paginadoConforPdf.php'); ?>
      </div>

          <a href="../pdf/COìMO_DIVIDIR-EN-EQUIPOS_PARAPDF.pdf"> <button  style="width:100%; margin-top:5%;" type="button" class="btn btn-outline-primary  " > Descargar FICHA TÉCNICA FORMAS DE CONFORMAR GRUPOS <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
      <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
      </svg> </button> </a> <br><br>
      <a href="../pdf/ANEXOFORMASDEONFORMARGRUPOS(1).pdf"> <button  style="width:100%; " type="button" class="btn btn-outline-success  " > Descargar RESUMEEN  FORMAS DE CONFORMAR GRUPOS <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
      <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
      </svg> </button> </a> <br><br><br>
  <!-- END GRID -->
  </div>

<!-- END w3-content -->
 </div>




      <div class="bg-white p-0 rounded my-10 shadow-lg">
               <footer>

			 <div class="divFp">

				  <div class="div1F">
							<img src="../imagenes/sena3.png"  class="imagfooter" >

			     </div>




				<div class="div3F">

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




<!------- modal de añadir tdas ---------->



<div class="container mt-3">
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Añadir como dividir en equipos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" >


          <form  class="" enctype="multipart/form-data"  onSubmit="return validar();" action="agregartda/agregarEquipos.php" method="post">

            <p style="font-size: 18px;"> Nombre:</p> <textarea name="nombre" style="width:100%; height:15%" rows="8" cols="80" required></textarea> <br>

            <p style="font-size: 18px;">    Descripción:</p><textarea name="descripcion" style="width:100%;height:20%" rows="8" cols="80" required></textarea>

            <p style="font-size: 18px;">    Gráfica:</p><input type="file" name="grafica" value="" id="archivoInput" onchange="return validarExte()" required>

                        <br>
                       <div id="visorArchivo">
                        <!--Aqui se desplegará el fichero-->
                       </div>

        </div>
        <div class="modal-footer">
          <input type="submit" style="margin-right: 3%" class='btn  btn-success' name="enviar" value="Agregar">
          </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>




<?php
}else{
  header("location:../index.php");
}
 ?>




  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="js/main.js"></script>

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

<script type="text/javascript">

<?php
if(isset($_GET['opcion1'])&& $_GET['opcion1']=='true'){
  echo 'swal.fire(
    "Registro exitoso.","","success"
    )';
}
if(isset($_GET['opcion8'])&& $_GET['opcion8']=='true'){

  echo 'swal.fire(
    "Se actualizo correctamente.","","success"
    )';
}
?>
</script>


<!---------- scrip de validacion si es pdf o imagen------->

                       <script type="text/javascript">

                       function validarExte()
                       {
                           var archivoInput = document.getElementById('archivoInput');
                           var archivoRuta = archivoInput.value;
                           var extPermitidas = /(.png|.jpg|.jpeg)$/i;
                           if(!extPermitidas.exec(archivoRuta)){
                             swal.fire(
                               "Asegurese de haber seleccionado un archivo png o jpg","","warning"
                               );
                               archivoInput.value = '';
                               return false;
                           }

                           else
                           {
                               //PRevio del PDF
                               if (archivoInput.files && archivoInput.files[0])
                               {
                                   var visor = new FileReader();
                                   visor.onload = function(e)
                                   {
                                       document.getElementById('visorArchivo').innerHTML =
                                       '<embed src="'+e.target.result+'" width="500" height="375" />';
                                   };
                                   visor.readAsDataURL(archivoInput.files[0]);
                               }
                           }
                       }
                       </script>
<script type="text/javascript">

function validarExt()
{
    var archivoInput22 = document.getElementById('archivoInput22');
    var archivoRuta = archivoInput22.value;
    var extPermitidas = /(.pdf|.pdf)$/i;
    if(!extPermitidas.exec(archivoRuta)){
      swal.fire(
        "Asegurese de haber seleccionado un archivo pdf","","warning"
        );
        archivoInput22.value = '';
        return false;
    }

    else
    {
        //PRevio del PDF
        if (archivoInput22.files && archivoInput22.files[0])
        {
            var visor = new FileReader();
            visor.onload = function(e)
            {
                document.getElementById('visorArchivo').innerHTML =
                '<embed src="'+e.target.result+'" width="500" height="375" />';
            };
            visor.readAsDataURL(archivoInput22.files[0]);
        }
    }
}
</script>