<?php

$a = 0;
$b = 0;
$c = 0;
$solution1 = null;
$solution2 = null;

if (isset($_POST['submit'])) {
  $a = floatval($_POST['a']);
  $b = floatval($_POST['b']);
  $c = floatval($_POST['c']);

  $delta = $b * $b - 4 * $a * $c;

  if ($delta > 0) {
    $solution1 = (-$b + sqrt($delta)) / (2 * $a);
    $solution2 = (-$b - sqrt($delta)) / (2 * $a);
  } elseif ($delta === 0) {
    $solution1 = -$b / (2 * $a);
  } else {
   
    $solution1 = "Pas de solution réelle";
    $solution2 = "";
  }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Résolution d'équations du second degré</title>
</head>
<body>
  <h1>Résolution d'équations du second degré</h1>
  <form method="post">
    <label for="a">Coefficient a:</label>
    <input type="number" id="a" name="a" value="<?php echo $a; ?>">
    <br>
    <label for="b">Coefficient b:</label>
    <input type="number" id="b" name="b" value="<?php echo $b; ?>">
    <br>
    <label for="c">Coefficient c:</label>
    <input type="number" id="c" name="c" value="<?php echo $c; ?>">
    <br>
    <br>
    <input type="submit" name="submit" value="Calculer">
  </form>

  <h2>Résultats</h2>
  <ul>
    <li>Solution 1: <?php echo $solution1; ?></li>
    <li>Solution 2: <?php echo $solution2; ?></li>
  </ul>
</body>
</html>
