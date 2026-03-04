<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tema 3 | Óscar Pozuelo Villamandos</title>
        <link rel="stylesheet" href="../webroot/css/fonts.css">
        <link rel="stylesheet" href="../webroot/css/all.min.css">
        <link rel="stylesheet" href="webroot/css/estilos.css"> 
        <link rel="stylesheet" href="webroot/css/estilosTabla.css"> 
    </head>
    <body>
        <header class="cabecera-principal">
            <div class="contenido-cabecera">
                <div class="identidad">
                    <a href="../index.html" style="text-decoration:none;">
                        <div class="logo-iniciales">ÓS</div>
                    </a>
                    <h1>Óscar Pozuelo Villamandos</h1>
                </div>
                <div class="curso-badge" style="background-color: #777BB4; color: white;">
                    Tema 3
                </div>
            </div>
        </header>
        <main id="Ejercicio3">
            <div id="titulo">3-Mostrar fecha y hora actual formateada en castellano (clase DateTime).</div>
            <?php
                /*
                 * @author Óscar Pozuelo Villamandos
                 * @since 04/03/2026
                 * 3-Mostrar fecha y hora actual formateada en castellano (clase DateTime).
                 * 
                 */
                $oFecha;
                date_default_timezone_set('Europe/Madrid');  
                setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
                $oFecha=new DateTime();
                echo("<h3>Fecha y hora actual.</h3><br>");
                echo'<p>Si se utiliza solo format() de DateTime los dias de la semana y los meses están inglés</p>';
                echo("<p>La fecha de hoy es :<span> " . $oFecha->format("l") . " " . $oFecha->format("d") . " de " . $oFecha->format("F") . " de " . $oFecha->format("o") . " y la hora es: " . $oFecha->format("H:i:s") . '</span></p>');
                //info para el parametro format : https://www.php.net/manual/es/datetime.format.php

                echo('<br><br><h3>Usando el timestamp de DateTime y strftime, los dias y los meses están en español</h3><br> ');

                echo "<p>La fecha de hoy es: <span>" . strftime("%A %d de %B de %Y", $oFecha->getTimestamp()) .
                " y la hora es: " . $oFecha->format("H:i:s") . '</span></p>';
            ?>
        </main>
        <footer class="pie-pagina">
            <div class="contenido-footer">
                <div class="texto-legal">
                    <p>2025-26 IES LOS SAUCES. ©Todos los derechos reservados.</p>
                    <p class="autor"><a href="https://oscarpozvil.ieslossauces.es" target="_blank">Óscar Pozuelo Villamandos.</a> Fecha de Actualización: 03-03-2026</p>
                </div>
                <div class="iconos-footer">
                    <a href="https://github.com/SrPozuelo/OPVDWESProyectoTema3" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="http://daw210.local.ieslossauces.es/OPVDWESProyectoTema3/indexProyectoTema3.html" title="Inicio"><i class="fa-solid fa-house"></i></a>
                    <a href="../indexProyectoTema3.html" title="Volver a Tema3"><i class="fa-solid fa-arrow-turn-up"></i></a>
                </div>
            </div>
        </footer>
    </body>
</html>