<?php
$es_valido = false;
if( isset($_POST['nombre'])) {
  $es_valido=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL); //ES PARA VALIDAR MAIL

}
?>
<!DOCTYPE html>
<html>

<head>

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
    <div class="container" id="registration-form">
        <div class="image1"></div>
        <div class="frm">
            <h1>Contacto</h1>
            <form>
                <div class="form-group">
                    <label for="username">Nombre:</label>
                    <input type="text" class="form-control" id="username" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="username">Telefono:</label>
                    <input type="text" class="form-control" id="tel" placeholder="Ingrese telefono">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese email">
                </div>
                <div class="form-group">
                    <label for="pwd">Mensaje:</label>
                    <input type="text" class="form-control" id="mensaje" placeholder="Ingrese su mensaje">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                </div>
            </form>
        </div>
    </div>


    <div> <?php 
  if ($es_valido){
    echo "Se ha enviado su consulta";
  }
  ?> </div>

<center>

 <br>

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA5RDtwzVd5CxtXspS0vkytb0sZGok_YnU'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:300px;width:300px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-website.com/es'>Bahia Blanca, Buenos Aires, Argentina</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=e40caf9c3eaaa7317d12b89256dc1edecafadd93'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(-38.7133679,-62.27255600000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-38.7133679,-62.27255600000001)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br>Estomba 571<br>8000 Bahía Blanca<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</center>

<?php
    include('secciones/footer.php') ;
    ?>
</body>

</html>
