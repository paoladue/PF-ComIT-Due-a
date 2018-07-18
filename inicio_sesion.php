
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Iniciar sesion</title>
   
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
    
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <h1>Inicie sesión</h1>
            <form>
                <div class="form-group">
                    <label for="dni">Numero de documento</label>
                    <input type="text" class="form-control" id="dni" placeholder="Ingrese su documento">
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese email">
                </div>
               
                <div class="form-group">
                    <input type="button" class="btn btn-primary" onclick="window.location='http://localhost/clinica/nuevo_turno.php'" value="Enviar"/>
                </div>
            </form>
        </div>
    </div>


    <div> 
        <?php 
  if ($es_valido){
    echo "Se ha enviado su consulta";
  }
  ?> </div>

<?php
    include('secciones/footer.php') ;
    ?>
</body>

</html>