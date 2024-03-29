<?php
function tirageAleatoire($min, $max) {
  return rand($min, $max);
}
function obtenirSuite() {
  $tirage1 = tirageAleatoire(0, 100);
  $tirage2 = tirageAleatoire(0, 100);
  $tirage3 = tirageAleatoire(0, 100);
  
  while (!($tirage1 % 2 === 0 && $tirage2 % 2 === 0 && $tirage3 % 2 === 1)) {
    $tirage1 = tirageAleatoire(0, 100);
    $tirage2 = tirageAleatoire(0, 100);
    $tirage3 = tirageAleatoire(0, 100);
  }
  
  return [$tirage1, $tirage2, $tirage3];
}
$suite = obtenirSuite();
echo "Suite obtenue : ";
echo implode(", ", $suite);
?>
