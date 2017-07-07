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
						<h3>Si tenés alguna duda podés comunicarte con nosotros</h3>
						<h2>Contacto</h2>
						<form method="POST" action="action_page.php">
							Nombre(s):<input type="text" name="nombre" required>*
							<br><br>
							Apellido(s):<input type="text" name="apellido" required>*
							<br><br>
							Sexo:<br>
								<input type="radio" name="sexo" value="varon">
								Varón<br>
								<input type="radio" name="sexo" value="mujer">
								Mujer<br><br>
							Edad: <input type="number" name="edad">
							<br><br>
							¿Cómo supiste de nosotros?
							 <select name="motivo" required>
								<option value="sitioweb">Sitio web</option>
								<option value="redessociales">Redes sociales</option>
								<option value="amigo">Un amigo me dijo</option>
								<option value="otros">Otros</option>
							</select>*
							<br><br>
							Email: <input type="email" name="correo" size="30" required>*<br><br>
							Consulta: <br><textarea name="consulta" rows="10" cols="40" required></textarea><br><br>
							<input type="submit" value="Enviar Consulta">
						</form>
					</div>
			</section>
			<footer id= "pie">
				<p>©2016 Linces Argentina S.A.</p>
			</footer>
		</section>
	</body>
</html>