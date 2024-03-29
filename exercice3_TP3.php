<?php

function genererNombreAleatoire() {
  return rand(100, 999);
}

function obtenirNombreN($n) {
  $nombre = genererNombreAleatoire();
  $compteur = 0;
  while ($nombre != $n) {
    $nombre = genererNombreAleatoire();
    $compteur++;
  }
  return $compteur;
}

$n = genererNombreAleatoire();

$nombreEssais = obtenirNombreN($n);

echo "Nombre N : $n" . PHP_EOL;
echo "Nombre d'essais : $nombreEssais" . PHP_EOL;
?>

<?php

function genererNombreAleatoire() {
  return rand(100, 999);
}

function obtenirNombreN($n) {
  $nombre = genererNombreAleatoire();
  $compteur = 0;
  for (; $nombre != $n; $compteur++) {
    $nombre = genererNombreAleatoire();
  }
  return $compteur;
}

$n = genererNombreAleatoire();

$nombreEssais = obtenirNombreN($n);

echo "Nombre N : $n" . PHP_EOL;
echo "Nombre d'essais : $nombreEssais" . PHP_EOL;

?>
