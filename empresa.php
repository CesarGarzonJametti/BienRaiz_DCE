<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="./css/style.css" rel="stylesheet" type="text/css">

        <title>BienRaíz DCE</title>
    </head>
    <style>
.contenedor {
  padding: 60px;
}

ul{
		list-style: none;
}
ul li{
		width: 50% ;
		float: left;
		text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-size:25px
    
}
ul li img {
		width:300px;
		height: 300px; 
    list-style-image: url('sqpurple.gif');
    align:center;

}
p{
		text-align:justify;
		margin: 20px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:25px
}

h1 {
  text-align: center;
  font-size:60px

}

img {
  border-radius: 60px;
  display: block;
  margin-left: auto;
  margin-right: auto;

}

iframe  {
  border-radius: 50px;
  padding: 5px;
  width: 1000px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;

}

.vis_nuestra_of {
  margin-top: 40px;
}

</style>

</head>

    <body>
		<?php
        	require("./layout/header.php");
    	?>
  
    <div class="contenedor">
    <div class="mision">
			<ul>
				<li>
					<h1>MISIÓN</h1>
					<img src="./recursos/img/mision.gif">
					<p>Somos una Organización dedicada a la venta y alquiler de proyectos inmobiliarios de excelentes características 
              y con estilos innovadores, para satisfacer las necesidades y deseos de nuestros clientes e inversionistas.</p>

				</li>
				<li>
					<h1>VISIÓN</h1>
					<img src="./recursos/img/vision.gif">
					<p>Ser una Empresa financieramente sólida, organizacionalmente bien estructurada,posicionada en la industria Inmobiliaria a través de procesos 
      constructivos innovadores de excelente calidad y con un ambiente laboral acogedor para desarrollar al talento humano. 
      </p>
				</li>
     <ul>
    </div>

    <div class="video">
    <center>
      <h1>Video de Presentación</h1>
			<video controls>
				<source src="../BienRaiz-DCE/recursos/videos/Video2.mp4" type="video/mp4">
			</video>
    </center>
      <ul>
        <li>Transparencia</li>
        <li>Solidez </li>
        <li>Confianza </li>
        <li>Respeto</li>
        <li>Honestidad  </li>
        <li>Responsabilidad </li>
        <li>Trabajo en equipo</li>
        <li>Fidelidad</li>
        <li>Perseverancia</li>
        <li>Calidad</li>
        <li>Cumplimiento</li>
        <li>Innovación</li>
      </ul>
    </div>
    
    <div class="vis_nuestra_of">
      <h1><br>Visita Nuestras Oficinas</br></h1>
      <img src="./recursos/img/ubica.gif" height="200px">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.758091283061!2d-78.44470058558817!3d-0.31482169977030855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5bd12538eb13b%3A0x907c61f1abbe45ab!2sUniversidad%20de%20las%20Fuerzas%20Armadas%20ESPE!5e0!3m2!1ses!2sec!4v1673739868677!5m2!1ses!2sec" text-align="center" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

      <?php
        	require("./layout/footer.php");
    	?>

    </body>
</html>

