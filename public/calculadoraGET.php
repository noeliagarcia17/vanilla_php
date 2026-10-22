<!DOCTYPE HTML>
<!--
    Identity by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Identity by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="Referrer" content="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <section id="main">
                        <header>
                            <span class="avatar"><img src="https://es.calcuworld.com/wp-content/uploads/sites/2/2013/02/matematicas-150x150.png" alt="" /></span>
                            <h2>Calculadora B&aacute;sica</h2>
                            <form name="calculator">
                            <!-- Escribe el resultado como valor de la propiedad value -->
                                <input type="textfield" name="ans" value="<?= $operacion ?>">
                                <br>
                                <input type="button" value="1">
                                <input type="button" value="2">
                                <input type="button" value="3">
                                <input type="button" value="+">
                                <br>
                                <input type="button" value="4">
                                <input type="button" value="5">
                                <input type="button" value="6">
                                <input type="button" value="-">
                                <br>
                                <input type="button" value="7">
                                <input type="button" value="8">
                                <input type="button" value="9">
                                <input type="button" value="*">
                                <br>
                                <input type="button" value="0">
                                <input type="reset" value="c">
                                <input type="button" value="/">
                                <input type="button" value="=">
                            </form>

<?php 
function suma(array $array): int
{
    $sumaRes = 0;
    foreach ($array as $num) {
    $sumaRes += $num;
    }
    
    return $sumaRes;
}

function resta(array $array): int
{
    $sumaRes = 0;
    foreach ($array as $num) {
    $sumaRes -= $num;
    }
    
    return $sumaRes;
}

function multi(array $array): int
{
    $sumaRes = 0;
    foreach ($array as $num) {
    $sumaRes *= $num;
    }
    
    return $sumaRes;
}

function div(array $array): int
{
    $sumaRes = 0;
    foreach ($array as $num) {
    $sumaRes /= $num;
    }
    
    return $sumaRes;
}

$datos = $operacion
$datos = explode(" ", trim($datos));
$datosNum = array_slice($datos, 1);

switch ($datos[1]) {
        case '+':
          $operacion = suma($datosNum);
          echo $operacion;
          break;
        
        case '-':
          $operacion = resta($datosNum);
          echo $operacion;
          break;
        
        case '*':
        $operacion = multi($datosNum);
        echo $operacion;
        break;

        case '/':
        $operacion = div($datosNum);
        echo $operacion;
        break;

        default:
          echo '<p>(Error) Operación no permitida</p>
';
      }
?>
                            
                        </header>

                        <footer>
                            <ul class="icons">
                            </ul>
                        </footer>
                    </section>

                <!-- Footer -->
                    <footer id="footer">
                        <ul class="copyright">
                            <li>Copyright Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </footer>

            </div>

        <!-- Scripts -->
        <!-- Curso 2024/2025 -->

            <script>
                if ('addEventListener' in window) {
                    window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
                    document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
                }
            </script>

    </body>
</html>
