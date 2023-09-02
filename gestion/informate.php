<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PodoClear</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <script src=funciones.js></script>
</head>

<body>
    <!--navigation-->
    <header class="sticky">
        <a href="index.php" class="logo">PodoClear<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="index.php#banner" onclick="toggleMenu();">Inicio</a></li>
            <li><a href="index.php#acerca" onclick="toggleMenu();">Acerca de Dra.</a></li>
            <li><a href="informate.php" onclick="toggleMenu();">Informate</a></li>
            <li><a href="AgendarHora.php" onclick="toggleMenu();">Atencion</a></li>
            <li><a href="index.php#contacto" onclick="toggleMenu();">Contacto</a></li>
            <li><a href="Galeria.php" onclick="toggleMenu();">Galeria</a></li>
            <li>
                <?php if (isset($_SESSION['usuario'])) {
                    // Sesión activa, mostrar botón "Cerrar sesión"
                    echo '<a href="vista_medica.php" onclick="toggleMenu();">Apartado médico</a>';
                }
                ?>
            </li>
        </ul>
        <div>
            <?php


            if (isset($_SESSION['usuario'])) {
                // Sesión activa, mostrar botón "Cerrar sesión"
                echo '<button onclick="cerrar_sesion()">Cerrar sesión</button>';
            } else {
                // Sin sesión activa, mostrar botón "Iniciar sesión"
                echo '<button onclick="iniciar_sesion()" >Iniciar sesión</button>';
            }
            ?>
        </div>
    </header>
    <div class="hide"></div>
    <div>
        <h1 class="titulo">Problemas comúnes</h1>
    </div>
    <br>
    <br>
    <!--Body-->
    <div class=fila_1>
        <div class=carta-1>
            <div class="media">
                <img src="img/onicomicosis.jpg" alt="Generic placeholder image" class="imagen">
                <div class="media-body">
                    <h3 class="titulo">Uñas encarnadas</h3>
                    <p>Tener uñas encarnadas es una afección frecuente en la que una esquina de la uña o el costado de
                        esta en un dedo del pie crece de manera que se introduce en la piel. Esto provoca dolor, piel
                        inflamada, hinchazón y, algunas veces, una infección. Las uñas encarnadas suelen afectar el dedo
                        gordo del pie.

                        Generalmente, puedes cuidar las uñas encarnadas por tu cuenta. Si tienes un dolor intenso o que
                        se difunde, el proveedor de atención médica puede tomar medidas para aliviar tu malestar y
                        ayudarte a evitar complicaciones debido a uñas encarnadas.

                        Si tienes diabetes o alguna otra afección que disminuye la circulación de la sangre hacia los
                        pies, tienes un mayor riesgo de tener complicaciones debido a uñas encarnadas</p>
                </div>
            </div>
        </div>
        <div class="carta-2">
            <div class="media">
                <img src="img/pie de atleta.jpg" alt="Generic placeholder image" class="imagen">
                <div class="texto-2">
                    <h3 class="titulo">Pie de atleta</h3>
                    <p>El pie de atleta (tiña pedis) es una infección fúngica en la piel que, por lo general,
                        comienza
                        entre los dedos de los pies. Suele ocurrir en personas a las que les transpiran mucho los
                        pies
                        cuando usan zapatos ajustados.

                        Los signos y síntomas de pie de atleta incluyen un sarpullido escamoso y con picazón. La
                        afección es contagiosa y puede transmitirse a través de pisos, toallas o ropas contaminadas.

                        El pie de atleta está estrechamente relacionado con otras infecciones fúngicas como la tiña
                        y la
                        tiña inguinal. Puede tratarse con medicamentos antimicóticos, pero la infección a menudo
                        regresa.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="fila_1">
        <div class="carta-3">
            <div class="media">
                <img class="imagen" src="img/juanete.jpg" alt="Generic placeholder image">

                <div class="cuerpo-3">
                    <h3 class="titulo">Juanetes</h3>
                    Un juanete es una protuberancia ósea que se forma en la articulación en la base del dedo gordo del
                    pie. Ocurre cuando algunos de los huesos de la parte frontal del pie se salen de su lugar. Esto hace
                    que la punta del dedo gordo del pie apunte hacia los dedos más pequeños y obliga a que la
                    articulación en la base del dedo gordo sobresalga. La piel sobre el juanete puede estar enrojecida y
                    adolorida.

                    El uso de zapatos apretados y estrechos puede causar juanetes o empeorarlos. Los juanetes también se
                    pueden desarrollar como resultado de la forma del pie, una deformidad del pie o una enfermedad, como
                    la artritis.

                    Se pueden desarrollar juanetes más pequeños en la articulación del dedo pequeño del pie.
                </div>

            </div>
        </div>
        <div class="carta-4">
            <div class="media">
                <img class="imagen-4" src="img/verrugas.jpg" alt="Generic placeholder image">
                <div class="cuerpo-4">
                    <h3 class="titulo">verrugas Plantares</h3>
                    <p>Las verrugas plantares son tumores pequeños y ásperos en los pies. Suelen aparecer en la región
                        metatarsofalángica y los talones de los pies, las zonas que soportan mayor presión. Esta presión
                        también puede hacer que la verruga crezca hacia dentro bajo una capa de piel dura y gruesa
                        (callo).

                        A las verrugas plantares las causa el virus del papiloma humano (VPH). Este virus ingresa a
                        través de cortes pequeños o roturas en la planta de los pies.

                        La mayoría de las verrugas plantares no son un problema de salud grave y, a menudo, desaparecen
                        sin tratamiento, sobre todo en niños menores de 12 años. Para eliminar las verrugas más rápido,
                        puedes probar tratamientos de cuidado personal o consultar a un proveedor de atención médica.
                    </p>
                </div>
            </div>
        </div>

    </div>


</body>
<footer class="container-fluid" id="footer">
    <p class="logo-footer">
        PodoClear
    </p>
</footer>

</html>