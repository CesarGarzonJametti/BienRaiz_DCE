<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/descripcion.css" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Emoji&display=swap" rel="stylesheet">

    <title>Descripción</title>

</head>
<body>
    <?php
        require("./layout/header.php");
    ?>
    <div class="contenedor">
        <iframe class="video_interactivo" src="./bienraiz_dce/index.html"></iframe>
        <div class="descripcion">
            <div class="detalles">
                <h2>Descripción Inmueble</h2>
                <ul>
                    <li>Provincia: Pichincha</li>
                    <li>Ciudad: Quito</li>
                    <li>Ubicación: Av. 10 de agosto y Colón.</li>
                    <li>No. Dormitorios: 3</li>
                    <li>Precio: 36000.00 usd</li>
                    <li>Superficie: 200 m2</li>
                    <li>Antiguedad: 12 años</li>
                    <li>Tipo vivienda: Departamento</li>
                </ul>
            </div>
            <div id="calendario">
                <div id="anterior" onclick="mesantes()">&lt</div>
                <div id="posterior" onclick="mesdespues()">&gt</div>
                <table id="diasc">
                  <tr id="fila0"><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>
                  <tr id="fila1"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                  <tr id="fila2"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                  <tr id="fila3"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                  <tr id="fila4"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                  <tr id="fila5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                  <tr id="fila6"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                </table>
                <div id="fechaactual" onclick="actualizar()"></div>
                <div class="hora">
                    <label id="titulo_hora" for="horario">Hola</label>
                    <select id="horario" name="horarios">
                        <option value="cita_1">08:00</option>
                        <option value="cita_2">09:00</option>
                        <option value="cita_3">10:00</option>
                        <option value="cita_4">11:00</option>
                        <option value="cita_5">12:00</option>
                        <option value="cita_6">14:00</option>
                        <option value="cita_7">15:00</option>
                    </select>
                </div>
            </div>
            <div id="bt_formulario">
                <a id="bt_agendar" class="clase_bt_formulario" href="../BienRaiz-DCE/agenda.php">Agendar <span class="emoji">📝</span></a>
                <a id="bt_regresar" class="clase_bt_formulario" href="../BienRaiz-DCE/alquiler.php">Regresar <span class="emoji">↩️<span></a>
            </div>
        </div>
    </div>
    <?php
        require("./layout/footer.php");
    ?>

    <script type="text/javascript" src="./js/calendario.js"></script>
</body>
</html>