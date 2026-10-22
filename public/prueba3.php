<?php
  $linea = fgets(STDIN);
  $datos = explode(" ", trim($linea));
  if ($datos[0] == $datos[1]) {
    echo 'Pareja de ', $datos[0];
  } elseif ($datos[0] >= $datos[1]) {
    echo 'El mayor valor es ', $datos[0];
  } else {
    echo 'El mayor valor es ', $datos[1];
  }
?>

<?php
  $linea = fgets(STDIN);
  $datos = explode(" ", trim($linea));
  
  if ($datos[0] == $datos[1]) {
    echo 'Ha habido empate a ', $datos[0];
  } elseif ($datos[0] >= $datos[1]) {
    echo 'El jugador ganador es el 1 con ', $datos[0];
  } else {
    echo 'El jugador ganador es el 2 con ', $datos[1];
  }
?>



<?php
  $linea = fgets(STDIN);
  $datos = explode(" ", trim($linea));
  

  switch ($datos[0]) {
    case '+':
      echo '<p>', $datos[1], ' + ', $datos[2], ' = ', $datos[1]+$datos[2], '</p>';
      break;
    case '-':
      echo '<p>', $datos[1], ' - ', $datos[2], ' = ', $datos[1]-$datos[2], '</p>';
      break;
    case 'x':
      echo '<p>', $datos[1], ' x ', $datos[2], ' = ', $datos[1]*$datos[2], '</p>';
      break;
    case ':':
      echo '<p>', $datos[1], ' : ', $datos[2], ' = ', $datos[1]/$datos[2], '</p>';
      break;
  }

 
?>

<?php
  $linea = fgets(STDIN);
  $datos = explode(" ", trim($linea));

  $resultado = 0;
  $i = 0;

  while ($datos[$i] != 0) {
    $resultado += $datos[$i];
    $i++;
    
  }

  echo '<p>Se han sumado ', $i , ' números, dando como resultado un total de ', $resultado, '</p>';
?>

<?php
  $linea = fgets(STDIN);
  $datos = explode(" ", trim($linea));

  //$numFila = $datos[0];
  //$numCol = $datos[1];
?>
<table border="solid 1px">
<?php for ($f = 1; $f <= $datos[0]; $f++) : ?>
    <tr>
<?php for ($c = 1; $c <= $datos[1]; $c++) : ?>
        <td></td>
<?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>


<?php
  function suma(array $array): int
  {
    $sumaRes = 0;
    foreach ($array as $num) {
      $sumaRes += $num;
    }
    
    return $sumaRes;
  }

  function media(array $array): float
  {
      return suma($array)/count($array);
  }

  while($linea = fgets(STDIN)){
    $datos = explode(" ", trim($linea));
    $datosNum = array_slice($datos, 1);
    if (count($datosNum) <= 1) {
        echo '<p>(Error) No dispongo de suficientes argumentos.</p>
';
    } else {
      switch ($datos[0]) {
        case 'suma':
          $resultado = suma($datosNum);
          echo '<p>La suma de los números es: ', $resultado, '</p>
';
          break;
        case 'media':
          $resultado = media($datosNum);
          echo '<p>La media de los números es: ', $resultado, '</p>
';
          break;
        default:
          echo '<p>(Error) Operación no permitida</p>
';
      }
    }
 }
?>