<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle While</title>
</head>
<body>
    <h2>Boucle While</h2>
    <?php
$i = 1;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
    $i++;
}
?>
</body>
</html>
