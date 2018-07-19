<!DOCTYPE html>
<html>
<head>
  <title> Turnos online </title>
  <link rel="stylesheet" type="text/css" href="C:/xampp/htdocs/clinica/estilos.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  
  </head>
<body>

  
    
    <?php
    include('secciones/navbar.php') ;
    ?>
 
 <div class="container mt-4" >
    <center>
     <h1>  BIENVENIDO A CLINICA MÉDICA </h1>
     <img src="imagenes\clinica.jpg" border="1" alt="Imagen de la clinica" width="900" height="350">
</center>



    <div class ="instructivo mt-4"> 
      <h3> ¿Cómo funciona Clinica Medica? </h3>
      <div class="row">
        <div class="col-md-4 mt-2">

      <h4>1. Busca el profesional</h4>
              <p>Primero debes buscar al profesional según su especialidad.</p>
            </div>
          
          <div class="col-md-4 mt-2">
            
            
              <h4>2. Elige una fecha</h4>
              <p>Podrás ver toda la disponibilidad del profesional, eligiendo el día y horario que más se ajuste a tu necesidad.</p>
          
          </div>

          <div class="col-md-4 mt-2">
            
              <h4>3. Agenda el turno</h4>
              <p>¡Listo! tendrás tu turno agendado. Recibirás la confirmación por e-mail.</p>
      </div>
    </div>


</div>
    
   <div id="boton_inicio"> 
  <button type="button" class="btn btn-primary btn-lg btn-block" href="inicio_sesion.php">SOLICITAR TURNO</button >
  <button type="button" class="btn btn-secondary btn-lg btn-block" href="cancelar.php" >CANCELAR TURNO</button>
  </div>
<br>

  <h2>Sobre Clinica Médica</h2>
  <p class="parrafo"> La Clinica Médica inició la actividad en el año 2018 con un cuerpo médico jerárquico y altamente capacitado, para ofrecer una MEDICINA DE VANGUARDIA y de PRIMER NIVEL en cada una de las especialidades que lo componen. Nuestra Misión consiste en brindar a cada paciente un servicio de excelencia dinámica y eficiente, con el permanente compromiso de mejorar su calidad de vida. </p>
 <p class="parrafo">Somos un grupo humano con especialistas de reconocida trayectoria, apoyados por tecnología de nivel superior, instalaciones totalmente remodeladas, áreas de complejidad en todas las especialidades, centros de atención ambulatoria y un compromiso con la comunidad que se concreta a través del valioso aporte a la docencia y la investigación.</p>

<p class="parrafo">A través de nuestro sitio web podrá conocernos en profundidad y obtener información de calidad para el cuidado de su salud.</p>
    
    <a class="btn btn-primary text-uppercase btn-lg" href="nosotros.php">Conozca más sobre nosotros</a>

 <br> <br>
 <h2> Novedades y Noticias</h2>

     <div class="row">
     <div class="col-md-4">
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagenes/cardiofem.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Tenemos los mejores profesionales para evaluación de riesgo cardiovascular en mujeres adultas.</p>
     <a class="btn btn-primary" href="inicio_sesion.php">Solicite turno</a>
  </div>
</div>
</div>
<div class="col-md-4">
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagenes/transductor.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Contamos con la última tecnología en transductor endocavitario para la realización de ecografías.</p>
    <a class="btn btn-primary" href="inicio_sesion.php">Solicite turno</a>
  </div>
</div>
</div>
<div class="col-md-4">
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="imagenes/ronquido.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Incorporamos nuevo equipamiento General Electric para el tratamiento de los ronquidos.</p>
    <a class="btn btn-primary" href="inicio_sesion.php">Solicite turno</a>
  </div>
</div>
</div>
 
</div> <!--es el div conteiner-->

</div>
<?php
    include('secciones/footer.php') ;
    ?>
</body>
</html>