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
        <main id="Ejercicio1">
            <div id="titulo">1-Inicializar variables de distintos tipos de datos básicos (string, int, float, bool) y mostrarlos (echo, print, printf, print_r, var_dump).</div>
            <?php
                /**
                * @author: Óscar Pozuelo Villamandos
                * @since: 03/03/2026
                * 1-Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump).
                */
                $sCadena="¡Hola mundo!";
                $iEntero=1425;
                $fDecimal=98.15;
                $bBooleano=false;
                $aDatos=[$sCadena,$iEntero,$fDecimal,$bBooleano];
                echo("<h3>Usando echo</h3>");
                echo('<p>La variable $sCadena es de tipo <span class="tipo">"'.gettype($sCadena).'"</span> y contiene el valor <span class="valor">'.$sCadena.'</span></p><br>');
                echo('<p>La variable $iEntero es de tipo <span class="tipo">"'.gettype($iEntero).'"</span> y contiene el valor <span class="valor">'.$iEntero.'</span></p><br>');
                echo('<p>La variable $fDecimal es de tipo <span class="tipo">"'.gettype($fDecimal).'"</span> y contiene el valor <span class="valor">'.$fDecimal.'</span></p><br>');
                echo('<p>La variable $bBooleano es de tipo <span class="tipo">"'.gettype($bBooleano).'"</span> y contiene el valor <span class="valor">'.$bBooleano.'</span></p><br>');

                print("<h3>Usando print</h3>");
                print('La variable $scadena es de tipo <span class="tipo">"'.gettype($sCadena).'"</span> y contiene el valor <span class="valor">'.$sCadena.'</span><br>');
                print('La variable $ientero es de tipo <span class="tipo">"'.gettype($iEntero).'"</span> y contiene el valor <span class="valor">'.$iEntero.'</span><br>');
                print('La variable $fdecimal es de tipo <span class="tipo">"'.gettype($fDecimal).'"</span> y contiene el valor <span class="valor">'.$fDecimal.'</span><br>');
                print('La variable $bBooleano es de tipo <span class="tipo">"'.gettype($bBooleano).'"</span> y contiene el valor <span class="valor">'.($bBooleano?"true":"false").'</span><br>');

                printf("<h3>Usando printf</h3>");
                printf("La variable %s es de tipo <span class='tipo'>%s</span> y tiene el valor <span class='valor'>%s</span> <br>", '$texto', gettype($sCadena), $sCadena);
                printf("La variable %s es de tipo <span class='tipo'>%s</span> y tiene el valor <span class='valor'>%d</span><br>", '$entero', gettype($iEntero), $iEntero);
                printf("La variable %s es de tipo <span class='tipo'>%s</span> y tiene el valor <span class='valor'>%.2f</span> <br>", '$decimal', gettype($fDecimal), $fDecimal);
                printf("La variable %s es de tipo <span class='tipo'>%s</span> y tiene el valor <span class='valor'>%s</span> <br>", '$booleano', gettype($bBooleano), ($bBooleano?"true":"false"));

                print_r("<h3>Usando print_r</h3>");
                print_r($aDatos,false);
                echo("<br>");
                print_r($aDatos,true);
                echo("<br>");
                print_r('La variable $scadena es de tipo <span class="tipo">'.gettype($sCadena).'</span> y tiene el valor <span class="valor">'.$sCadena.'</span><br>');
                print_r('La variable $ientero es de tipo <span class="tipo">'.gettype($iEntero).'</span> y tiene el valor <span class="valor">'.$iEntero.'</span><br>');
                print_r('La variable $fdecimal es de tipo <span class="tipo">'.gettype($fDecimal).'</span> y tiene el valor <span class="valor">'.$fDecimal.'</span><br>');
                print_r('La variable $booleano es de tipo <span class="tipo">'.gettype($bBooleano).'</span> y tiene el valor <span class="valor">'.($bBooleano?"true":"false").'</span><br>');

                echo("<h3>Usando var_dump</h3>");
                var_dump($sCadena);echo("<br>");
                var_dump($iEntero);echo("<br>");
                var_dump($fDecimal);echo("<br>");
                var_dump($bBooleano);echo("<br>");
            ?>
        </main>
        <footer class="pie-pagina">
            <div class="contenido-footer">
                <div class="texto-legal">
                    <p>2025-26 IES LOS SAUCES. ©Todos los derechos reservados.</p>
                    <p class="autor"><a href="https://oscarpozvil.ieslossauces.es" target="_blank">Óscar Pozuelo Villamandos.</a> Fecha de Actualización: 23-02-2026</p>
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