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

    <title>Olvido su contraseña</title>
    
</head>
<body>
<img class="logo" width="251" height="93" src="recursos/imagenes/Logo.png" alt="BienRaíz DCE">
	<a href="index.php"><h1><div class="ub1">&#129092; Atrás</div></h1></a>
		<div class="container">
	
		<h2>Ingresa tu email para crear una nueva Contraseña</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">

		<div class="ub1">&#128231; Ingresa tu email</div>

			<form action="userAccount.php" method="post">
				<input type="email" name="email" placeholder="Ingresar Email" required="">
				<div class="send-button">
					<input type="submit" name="forgotSubmit" value="Continuar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>