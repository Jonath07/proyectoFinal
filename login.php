<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title>YocoTec</title>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
	</head>

	<body>
		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-body">
					<form method="post" action="acc/ac_login.php" role="form" class="text-center">
						<div class="user-thumb">
							<img src="assets/images/users/avatar-1.jpg" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
						</div>
						<div class="form-group">
							<h3>Las Perlas</h3>
							<p class="text-muted">
								Ingrese su contraseña para acceder al panel.
							</p>
							<div class="input-group m-t-30">
								<input type="password" class="form-control" placeholder="Contraseña" name="password" required="">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-primary w-sm waves-effect waves-light">
										Acceso
									</button> 
								</span>
							</div>
						</div>
						
					</form>
					<button id="sa-error-login" style="visibility: hidden"></button>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							Contraseña?<a href="page-login.html" class="text-primary m-l-5"><b>Cambiar</b></a>
						</p>
					</div>
				</div>
			</div>
			
			

		</div>

		<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

		<?php

			if($rpt == "false"){

		?>	

		<script>
		// Simula un clic en el botón automáticamente
        var boton = document.getElementById("sa-error-login");

			boton.click();
			
    	</script>
				
		<?php } ?>
	</body>
</html>