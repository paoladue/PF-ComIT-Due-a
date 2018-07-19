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
<br>
<center>
    <h3> Seleccione Especialista con quien tiene el turno cuyos datos desea consultar:  </h3>
    <br><br>

<select name="id_doc" class="btn btn-primary" >	
<option value=veintiocho>Alda Maximiliano</option>
<option value=treintayocho>Alvarez Maria Alejandra</option>
<option value=treintaycuatro>Alvarez Silvina</option>
<option value=cuatro>Bonora Maria Eugenia</option>
<option value=veintisiete>Cerdá Cintia</option>
<option value=nueve>D'Agostino Marta</option>
<option value=veintinueve>Di Leo Roxana</option>
<option value=siete>Diaz Arguello Claudia</option>
<option value=ocho>Digiglio Ruben</option>
<option value=treintayuno>Feldman Juan Pablo</option>
<option value=once>Garat Cesar</option>
<option value=cuarentayuno>Granada Guillermo</option>
<option value=treintayseis>Harris Jorge Pablo</option>
<option value=trece>Herrera Virginia</option>
<option value=treintaysiete>Kaltenbach Brenda</option>
<option value=catorce>Lambert Romina</option>
<option value=quince>Mellinger Liliana</option>
<option value=veintiseis>Papucci Maura</option>
<option value=diecisiete>Peralta Martin</option>
<option value=treintaynueve>Pieroni Alejandra</option>
<option value=treinta>Posteraro Maria Victoria</option>
<option value=dieciocho>Quintana Daniel</option>
<option value=treintaytres>Reig María Ernestina</option>
<option value=veinte>Sanchez Sergio</option>
<option value=veintiuno>Teplitz Eduardo</option>
<option value=cuarenta>Test Hidrógeno Espirado</option>
<option value=veintidos>Tonetto Ivana</option>
<option value=veinticuatro>Yulita Maria Jose</option>
</select>

<br><br>
		Inserte su número de DNI que ingresó al solicitar el turno (SIN puntos): <br><br>
<INPUT type="text" name="codigo" value="" class="seleccionar2" onChange="habilitar(this)"/><br><br><br>
       </center>
    <?php
    include('secciones/footer.php') ;
    ?>
 
</body>
</html>