<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/agenda.css" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Emoji&display=swap" rel="stylesheet">

    <title>Agenda</title>
    
</head>
<body>
    <?php
        require("./layout/header.php");
    ?>

    <div class="contenedor">
        <div class="cita">
            <img class="im_inmueble" src="./recursos/img/im_360.jpg" alt="BienRaiz DCE">
            <div class="detalle">
                <h2>Departamento en Alquiler - Quito</h2>
                <p>La carolina, 3 dormitorios, 2 baños, cocina, sala, parqueadero, terraza, 200m2, 250 usd.</p>
            </div>
            <div class="bt_formulario">
                <a class="clase_bt_formulario modificar">Modificar <span class="emoji">✏️</span></a>
                <a class="clase_bt_formulario eliminar">Eliminar <span class="emoji">🗑️</span></a>
            </div>
        </div>

        <div class="cita">
            <img class="im_inmueble" src="./recursos/img/im_360_2.jpg" alt="BienRaiz DCE">
            <div class="detalle">
                <h2>Departamento en Venta - Guayaquil</h2>
                <p>Garay, 3 dormitorios, 2 baños, cocina, sala, parqueadero, terraza, 200m2, 250 usd.</p>
            </div>
            <div class="bt_formulario">
                <a class="clase_bt_formulario modificar">Modificar <span class="emoji">✏️</span></a>
                <a class="clase_bt_formulario eliminar">Eliminar <span class="emoji">🗑️</span></a>
            </div>
        </div>

        <div class="cita">
            <img class="im_inmueble" src="./recursos/img/im_360_3.jpg" alt="BienRaiz DCE">
            <div class="detalle">
                <h2>Casa en Alquiler - Guayaquil</h2>
                <p>San Pedro Lomas, 3 dormitorios, 2 baños, cocina, sala, parqueadero, terraza, 200m2, 250 usd.</p>
            </div>
            <div class="bt_formulario">
                <a class="clase_bt_formulario modificar">Modificar <span class="emoji">✏️</span></button>
                <a class="clase_bt_formulario eliminar">Eliminar <span class="emoji">🗑️</span></a>
            </div>
        </div>

        <div class="cita">
            <img class="im_inmueble" src="./recursos/img/im_360.jpg" alt="BienRaiz DCE">
            <div class="detalle">
                <h2>Casa en Venta - Quito</h2>
                <p>Carcelén, 3 dormitorios, 2 baños, cocina, sala, parqueadero, terraza, 200m2, 250 usd.</p>
            </div>
            <div class="bt_formulario">
                <a class="clase_bt_formulario modificar">Modificar <span class="emoji">✏️</span></a>
                <a class="clase_bt_formulario eliminar">Eliminar <span class="emoji">🗑️</span></a>
            </div>
        </div>
    </div>

    <?php
        require("./layout/footer.php");
    ?>
</body>
</html>