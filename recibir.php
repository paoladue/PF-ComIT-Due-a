<?php
$con=mysqli_connect('localhost', 'root', '','clinicadb') or die('error en la conexion servidor');
$sql="INSERT INTO formulario VALUES ('".$_POST["nombre"].'",'".$_POST["apellido"]."', '".$_POST["email"]."','".$_POST["tipo_documento"]."', '".$_POST["num_documento"]."', '".$_POST["fecha_nac"]."')";
$resultado=mysqli_query($con,$sql) or die('Error en el query data');

mysqli_close($con);

echo'El nombre ingresado es:'.$_POST["nombre"].$_POST["apellido"];
echo 'El correo ingresado es:' .$_POST["email"];

?>
