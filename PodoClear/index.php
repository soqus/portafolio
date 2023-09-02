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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <script src=funciones.js></script>
</head>

<body>
    <!--navigation-->
    <header class="sticky">
        <a href="#" class="logo">PodoClear<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="#banner" onclick="toggleMenu();">Inicio</a></li>
            <li><a href="#acerca" onclick="toggleMenu();">Acerca de Dra.</a></li>
            <li><a href="informate.php" onclick="toggleMenu();">Informate</a></li>
            <li><a href="AgendarHora.php" onclick="toggleMenu();">Atencion</a></li>
            <li><a href="#contacto" onclick="toggleMenu();">Contacto</a></li>
            <li><a href="Galeria.php" onclick="toggleMenu();">Galeria</a></li>
            <li><?php if (isset($_SESSION['usuario'])) {
                // Sesión activa, mostrar botón "Cerrar sesión"
                echo '<a href="vista_medica.php" onclick="toggleMenu();">Apartado médico</a>';
            }
            ?></li>
            
        </ul>
        <div>
            <?php

            if(isset($_SESSION['usuario'])) {
                // Sesión activa, mostrar botón "Cerrar sesión"
                echo '<button onclick="cerrar_sesion()">Cerrar sesión</button>';
            } else {
                // Sin sesión activa, mostrar botón "Iniciar sesión"
                echo '<button onclick="iniciar_sesion()" >Iniciar sesión</button>';
            }
            ?>
        </div>
    </header>
    <!--Banner-->
    <section class="banner" id="banner">
        <div class="content">
            <h2>Reserva tu consulta</h2>
            <p>Cuida tus pies y mejora tu calidad de vida agendando una consulta con nuestra podóloga. ¡Reserva ahora y da el primer paso hacia una caminata saludable!</p>
            <a href="AgendarHora.php" class="btn">Agenda tu hora</a>
        </div>
    </section>
    <!--About-->
    <section class="about" id="acerca">
        <div class="fila">
            <div class="colu50">
                <h2 class="tituloText"><span>A</span>cerca de Dra. Angela R.</h2>
                <p>Nuestra podóloga es una profesional altamente capacitada y comprometida en el cuidado de los pies. Con más de 5 años de experiencia en el campo, ha atendido a pacientes de todas las edades con diversos problemas podológicos.
                    <br><br> Se graduó en la Universidad de Viña del Mar con honores, y desde entonces ha trabajado en varios hospitales, clínicas y centros de salud. Su trayectoria en el campo de la podología la ha llevado a desarrollar un enfoque integral
                    y personalizado en cada consulta, adaptándose a las necesidades individuales de sus pacientes.
                    <br><br> Nuestra podóloga mantiene una formación continua en las últimas técnicas y tratamientos, y utiliza equipos y herramientas de última generación en su consulta. Su enfoque holístico la hace abordar el tratamiento no solo de
                    los síntomas, sino también de las causas subyacentes de las afecciones podológicas.
                    <br><br>Con una amplia gama de habilidades, nuestra podóloga ofrece tratamientos para una variedad de problemas podológicos, como uñas encarnadas, callos, hongos, deformidades de los pies y muchos más. Ella también brinda asesoramiento
                    sobre cómo mantener una buena salud podológica en el futuro.
                    <br><br>Además de su experiencia clínica, nuestra podóloga es una persona cálida y empática que se preocupa profundamente por sus pacientes. Ella cree que una buena relación médico-paciente es esencial para lograr un buen resultado
                    del tratamiento.
                </p>
            </div>
            <div class="colu51">
                <div class="imgBx">
                    <img src="img/pexels-cedric-fauntleroy-4270088.jpg" alt="doctora">
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contacto">
        <h2 class="tituloText"><span>C</span>ontáctanos</h2>
        <p>Si tienes dudas o deseas mas información acerca de nuestros servicios e instalaciones, escribenos.</p>
        <div class="container">
            <form id="form" class="form">
                <div class="form-control">
                    <label for="username">Nombre</label>
                    <input type="text" placeholder="Nombre" id="username" autocomplete="off" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" placeholder="ejemplo@email.com" id="email" autocomplete="off" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="comentario">Comentario</label>
                    <textarea name="comentarios" rows="10" cols="40" placeholder="Comentarios" id="comentario"></textarea>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <button class="btn">Enviar</button>
            </form>
        </div>
    </section>
    <div class="copyrightText">
        <p>copyright 2023 <a href="#">PodoClear</a>. Todos los derechos reservados </p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
</body>

</html>
