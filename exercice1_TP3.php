<?php

function estArmstrong($nombre) {
  $sommeCubes = 0;
  while ($nombre > 0) {
    $chiffre = $nombre % 10;
    $sommeCubes += $chiffre * $chiffre * $chiffre;
    $nombre = (int)($nombre / 10);
  }
  return $sommeCubes === $nombre;
}

echo "<ul>";
for ($i = 1; $i < 1000; $i++) {
  if (estArmstrong($i)) {
    echo "<li>$i</li>";
  }
}
echo "</ul>";

?>
