<!DOCTYPE html>
<html>
	<head>
		<title>Trabajo Final del Curso</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<link rel="stylesheet" href="dist/css/lightbox.min.css">
	</head>
	<body>
		<script src="dist/js/lightbox-plus-jquery.min.js"></script>
		<section id="contenedor">
			<?php
				include ("cabecera.html");
			?>
			<section id="contenido">
				<div id="lateral_izq">
					<div id="imagen1">
						<a class="example-image-link" href="images/lince-canadiense.jpg" data-lightbox="example-set" data-title="Lince Canadiense.">
							<img class="example-image" src="images/lince-canadiense.jpg" alt="Lince Canadiense" height="345" width="460"> 
						</a>
					</div>
					<div id="imagen2">
						<a class="example-image-link" href="images/lince-rojo.jpg" data-lightbox="example-set" data-title="Lince Rojo.">
							<img class="example-image" src="images/lince-rojo.jpg" alt="Lince Rojo" height="345" width="460">
						</a>
					</div>
				</div>
				<div id="lateral_der">
					<div id="formulario">
						<h2>Contacto</h2>
						<?php
							$nombre_form=$_POST['nombre'];
							$apellido_form=$_POST['apellido'];
							$sexo_form=$_POST['sexo'];
							$edad_form=$_POST['edad'];
							$motivo_form=$_POST['motivo'];
							$correo_form=$_POST['correo'];
							$consulta_form=$_POST['consulta'];
							//$to="gerardo.dav.bud@gmail.com";
							//$subject="Consulta enviada desde el sitio web de Linces Argentina";
							//$message="Nombre(s): ".$nombre_form."\r Apellido(s): ".$apellido_form."\r Sexo: ".$sexo_form."\r Edad: ".$edad_form." \r ¿Cómo supiste de nosotros?: ".$motivo_form."\r Correo electrónico: ".$correo_form."\r Consulta: ".$consulta_form;
							//$header="From: $nombre_form $apellido_form <$correo_form>";
							//mail($to, $subject, $message, $header);
							//DATOS DE CONEXIÓN XAMPP 
							$conexion=mysqli_connect("localhost", "root", "", "elearning");
							//DATOS DE CONEXIÓN Hostinger
							//$conexion=mysqli_connect("mysql.hostinger.com.ar", "u996137388_gerar", "1qaz1qaz1qaz", "u996137388_elear");
							mysqli_query($conexion,"insert into consultas(nombre,apellido,sexo,edad,motivo,correo,mensaje) values('$nombre_form','$apellido_form','$sexo_form',$edad_form,'$motivo_form','$correo_form','$consulta_form')");
							echo "<h3>Su consulta se envió correctamente. A la brevedad nos pondremos en contacto con usted.</h3>";
						?>
					</div>
			</section>
			<footer id= "pie">
				<p>©2016 Linces Argentina S.A.</p>
			</footer>
		</section>
	</body>
</html>