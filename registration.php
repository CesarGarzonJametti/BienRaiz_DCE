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
	<link href="css/login.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
    <title>Crear una Nueva Cuenta</title>
    
</head>
<body>
    <h1>Crear una Nueva Cuenta</h1>
	<a href="index.php"><h1><div class="ub1">&#129092; Atrás</div></h1></a>
	<div class="container">
	<img src="recursos/imagenes/Logo.png">

		<h2>Datos personales</h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<div class="ub1">&#128100; Ingresar Nombre</div>
				<input type="text" name="first_name" placeholder="Nombre" required="">
				<div class="ub1">&#128100; Ingresar Apellido</div>
				<input type="text" name="last_name" placeholder="Apellido" required="">
				<div class="ub1">&#9993; Ingresar Email</div>
				<input type="email" name="email" placeholder="mail" required="">
				<div class="ub1">&#128706; Ingresar C.C</div>
				<input type="text" name="CC" placeholder="C.C." required="">
				<div class="ub1">&#128222; Ingresar Telefonos</div>
				<input type="text" name="phone" placeholder="Número Telefónico" required="">
				<div class="ub1">&#128272; Ingresar Contraseña</div>
				<input type="password" name="password" placeholder="Contraseña" required="">
				<input type="password" name="confirm_password" placeholder="Confirma tu Contraseña" required="">
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="Crear Cuenta">
				</div>
			</form>
		</div>
	</div>
</body>
</html>