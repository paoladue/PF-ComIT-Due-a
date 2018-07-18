<!DOCTYPE html>
<html>
<head>
	<title> Solicitar turno </title>
  <link rel="stylesheet" type="text/css" href="cssform.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
   <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>

   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CLINICA MEDICA</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.html">Inicio</a></li>
      <li><a href="nosotros.html">Institucional</a></li>
      <li><a href="profesionales.html">Profesionales Médicos</a></li>
      <li><a href="nuevo_turno.html">Turnos</a></li>
      <li><a href="form_contacto.html">Contacto</a></li>
    </ul>
  </div>
</nav>

<center> 

   <h3> SOLICITE SU TURNO </h3>

<select class="desplegable"  name="IdEspecialidadMedica" >
<option value="0">Especialidad Médica</option>
<option value="1">ALERGIA E INMUNOLOGIA</option>
<option value="3">ANGIOLOGIA GENERAL Y HEMODINAMIA</option>
<option value="4">BIOQUIMICA HEMATOLOGICA Y HEMOSTASIA</option>
<option value="5">CARDIOLOGIA</option>
<option value="6">CIRUGIA </option>
<option value="7">CLINICA MEDICA</option>
<option value="9">DERMATOLOGIA</option>
<option value="10">DIAGNOSTICO POR IMAGENES</option>
<option value="13">ENDOCRINOLOGIA</option>
<option value="16">FONOAUDIOLOGIA</option>
<option value="17">GASTROENTEROLOGIA</option>
<option value="18">GENETICA MEDICA</option>
<option value="19">GERIATRIA</option>
<option value="20">GINECOLOGIA</option>
<option value="21">HEMATOLOGIA</option>
<option value="22">HEMOTERAPIA E INMUNOHEMATOLOGIA</option>
<option value="23">HEPATOLOGIA</option>
<option value="24">INFECTOLOGIA</option>
<option value="25">KINESIOLOGIA</option>
<option value="26">MASTOLOGIA</option>
<option value="27">MEDICINA DEL DEPORTE</option>
<option value="28">MEDICINA DEL TRABAJO</option>
<option value="29">MEDICINA GENERAL y/O MEDICINA DE FAMILIA</option>
<option value="30">NEFROLOGIA</option>
<option value="31">NEONATOLOGIA</option>
<option value="32">NEUMONOLOGIA</option>
<option value="33">NEUROCIRUGIA</option>
<option value="34">NEUROLOGIA</option>
<option value="35">NUTRICION</option>
<option value="36">OBSTETRICIA</option>
<option value="37">ODONTOLOGIA GENERAL</option>
<option value="38">ODONTOPEDIATRIA</option>
<option value="39">OFTALMOLOGIA</option>
<option value="40">ONCOLOGIA</option>
<option value="41">OTORRINOLARINGOLOGIA</option>
<option value="42">PEDIATRIA</option>
<option value="43">PSICOLOGIA</option>
<option value="44">PSICOPEDAGOGIA</option>
<option value="45">PSIQUIATRIA</option>
<option value="46">RADIOTERAPIA O TERAPIA RADIANTE</option>
<option value="47">REUMATOLOGIA</option>
<option value="48">TERAPIA INTENSIVA</option>
<option value="49">TERAPIA OCUPACIONAL</option>
<option value="50">TOCOGINECOLOGIA</option>
<option value="51">TOXICOLOGIA</option>
<option value="52">TRAUMATOLOGIA Y ORTOPEDIA</option>
<option value="53">UROLOGIA</option>
</select>


<br>

