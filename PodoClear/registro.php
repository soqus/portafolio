<?php
session_start();
include 'php/conexion_be.php';
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("por favor inicia sesion primero");
        window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PodoClear</title>
    <link rel="stylesheet" href="registro.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src=funciones.js></script>
</head>

<body>
    <!--navigation-->
    <header class="sticky">
        <a href="#" class="logo">PodoClear<span>.</span></a>
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
    <div class="menu_lateral">
        <ul>
            <li><a href="horas_agendadas.php">Horas Agendadas</a></li>
            <li><a href="pacientes.php" class="boton-lateral">Pacientes</a></li>
            <li><a href="registro.php">Registrar Usuario</a></li>
        </ul>
    </div>
    <div class="table_container">
        <div class="card">
            <div class="register-section">
                <h2>Registrar nuevo usuario</h2>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">
                    <input type="email" class="input-field" name="email" placeholder="Aquí tu email">
                    <input type="password" class="input-field" name="pass" placeholder="Aquí tu password">
                    <button>Registrar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>