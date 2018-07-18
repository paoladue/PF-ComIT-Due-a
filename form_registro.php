<?php
//isset para saber si esta definida la variable
if( isset($_POST['nombre'])) {
  $conexion=mysqli_connect('localhost','root','');
   if (!$conexion) {
    die("la conexion fallo".mysqli_connect_error());
   }
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

   $sql="INSERT INTO paciente (dni_paciente,nombre,apellido,fecha_nac,tel,email,obra_social) VALUES ($dni, $nombre, )" ;
}

?>

<?php
$es_valido = false;
if( isset($_POST['nombre'])) {
  $es_valido=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL); //ES PARA VALIDAR MAIL

}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Registrate</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

 
  

</head>
<body>
  <?php
    include('secciones/navbar.php') ;
    ?>
 
 

 <div class="container">
  <div class="row">
    <div class="col-12 col-md-6 registration-image">
  </div>
    <div class="col-12 col-md-4 p-5">
       <h1>Registrate</h1>
            <form method="post" action="form_registro.php" >
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" maxlength="50" placeholder="Ingrese su nombre" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" maxlength="50" placeholder="Ingrese su apellido">
                </div>


                <div class="form-group">
                    <label for="username">Telefono:</label>
                    <input type="text" class="form-control" id="tel" maxlength="50" placeholder="Ingrese telefono">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese email" required>
                </div>
              <div class="form-group">
                <label for="tipodoc">Numero de documento</label>
                    <input type="documento" class="form-control" id="documento" placeholder="Ingrese su numero de documento" required>
                </div>
                <div class="form-group">
                    <label for="fecha_nac">Fecha de nacimiento </label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha"> </input></p>
                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                </div>
            </form>
  </div>
        <div class="image2"></div>
        <div class="frm">
           
        </div>
    </div>


    <div> <?php 
  if ($es_valido){
    echo "Se ha enviado su consulta";
  }
  ?> </div>


<br>
<br>
<br>
<br>
<?php
    include('secciones/footer.php') ;
    ?>






</body>
</html>