<select class="desplegable" name="obrasocial" required="required">
   <option value=""> Seleccione Obra Social </option>
   <option value=""> ACCORD </option>
   <option value=""> ACA </option>
   <option value=""> AMFFA </option>
   <option value=""> AMS </option>
   <option value=""> APM </option>
   <option value=""> APSOT </option>
   <option value=""> BANCO_LA_PAMPA </option>
   <option value=""> BANCO_PROVINCIA </option>
   <option value=""> BONACORSI </option>
   <option value=""> BORLENGHI </option>
   <option value=""> BRAMED </option>
   <option value=""> COLEGIO_ESCRIBANOS </option>
   <option value=""> COMEI </option>
   <option value=""> CONDUCTORES_NAVALES </option>
   <option value=""> DAN </option>
   <option value=""> DASUTEN(UTN) </option>
   <option value=""> DOCTHOS </option>
   <option value=""> DOSEM </option>
   <option value=""> ECLESIASTICA_SAN_PEDRO </option>
   <option value=""> ELECTRICISTAS_NAVALES </option>
   <option value=""> FARMACIA(AMFFA) </option>
   <option value=""> FEDERADA_Salud </option>
   <option value=""> FUERZA AEREA </option>
   <option value=""> FUTBOLISTAS_AGREM. </option>
   <option value=""> GALENO_ARGENTINA </option>
   <option value=""> GRANOS_Y_ANEXOS </option>
   <option value=""> GRUPO_NOVA_SALUD(SCIS) </option>
   <option value=""> GRUPO_PRETOQ_MED_GPM </option>
   <option value=""> IOMA </option>
   <option value=""> ITAL_RED </option>
   <option value=""> JERARQ.SALUD </option>
   <option value=""> LUIS_PASTEUR </option>
   <option value=""> LUZ_Y_FUERZA </option>
   <option value=""> MADERERA </option>
   <option value=""> MAPFRE </option>
   <option value=""> MARINA_MERCANTE </option>
   <option value=""> MEDIAR </option>
   <option value=""> MEDICUS </option>
   <option value=""> MEDIFE </option>
   <option value=""> MEDISOL </option>
   <option value=""> MOLINEROS </option>
   <option value=""> OMINT - CONSOLIDAR SALUD </option>
   <option value=""> OPDEA  </option>
   <option value=""> OSARPYH </option>
   <option value=""> OSDE </option>
   <option value=""> OSDIPP </option>
   <option value=""> OSETIA </option>
   <option value=""> OSFFENTOS </option>
   <option value=""> OSIAD (Aceiteros) </option>
   <option value=""> OSMATA (Sipas Nacional) </option>
   <option value=""> OSMEBA </option>
   <option value=""> OSPACA </option>
   <option value=""> OSPATCA </option>
   <option value=""> OSPBB PETROQUIMICA B.BLANCA </option>
   <option value=""> OSPEDYC </option>
   <option value=""> OSPEGAP </option>
   <option value=""> OSPERYHRA </option>
   <option value=""> OSPESCA </option>
   <option value=""> OSPIF </option>
   <option value=""> OSPIM </option>
   <option value=""> OSPIQYP </option>
   <option value=""> OSPIV </option>
   <option value=""> OSPRERA </option>
   <option value=""> OSPSA </option>
   <option value=""> OSPSIP </option>
   <option value=""> OSSEG </option>
   <option value=""> OSTEL </option>
   <option value=""> OSTEP </option>
   <option value=""> OSTIG </option>
   <option value=""> OSTYR-OSTRAC-AATRAC </option>
   <option value=""> PAMI </option>
   <option value=""> PAS </option>
   <option value=""> PATRONES_CAB </option>
   <option value=""> PERSONAL_ESCRIBANIAS </option>
   <option value=""> PODER_JUDICIAL </option>
   <option value=""> PRENSA </option>
   <option value=""> PREVENCION SALUD </option>
   <option value=""> PRO-AR-SA </option>
   <option value=""> PROTEXIA </option>
   <option value=""> QUALITAS </option>
   <option value=""> RED_DE_PRESTADORES </option>
   <option value=""> SALUD_TOTAL </option>
   <option value=""> SANCOR SALUD </option>
   <option value=""> SAT </option>
   <option value=""> SERENOS_BUQUES (OSSdeB) </option>
   <option value=""> SERVESALUD  </option>
   <option value=""> SOMU </option>
   <option value=""> SWISS_MEDICAL </option>
   <option value=""> TECHINT </option>
   <option value=""> TEXTILES </option>
   <option value=""> UNS </option>
   <option value=""> UP </option>
   <option value=""> UTA </option>
   <option value=""> VIDA SA </option>
   <option value=""> VISITAR </option>

</select>
<br>
<br>
<br>
<button type="button" class="btn btn-primary">ENVIAR</button>


</center>


</body>
</html>