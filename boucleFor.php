<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle</title>
</head>
<body>
    <h2>Boucle For</h2>
    <?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "La somme des entiers de 1 à 100 est : " . $sum;
?>

</body>
</html>