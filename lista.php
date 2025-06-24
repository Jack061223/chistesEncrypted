
<?php
$chistes = [
  "Barrera Barrera Roberto" => "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!",
  "Espinoza Reyes Jack Ricardo" => "¿Cómo se dice pañuelo en japonés? Saka-moko.",
  "Flores Tapia Sebastián" => "¿Qué le dice un jardinero a otro? ¡Disfrutemos mientras podamos!",
  "Gutiérrez Barragán Miguel Ángel" => "¿Por qué los pájaros no usan Facebook? Porque ya tienen Twitter.",
  "Ochoa Morales Gonzalo" => "¿Por qué el libro fue al hospital? Porque tenía las hojas en blanco.",
  "Neri Zárate José" => "¿Qué hace un pez? ¡Nada!",
  "Villareal Mateos Edy" => "¿Por qué el tomate se sonrojó? Porque vio al otro desnudo."
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de chistes</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <div class="contenedor">
    <h1>Chistes del equipo</h1>
    <dl>
      <?php foreach ($chistes as $nombre => $chiste): ?>
        <dt><strong><?= $nombre ?></strong></dt>
        <dd><?= $chiste ?></dd>
      <?php endforeach; ?>
    </dl>
    <p><a href="index.html">Volver al formulario</a></p>
  </div>
</body>
</html>
