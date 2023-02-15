<!doctype html>
<html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <link href="css/contacto.css" rel="stylesheet" type="text/css">
            <link href="./css/style.css" rel="stylesheet" type="text/css">

            <title>CONTACTANOS</title>
         </head>
        
        <style>
        .parrafo_contacto {
            margin: 22px;
            font-family: Tahoma, Verdana, sans-serif;
        }
        
        .titulo_contacto {
            margin: 50px;
            font-family: Tahoma, Verdana, sans-serif;
            font-size:20px;
            font-weight:bold; 
        }

        .contacto {
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
        }

        .formulario_2 {
            padding: 15px;
        }


        </style>


        <body>	 
		
        <?php
        	require("./layout/header.php");
    	?>            
        <center><h1>CONTACTANOS</h1></center>
        
        <div class="contacto">

         <div class="gif">
            <img src="recursos/imagenes/PGIF.gif" alt="" width="700px">
         </div>

            <div class="contact_form">
                
                <div class="formulario">			
              
                        <h2 class="titulo_contacto">Déjanos tus dudas o comentarios, y con gusto nos contactaremos lo mas pronto posible</h2>  
                        <p class="parrafo_contacto">
                            Dirección: Av. Gral. Rumiñahui S/N, Sangolquí 171103
                            Teléfono: +593 – 998113523
                            E-mail: bienraiz.dce@gmail.com
                        </p>            


                        <form class="formulario_2" action="correo.php" method="post">
  
                            <div class="ub1">&#128100; Ingresar Nombre:</div>                    
                            <label for="name"></label>
                            <input type="text" id="name" name="name"><br><br>

                            <div class="ub1">&#64; Ingresar Email:</div>
                            <label for="email"></label>
                            <input type="email" id="email" name="email"><br><br>

                            <div class="ub1">&#128389; Mensaje:</div>
                            <label for="message"></label>
                            <textarea id="message" name="message"></textarea><br><br>

                            <input type="submit" name="submit" value="Enviar">
                        </form>
                </div>	
            </div>
        </div>
	

		<?php
        	require("./layout/footer.php");
    	?>
        
        </body>
        </html>
        