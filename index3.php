<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<link rel="stylesheet" href="css/font/css/all.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
	<title>BienRaiz DCE</title>
	
</head>
<body>
		
    <h1>BienRaiz DCE</h1>
	<br><center><img src="recursos/imagenes/GIF.gif" alt="" width="250px" height="170px"></center>
	<div class=""> 
        <?php
		
			if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
		?>
        <h3>Bienvenid@ BienRaizDCE <?php echo $userData['first_name']; ?>!</h3>
				
		<link href="css/style.css" rel="stylesheet" type="text/css">

<title>BienRaíz DCE</title>
</head>
<body>
<div class="logo">
	<center>
		
		<audio class="Audio-1" src="recursos/audios/bienvenida.mp3" controls></audio>
</div>

<?php
        	require("./layout/header.php");
    	?>

<div class="recursos/imagen01">
<center>
<img src="recursos/img/I1.jpg" alt="" width="2278px" height="700px"></center>
</div>
<center> <img src="recursos/img/01BR.gif" alt="" width="500px" height="350px" border="5px">
<img src="recursos/img/02BR.gif" alt="" width="500px" height="350px" border="5px">
<img src="recursos/img/03BR.gif" alt="" width="500px" height="350px" border="5px"></center>
<center> <h1>Inmuebles Recomendados</h1></center>
<div class="container-card">

<div class="card">
<div class="contenido-card"> <a href="#">Casa en venta: Tumbaco</a></div>
<figure>
<img src="recursos/img/01.jpg">
</figure>
<div class="contenido-card">
<h3>$162.400,00</h3>
<p>Conjunto Residencial Malaquita, casa de venta en Tumbaco. Habitaciones: 3, Parquadero, Baños:2, Cocina, Sala, Terraza (140m2).</p>
</div>
</div>
<div class="card">
<div class="contenido-card"> <a href="#">Departamento en venta: Puembo</a></div>
<figure>
<img src="recursos/img/02.jpg">
</figure>
<div class="contenido-card">
<h3>$152.200,00</h3>
<p>Conjunto Residencial Malaquita, casa de venta en Tumbaco. Habitaciones: 3, Parquadero, Baños:2, Cocina, Sala, Terraza (143m2).</p>
</div>
</div>
<div class="card">
<div class="contenido-card"> <a href="#">Casa en venta: Valle de los Chillos</a></div>
<figure>
<img src="recursos/img/03.jpg">
</figure>
<div class="contenido-card">
<h3>$142.300,00</h3>
<p>Conjunto Residencial Malaquita, casa de venta en Tumbaco. Habitaciones: 3, Parquadero, Baños:2, Cocina, Sala, Terraza (128m2).</p>
</div>
</div>

<div class="card">
<div class="contenido-card"> <a href="#">Departamento en alquiler: Sangolquí</a></div>
<figure>
	<img src="recursos/img/02.jpg">
</figure>
<div class="contenido-card">
	<h3>$162.400,00</h3>
	<p>Conjunto Residencial Malaquita, casa de venta en Tumbaco. Habitaciones: 3, Parquadero, Baños:2, Cocina, Sala, Terraza (140m2).</p>
</div>
</div>
</div>
<section id="crearListaRRSS">
<a href="https://www.facebook.com/"> <img src="img/facebook.png" alt="" width="100px" height="100px" ></a>
<a href="http://twitter.com/"><img src="img/twitter.png" alt="" width="85px" height="85px"  ></a>
<a href="https://www.instagram.com/"><img src="img/instagram.png" alt="" width="80px" height="80px" ></a>
</section>

<div class="container-card">
<div class="card">
	<div class="contenido-card"> <a href="#">Casa en venta- Tumbaco</a></div>
<figure>
	<img src="recursos/img/01.jpg">
</figure>
<div class="contenido-card">
	<h3>$145.100,00</h3>
	<p>Conjunto Residencial Malaquita, casa de venta en Tumbaco. Habitaciones: 3, Parquadero, Baños:2, Cocina, Sala, Terraza (135m2).</p>
</div>
</div>
<div class="card">
	<div class="contenido-card"> <a href="#">Departamento en venta- Conocoto</a></div>
<figure>
	<img src="recursos/img/02.jpg">
</figure>
<div class="contenido-card">
	<h3>$132.100,00</h3>
	<p>Conjunto Residencial Malaquita, casa de venta en Tumbaco. Habitaciones: 3, Parquadero, Baños:2, Cocina, Sala, Terraza (125m2).</p>
</div>
</div>
<div class="card">
	<div class="contenido-card"> <a href="#">Casa en venta- El Condado</a></div>
<figure>
	<img src="recursos/img/03.jpg">
</figure>
<div class="contenido-card">
	<h3>$142.350,00</h3>
	<p>Conjunto Residencial Malaquita, casa de venta en Tumbaco. Habitaciones: 3, Parquadero, Baños:2, Cocina, Sala, Terraza (150m2).</p>
</div>
</div>
<div class="card">
	<div class="contenido-card"> <a href="#">Casa en venta- Sangolquí</a></div>
	<figure>
		<img src="recursos/img/02.jpg">
	</figure>
	<div class="contenido-card">
		<h3>$127.400,00</h3>
<p>Conjunto Residencial Malaquita, casa de venta en Tumbaco. Habitaciones: 2, Parquadero, Baños:1, Cocina, Sala, (130m2).</p>
	</div>
	</div>
</div>

<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="./recursos/imagenes/Logo.png" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SERVICIOS</h2>
            <p>Alquiler</p>
            <p>Compra</p>
        </div>
        <div class="box">
          <h2>NOSOTROS</h2>
          <p>Beneficios</p>
          <p>Trayectoria</p>
      </div>
      <div class="box">
        <h2>CONTACTOS</h2>
        <p>Dirección</p>
        <p>Teléfono</p>
        <p>Email</p>
    </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2023 <b>Interfaces y Multimedia</b> - Todos los Derechos Reservados BienRaíz DCE.</small>
    </div>
</footer>



		
        <?php }else{ ?>
		
		<h2 align="center">Iniciar Sesion</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
		<audio class="Audio-1" src="recursos/audios/login.mp3" controls></audio>
			<form action="userAccount.php" method="post">
				<div class="ub1">&#9993; Ingresar email</div>
				<input type="email" name="email" placeholder="Ingresar Email" required="">
				<div class="ub1">&#128274; Ingresar contraseña</div>
				<input type="password" name="password" placeholder="Ingresar Contraseña" required="">
				<div class="send-button">
					<input type="submit" name="loginSubmit" value="Iniciar sesión">
				</div>
				<br><br><a href="forgotPassword.php">¿Olvidaste tu Contraseña?</a>
			</form>
            <p><a href="registration.php">Crear nuevo usuario</a></p>
		</div>
        <?php } ?>
	</div>
</body>
</html>