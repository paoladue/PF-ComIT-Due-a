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
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>

	<?php
    include('secciones/navbar.php') ;
    ?>
		<br>
		<div class="container">

			<h4> Encuentra profesionales según especialidad </h4>
			<br>

			<!--


<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseeleven">
											GASTROENTEROLOGIA
										</a>
									</h4>
								</div>
								<div id="collapseeleven" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="list-unstyled">
											<li><a href=""><i ></i> FUXMAN, JORGE MARIO </a></li>
											<ul>
		<li><div><span>Martes</span><i> 15:00 hs a 20:00 hs</i></div></li>
		<li><div><span>Viernes</span><i> 12:00 hs a 18:00 hs</i></div></li>
	</ul>

<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>
<br>
<br>
											<li><a href=""><i ></i> COLLI, MONICA LILIANA </a></li>
											<ul>
		<li><div><span>Martes</span><i> 15:00 hs a 20:00 hs</i></div></li>
		<li><div><span>Viernes</span><i> 12:00 hs a 18:00 hs</i></div></li>
	</ul>

<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>
<br>
										</ul>

									</div>
								</div>
							</div>

						</div>
					</div>
	</div>
</div>


-->




			<div class="accordion" id="accordionExample">

				<div class="card">

					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="TRUE" aria-controls="collapseOne">
          ALERGIA E INMUNOLOGIA
        </button>
      </h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<a><i class="fa"></i> ABARCA, JORGE RAÚL </a>
							<ul>
								<li>
									<div><span>Lunes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>
							</a>
							</li>
							<br>
							<br>

							<a><i class="f1"></i> RAMÓN, GERMÁN DARÍO</a>

							<!-- inicio de horarios y boton para turno-->
							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Jueves</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

						</div>
					</div>
				</div>


				<!--inicio de la card-->

				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         ANGIOLOGIA GENERAL Y HEMODINAMIA
        </button>
      </h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">

							<a><i class="fa"></i> BORELLI, RICARDO RUBEN </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>

						</div>
					</div>
				</div>

				<!--fin de la card-->


				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          BIOQUIMICA HEMATOLOGICA Y HEMOSTASIA
        </button>
      </h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<a><i class="fa"></i> FUNES, MARIA EUGENIA </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>

							<br>
							<br>
							<a><i class="fa"></i> GENTILI, ARTURO HUMBERTO </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>
							<br>
							<br>
							<a><i class="fa"></i> AGGIO, PATRICIA CRISTINA</a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>




						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingfour">
						<h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
         CARDIOLOGÍA
        </button>
      </h5>
					</div>
					<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
						<div class="card-body">

							<a><i class="fa"></i> PIPKIN, MARIANO </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>

							<br>
							<br>
							<a><i class="fa"></i> BUALO, PABLO JAVIER </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>
						</div>
					</div>
				</div>






				<div class="card">
					<div class="card-header" id="headingfive">
						<h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
         CIRUGÍA
        </button>
      </h5>
					</div>
					<div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
						<div class="card-body">

							<a><i class="fa"></i> BYKALUK, JUAN ARIEL </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>
							<br>
							<br>
							<a><i class="fa"></i> BORELLI, DAMIAN ROBERTO </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>
						</div>
					</div>
				</div>

				<!--inicio de la card-->

				<div class="card">
					<div class="card-header" id="headingsix">
						<h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
         CLÍNICA MÉDICA
        </button>
      </h5>
					</div>
					<div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
						<div class="card-body">

							<a><i class="fa"></i> MENDAÑA, GUILLERMO ALBERTO </a>

							<ul>
								<li>
									<div><span>Lunes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>
							<br>
							<br>
							<a><i class="fa"></i> ROMERO, MARIA ROSA </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Miércoles</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>

							<br>
							<br>
							<a><i class="fa"></i> PAGLIARI, SILVINA </a>

							<ul>
								<li>
									<div><span>Jueves</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>

						</div>
					</div>
				</div>


				<!--fin de la card-->
				<!--inicio de la card-->

				<div class="card">
					<div class="card-header" id="headingseven">
						<h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
         DERMATOLOGIA
        </button>
      </h5>
					</div>
					<div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
						<div class="card-body">

							<a><i class="fa"></i> PERUFFO, MARIA LAURA </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>
							<br>
							<br>
							<a><i class="fa"></i> VALLEJO ALICIA MONICA </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>

							<br>
							<br>
							<a><i class="fa"></i>BUSTO, YOLANDA EMILIA </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>
							</ul>

						</div>
					</div>
				</div>

				<!--fin de la card-->


				<!--inicio de la card-->

				<div class="card">
					<div class="card-header" id="headingseven">
						<h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
         DIAGNÓSTICO POR IMÁGENES
        </button>
      </h5>
					</div>
					<div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
						<div class="card-body">

							<a><i class="fa"></i> PICOREL, JORGE EDUARDO </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>
							<br>
							<br>
							<a><i class="fa"></i> OCHUA, GUILLERMINA MARIELA </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>


						</div>
					</div>
				</div>

				<!--fin de la card-->


				<!--inicio de la card-->

				<div class="card">
					<div class="card-header" id="headingeight">
						<h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
         FONOAUDIOLOGÍA
        </button>
      </h5>
					</div>
					<div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
						<div class="card-body">

							<a><i class="fa"></i> CANTARELLI, MARIA DE LA PAZ </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>
							<br>
							<br>
							<a><i class="fa"></i> NICOSIA MONICA LILIANA </a>

							<ul>
								<li>
									<div><span>Martes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
								<li>
									<div><span>Viernes</span><i> 08:00 hs a 12:00 hs</i></div>
								</li>
							</ul>

							<a class="btn btn-primary select" href="inicio_sesion.php"> SOLICITAR TURNO </a>

							</ul>


						</div>
					</div>
				</div>

				<!--fin de la card-->


</body>
<?php
    include('secciones/footer.php') ;
    ?>

</html>