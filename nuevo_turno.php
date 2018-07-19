<!DOCTYPE html>
<html>
<head>
<title> Solicitar turno </title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="tcal.css"/>
<script type="text/javascript" src="tcal.js"></script>
</head>
<body>
<?php
    include('secciones/navbar.php') ;
    ?>
<br>
<center>
<div>
  <h3 id="tit"> SOLICITE SU TURNO </h3>
</div>
<br>
<br>

<div id="todo"> 
<p id="titulo"> Turnos Online</p>
<form name="demoForm">
  <select name="demoSelect" onchange="showData()" class="btn btn-primary">
    <option value="zilch">Seleccione la especialidad:</option>
    <option value="A">ALERGIA E INMUNOLOGIA</option>
    <option value="B">ANGIOLOGIA GENERAL Y HEMODINAMIA</option>
    <option value="C">BIOQUIMICA HEMATOLOGICA Y HEMOSTASIA</option>
    <option value="D">CARDIOLOGIA</option>
    <option value="E">CIRUGIA </option>
    <option value="F">CLINICA MEDICA</option>
    <option value="G">DERMATOLOGIA</option>
    <option value="H">DIAGNOSTICO POR IMAGENES</option>
    <option value="I">ENDOCRINOLOGIA</option>
    <option value="J">FONOAUDIOLOGIA</option>
    <option value="K">GASTROENTEROLOGIA</option>
    <option value="L">GENETICA MEDICA</option>
    <option value="M">GERIATRIA</option>
    <option value="N">GINECOLOGIA</option>
    <option value="Ñ">HEMATOLOGIA</option>
    <option value="O">HEMOTERAPIA E INMUNOHEMATOLOGIA</option>
    <option value="P">HEPATOLOGIA</option>
    <option value="Q">INFECTOLOGIA</option>
    <option value="R">KINESIOLOGIA</option>
    <option value="S">MASTOLOGIA</option>
    <option value="T">MEDICINA DEL DEPORTE</option>
    <option value="U">MEDICINA DEL TRABAJO</option>
    <option value="V">MEDICINA GENERAL y/O MEDICINA DE FAMILIA</option>
    <option value="W">NEFROLOGIA</option>
    <option value="X">NEONATOLOGIA</option>
    <option value="Y">NEUMONOLOGIA</option>
    <option value="Z">PEDIATRIA</option>
    <option value="1">REUMATOLOGIA</option>
    <option value="2">TERAPIA INTENSIVA</option>
    <option value="3">TERAPIA OCUPACIONAL</option>
    <option value="4">TOCOGINECOLOGIA</option>
    <option value="5">TOXICOLOGIA</option>
    <option value="6">TRAUMATOLOGIA Y ORTOPEDIA</option>
  </select>
</form>
<p id="secondP">
  &nbsp;
</p>
<p id="thirdP">
  &nbsp;
</p>
<script>
    function showData() {
        var theSelect = demoForm.demoSelect;
        var secondP = document.getElementById('secondP');
        var thirdP = document.getElementById('thirdP');
        thirdP.innerHTML = ('La especialidad seleccionada es: ' + theSelect[theSelect.selectedIndex].text);
    }
     </script>
<br>
<form name="demoForm2">
  <select name="demoSelect2" onchange="showData2()" class="btn btn-primary">
    <option value="zilch">Seleccione el especialista:</option>
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
</form>
<br>

<p id="doctor">
  &nbsp;
</p>
<script>
    function showData2() {
        var theSelect = demoForm2.demoSelect2;
        var doctor = document.getElementById('doctor');
        doctor.innerHTML = ('Su profesional seleccionado es: ' +  theSelect[theSelect.selectedIndex].text);
    }
     </script>
