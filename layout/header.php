

<header>
    <a href="../BienRaiz-DCE/index.php"><img class="logo" width="251" height="93" src="./recursos/imagenes/Logo.png" alt="BienRaíz DCE"></a>
</header>
 <!--::::Barra Menú::::::-->

 <?php
	session_start();
	$estado = "Inicio Sesión";
	$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
	if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
		include 'user.php';
		$user = new User();
		$conditions['where'] = array(
			'id' => $sessData['userID'],
		);
		$conditions['return_type'] = 'single';
		$userData = $user->getRows($conditions);
		$estado = "Cerrar Sesión";
	?>
    	<h3 class="usuario">Bienvenid@ <?php echo $userData['first_name']; ?></h3>
	<?php } ?>

 <ul class="menu">
			<li>
				<a href="../BienRaiz-DCE/index.php">Inicio</a>
			</li>
			<li>
				<a href="../BienRaiz-DCE/empresa.php">Empresa</a>
			</li>
			<li>
				<a href="../BienRaiz-DCE/alquiler.php">Inmuebles</a>
			</li>
			<li>
				<a href="../BienRaiz-DCE/contacto.php">Contacto</a>
			</li>
      <li>
				<a href="#"><span class="#"></span> Mi Perfil</a>
        <ul class="menu-vertical">
					<li><a href="../BienRaiz-DCE/index2.php"><?php echo $estado; ?></a></li>
					<li><a href="../BienRaiz-DCE/agenda.php">Mi Agenda</a></li>
				</ul>
			</li>
		</ul>

<div id="crearListaRRSS">
    <a href="https://www.facebook.com/"> <img src="./recursos/img/facebook.gif" alt="" width="60px" height="60px" ></a>
    <a href="http://twitter.com/"><img src="./recursos/img/twitter.gif" alt="" width="60px" height="60px"  ></a>
    <a href="https://www.instagram.com/"><img src="./recursos/img/instagram.gif" alt="" width="60px" height="60px" ></a>
</div>