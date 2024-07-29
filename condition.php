<!DOCTYPE html>
<html>
    <head>
        <title>Cours en PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Condition en PHP</h2>

<?php
$num = -5;

if ($num > 0) {
    echo "Le nombre est positif";
} elseif ($num < 0) {
    echo "Le nombre est négatif";
} else {
    echo "Le nombre est zéro";
}
?>

</body>
</html>
