<?php
session_start();
if(!empty($_SESSION['sessData'])){
	session_destroy();  
	header("Location: index.php");
} else{ ?>
		<link rel="stylesheet" href="style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
		<link rel="stylesheet" href="css/font/css/all.css">
		<link rel="stylesheet" type="text/css" href="style.css">
    	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

		<h1>BienRaiz DCE</h1>
		<br><center><img src="recursos/imagenes/GIF.gif" alt="" width="250px" height="170px"></center>
		<h2 align="center">Iniciar Sesion</h2>
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