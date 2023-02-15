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
    <title>Cambiar contraseña</title>
	<link href="css/login.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

</head>
<body>
    <h1>Cambiar la contraseña</h1>
	<div class="container">
	<img class="logo" width="251" height="93" src="recursos/imagenes/Logo.png" alt="BienRaíz DCE">
		<h2>Cambiar la contraseña</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<div class="ub1">&#128274; Nueva contraseña</div>
				<input type="password" name="password" placeholder="Nueva contraseña" required="">
				<div class="ub1">&#128274; Confirmar contraseña</div>
				<input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required="">
				<div class="send-button">
					<input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
					<input type="submit" name="resetSubmit" value="Resetea Contraseña">
				</div>
			</form>
		</div>
	</div>
</body>
</html>