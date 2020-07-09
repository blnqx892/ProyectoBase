<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Inicio BD</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
	<!-- Bootstrap Styles-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FontAwesome Styles-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- Morris Chart Styles-->
	<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- Custom Styles-->
	<link href="assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
</head>

<body><br><br><br><br>
	<div align="center">
		<h1 style="color:#A93226;">Proyecto Transacciones</h1>
		<h2 style="color:#A93226 ;">Registrar Alumno</h2><br><br>
		<div id="page-inner">
			<div class="row" style="max-width: 600px;">
				<div class="col-lg-15">
					<div class="card">
						<div class="card-action" >
						<h3>Iniciar Sesion</h3>
						</div>
						<div class="card-content">
							<form class="col s12" action="" method="post" id="frmfin" name="frmfin">
								<input type="hidden" value="" name="bandera" id="bandera">
								<div class="row">
									<div class="input-field col s6">
										<i class="material-icons prefix">account_circle</i>
										<input id="nombre" name="nombre" type="text" class="validate">
										<label for="icon_prefix">Usuario</label>
									</div>
									<div class="input-field col s6">
										<i class="material-icons prefix">account_circle</i>
										<input id="materia" name="materia" type="password" class="validate">
										<label for="icon_prefix">Contraseña</label>
									</div>
								</div>
								<div class="card-content">
									<button class="waves-effect waves-light btn" type="button" id="enviar" name="enviar"
										class="btn btn-success" style="background-color: #C0392B" onClick="">Iniciar</button>
									<button class="waves-effect waves-light btn" type="reset" id="cancelar"
										name="cancelar" style="background-color: #CD6155">Eliminar</button>
								</div>
							</form>
							<div class="clearBoth"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- /. PAGE INNER  -->
			<!-- /. PAGE WRAPPER  -->
		</div>
	</div>


	<!-- JS Scripts-->
	<!-- jQuery Js -->
	<script src="assets/js/jquery-1.10.2.js"></script>

	<!-- Bootstrap Js -->
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/materialize/js/materialize.min.js"></script>

	<!-- Metis Menu Js -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- Morris Chart Js -->
	<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
	<script src="assets/js/morris/morris.js"></script>


	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>

	<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

	<!-- Custom Js -->
	<script src="assets/js/custom-scripts.js"></script>


</body>

</html>