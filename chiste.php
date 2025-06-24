
<?php
$chistes = [
  "barrera" => "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!",
  "espinoza" => "¿Cómo se dice pañuelo en japonés? Saka-moko.",
  "flores" => "¿Qué le dice un jardinero a otro? ¡Disfrutemos mientras podamos!",
  "guitierrez" => "¿Por qué los pájaros no usan Facebook? Porque ya tienen Twitter.",
  "ochoa" => "¿Por qué el libro fue al hospital? Porque tenía las hojas en blanco.",
  "neri" => "¿Qué hace un pez? ¡Nada!",
  "villareal" => "¿Por qué el tomate se sonrojó? Porque vio al otro desnudo."
];

$integrante = $_GET['integrante'] ?? '';

echo '<link rel="stylesheet" href="estilos.css">';
echo '<div class="contenedor">';

if (array_key_exists($integrante, $chistes)) {
    echo "<h1>Chiste de " . ucfirst($integrante) . "</h1>";
    echo "<p>{$chistes[$integrante]}</p>";
} else {
    echo "<p>Integrante no válido.</p>";
}

echo '<p><a href="index.html">Volver</a></p>';
echo '</div>';
?>
