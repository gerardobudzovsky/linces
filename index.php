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
						<a class="example-image-link" href="images/lince-africano.jpg" data-lightbox="example-set" data-title="Lince Africano.">
							<img class="example-image" src="images/lince-africano.jpg" alt="Lince Africano" height="345" width="460"> 
						</a>
					</div>
					<div id="imagen2">
						<a class="example-image-link" href="images/lince-boreal.jpg" data-lightbox="example-set" data-title="Lince Boreal.">
							<img class="example-image" src="images/lince-boreal.jpg" alt="Lince Boreal" height="345" width="460">
						</a>
					</div>
				</div>
				<div id="lateral_der">
					<div id="imagen3">
						<a class="example-image-link" href="images/lince-iberico.jpg"  data-lightbox="example-set" data-title="Lince Ibérico.">
							<img class="example-image" src="images/lince-iberico.jpg" alt="Lince Ibérico" height="259" width="460">
						</a>
					</div>
					<div id="info">
						<h2>Bienvenidos a Linces Argentina</h2>
						<p>Aprendé todo lo relacionado sobre estos hermosos animales en nuestro sitio y adquiere uno si lo deseas de una de nuestras tiendas. Tenemos una trayectoria de más de 20 años criando y asesorando en la tenencia de linces como mascotas.</p>
						<p>Dejesé encantar por el cariño de estos simpáticos felinos y dele un toque de clase a su casa y a su familia. Paseelo por el vecindario y reciba todas las miradas que estos elegantes animales atraen.</p>
						<p> También vendemos diversos accesorios, alimento balanceado específico y asesoramiento veterinario especializado en las 5 especies de linces. Para todo esto y mucho más contactenos por medio de nuestro sitio o nuestras cuentas en redes sociales.</p>
					</div>
				</div>
			</section>
			<footer id= "pie">
				<p>©2016 Linces Argentina S.A.</p>
			</footer>
		</section>
	</body>
</html>