<!-- -->
<form name="demoForm1">
  <select name="demoSelect1" onchange="showData1()" class="btn btn-primary">
    <option value="zilch">Seleccione la obra social:</option>
    <option value=""> ACCORD </option>
    <option value="1"> ACA </option>
    <option value="2"> AMFFA </option>
    <option value="3"> AMS </option>
    <option value="4"> APM </option>
    <option value="5"> APSOT </option>
    <option value="6"> BANCO_LA_PAMPA </option>
    <option value="7"> BANCO_PROVINCIA </option>
    <option value="8"> BONACORSI </option>
    <option value="9"> BORLENGHI </option>
    <option value="10"> BRAMED </option>
    <option value="11"> COLEGIO_ESCRIBANOS </option>
    <option value="12"> COMEI </option>
    <option value="13"> CONDUCTORES_NAVALES </option>
    <option value="14"> DAN </option>
    <option value="15"> DASUTEN(UTN) </option>
    <option value="16"> DOCTHOS </option>
    <option value="17"> DOSEM </option>
    <option value="18"> ECLESIASTICA_SAN_PEDRO </option>
    <option value="19"> ELECTRICISTAS_NAVALES </option>
    <option value="20"> FARMACIA(AMFFA) </option>
    <option value="21"> FEDERADA_Salud </option>
    <option value="22"> FUERZA AEREA </option>
    <option value="23"> FUTBOLISTAS_AGREM. </option>
    <option value="24"> GALENO_ARGENTINA </option>
    <option value="25"> GRANOS_Y_ANEXOS </option>
    <option value="26"> GRUPO_NOVA_SALUD(SCIS) </option>
    <option value="27"> GRUPO_PRETOQ_MED_GPM </option>
    <option value="28"> IOMA </option>
    <option value="29"> ITAL_RED </option>
    <option value="30"> JERARQ.SALUD </option>
    <option value="31"> LUIS_PASTEUR </option>
    <option value="32"> LUZ_Y_FUERZA </option>
    <option value="33"> MADERERA </option>
    <option value="34"> MAPFRE </option>
    <option value="35"> MARINA_MERCANTE </option>
    <option value="36"> MEDIAR </option>
    <option value="37"> MEDICUS </option>
    <option value="38"> MEDIFE </option>
    <option value="39"> MEDISOL </option>
    <option value="40"> MOLINEROS </option>
    <option value="41"> OMINT - CONSOLIDAR SALUD </option>
    <option value="42"> OPDEA </option>
    <option value="43"> OSARPYH </option>
    <option value="44"> OSDE </option>
    <option value="45"> OSDIPP </option>
    <option value="46"> OSETIA </option>
    <option value="47"> OSFFENTOS </option>
    <option value="48"> OSIAD (Aceiteros) </option>
    <option value="49"> OSMATA (Sipas Nacional) </option>
    <option value="50"> OSMEBA </option>
    <option value="51"> OSPACA </option>
    <option value="52"> OSPATCA </option>
    <option value="53"> OSPBB PETROQUIMICA B.BLANCA </option>
    <option value="54"> OSPEDYC </option>
    <option value="55"> OSPEGAP </option>
    <option value="56"> OSPERYHRA </option>
    <option value="57"> OSPESCA </option>
    <option value="58"> OSPIF </option>
    <option value="59"> OSPIM </option>
    <option value="60"> OSPIQYP </option>
    <option value="61"> OSPIV </option>
    <option value="62"> OSPRERA </option>
    <option value="63"> OSPSA </option>
    <option value="64"> OSPSIP </option>
    <option value="65"> OSSEG </option>
    <option value="66"> OSTEL </option>
    <option value="67"> OSTEP </option>
    <option value="68"> OSTIG </option>
    <option value="69"> OSTYR-OSTRAC-AATRAC </option>
    <option value="70"> PAMI </option>
    <option value="71"> PERSONAL_ESCRIBANIAS </option>
    <option value="72"> PODER_JUDICIAL </option>
    <option value="73"> PRENSA </option>
    <option value="74"> PREVENCION SALUD </option>
    <option value="75"> PROTEXIA </option>
    <option value="76"> QUALITAS </option>
    <option value="77"> RED_DE_PRESTADORES </option>
    <option value="78"> SALUD_TOTAL </option>
    <option value="79"> SANCOR SALUD </option>
    <option value="80"> SAT </option>
    <option value="81"> SERENOS_BUQUES (OSSdeB) </option>
    <option value="82"> SERVESALUD </option>
    <option value="83"> SOMU </option>
    <option value="84"> SWISS_MEDICAL </option>
    <option value="85"> TECHINT </option>
    <option value="86"> TEXTILES </option>
    <option value="87"> UNS </option>
    <option value="88"> UP </option>
    <option value="89"> UTA </option>
    <option value="90"> VISITAR </option>
  </select>
</form>
<p id="secondP">
  &nbsp;
</p>
<p id="cartel">
  &nbsp;
</p>
<script>
    function showData1() {
        var theSelect = demoForm1.demoSelect1;
        var secondP = document.getElementById('secondP');
        var cartel = document.getElementById('cartel');
        cartel.innerHTML = ('Su obra social seleccionada es: ' +  theSelect[theSelect.selectedIndex].text);
    }
     </script>
<form action="#">
  <br>
  <!-- add class="tcal" to your input field -->
  <div class="btn btn-primary">
     Seleccione la fecha: <input type="text" readonly="readonly" name="date" class="tcal"/>
  </div>
  <br>
  <br>
  <br>
  <br>
  <button class="btn btn-primary"> ENVIAR </button>
</form>
</div>
</body>
<br>
<?php
    include('secciones/footer.php') ;
    ?>
</html>