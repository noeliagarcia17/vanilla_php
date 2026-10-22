<?php
  //Ejercicio 1
  echo '<select name="promocion">';
  for ($anio = 2020; $anio <= 2025; $anio++) {
    echo '<option value="', $anio, '">', $anio, '</option>';
  }
  echo '</select>';

  //Ejercicio 2
  $horasCiclo    = 2000;
  $horasPorAnio  = 700;
  $horasCursadas = 0;
  $anios         = 0;

  while ($horasCursadas < $horasCiclo) {
    $horasCursadas += $horasPorAnio;
    $anios++;
  }

  echo '<p>Años necesarios: ', $anios, '</p>';   // 3

  //Ejercicio 3
  $curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
  ];

  echo '<ul>';
  foreach ($curriculos as $curriculo) {
    echo '<li class="curriculo">', $curriculo['alumno'], ' — ', $curriculo['ciclo'], '</li>';
  }
  echo '</ul>';

  //Ejercicio 4
  $curriculo = ['alumno' => 'Ana López', 'ciclo' => 'DAW', 'video' => 'https://youtu.be/curriculo1'];

  echo '<dl>';
  foreach ($curriculo as $campo => $valor) {
    echo '<dt>', $campo, '</dt><dd>', $valor, '</dd>';
  }
  echo '</dl>';
  
?>

<!--Ejercicio 5 -->
<?php
   $curriculosPublicados = [
     ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
     ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
     ['alumno' => 'Pablo Ruiz',   'ciclo' => 'DAW',  'video' => ''], //No aparece en el código fuente
     ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
   ];
 ?>
 <table>
   <tr><th>Alumno</th><th>Vídeo</th></tr>
   <?php foreach ($curriculosPublicados as $curriculo): ?>
     <?php if ($curriculo['video'] === '') { continue; } ?>
     <tr class="con-video">
       <td><?= $curriculo['alumno'] ?></td>
       <td><a href="<?= $curriculo['video'] ?>">vídeo</a></td>
     </tr>
   <?php endforeach; ?>
 </table>