<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./css/style.css" rel="stylesheet" type="text/css">

    <title>Alquiler</title>

</head>

<body>
    <?php
        require("./layout/header.php");
    ?>

    <main>
    <center>    
        <audio class="Audio-2" src="recursos/audios/guia.mp3" controls></audio>
    </center>
        <section>
            <div class="formulario">
                <form id="filtrar" onsubmit="" method="post">
                    <label for="provincia">Provincias</label><br>
                    <select id="provincia" name="provincias">
                        <option value="azuay">Azuay</option>
                        <option value="guayas">Guayas</option>
                        <option value="pichincha">Pichincha</option>
                    </select>

                    <br><label for="ciudad">Ciudad</label><br>
                    <select id="ciudad" name="ciudades"></select>
                    
                    <br><label for="ubicacion">Ubicación</label><br>
                    <select id="ubicacion" name="ubicaciones">
                        <option value="centro">Centro</option>
                        <option value="norte">Norte</option>
                        <option value="sur">Sur</option>
                    </select>

                    <br><label for="no_dormitorios">No. Dormitorios</label><br>
                    <select id="no_dormitorios" name="no_dormitorios">
                        <option value="uno">1</option>
                        <option value="dos">2</option>
                        <option value="tres">3</option>
                    </select>
                    
                    <br><label for="precio">Precio</label><br>
                    <select id="precio" name="precios">
                        <option value="uno">1000 a 2500</option>
                        <option value="dos">2501 a 4000</option>
                        <option value="tres">4001 a 6000</option>
                        <option value="cuatro">6001 a 8000</option>
                        <option value="cinco">8001 a 10000</option>
                    </select>

                    <br><label for="superficie">Superficie</label><br>
                    <select id="superficie" name="superficies">
                        <option value="uno">100 m2</option>
                        <option value="dos">200 m2</option>
                    </select>
                    <br><label for="estacionamiento">Estacionamiento</label><br>
                    <select id="estacionamiento" name="estacionamientos">
                        <option value="uno">1</option>
                    </select>
                    <br><label for="antiguedad">Antiguedad</label><br>
                    <select id="antiguedad" name="antiguedad">
                        <option value="uno">1 año</option>
                    </select>
                    <br><label for="tipo_vivienda">Tipo Vivienda</label><br>
                    <select id="tipo_vivienda" name="tipo_viviendas">
                        <option value="casa">Casa</option>
                        <option value="departamento">Departamento</option>
                    </select>
                </form>
                <a id="borrar_filtros" href="#">Borrar filtros</a><br>
                <button id="bt_filtrar" type="submit" form="filtrar">Aceptar</button>
            </div>
            <div class="inmuebles">
                <div class="inmueble">
                    <img src="./recursos/img/im_360.jpg" alt="imágen 360 grados">
                    <div class="ver_mas">
                        <p>Departamento en alquiler<br>
                        Provincia: Pichincha<br>
                        Ciudad: Quito<br>
                        Ubicación: Av. 10 de agosto</p>
                        <a class="a_ver_mas" href="../BienRaiz-DCE/descripcion.php">Ver más</a>
                    </div>
                </div>

                <div class="inmueble">
                    <img src="./recursos/img/im_360_2.jpg" alt="imágen 360 grados">
                    <div class="ver_mas">
                        <p>Departamento en alquiler<br>
                        Provincia: Guayas<br>
                        Ciudad: Guayaquil<br>
                        Ubicación: Calle 29</p>
                        <a class="a_ver_mas" href="../BienRaiz-DCE/descripcion.php">Ver más</a>
                    </div>
                </div>

                <div class="inmueble">
                    <img src="./recursos/img/im_360_3.jpg" alt="imágen 360 grados">
                    <div class="ver_mas">
                        <p>Departamento en alquiler<br>
                        Provincia: Azuay<br>
                        Ciudad: Cuenca<br>
                        Ubicación: Calle Gran Colombia</p>
                        <a class="a_ver_mas" href="../BienRaiz-DCE/descripcion.php#">Ver más</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        require("./layout/footer.php");
    ?>
</body>
</html>