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
    <title>BienRaiz DCE</title>
   
	
</head>
<style>
p{
	text-align:justify;
	margin: 30px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:45px
	color: black;
}

h2 {
  text-align: center;
  font-size:50px
  color: black;
}

@font-face{
    font-family: themillion;
    src: url(css/car.ttf);
 }
 h1{
    font-family: themillion;
	font-size:120px
 }

 a{
    font-family: themillion;
	font-size:30px
 }
 

</style>
<body>
    <h1>Mi Perfil</h1>
    <a href="index.php"><h3><div class="ub1">&#129092; Atrás</div></h3></a>
	<img class="logo" width="251" height="93" src="recursos/imagenes/Logo.png" alt="BienRaíz DCE">
	<div class="container">
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

        <h2 style="color:DodgerBlue;">Bienvenid@ BienRaizDCE <?php echo $userData['first_name']; ?>!</h2>
        <a href="userAccount.php?logoutSubmit=1" class="logout">Cerrar Sesión</a>
		<div class="regisFrm">
			<p style="color:black;"><b>Nombre: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
            <p style="color:black;"><b>E-mail: </b><?php echo $userData['email']; ?></p>
            <p style="color:black;"><b>Teléfono: </b><?php echo $userData['phone']; ?></p>
		</div>
       <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

        <?php } ?>
	</div>
</body>
</html>