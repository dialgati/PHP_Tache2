<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditios et Boucles</title>
</head>
<body>
    <h2>Conditios et Boucles</h2>
     <?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HelloFriend ";
    } elseif ($i % 3 == 0) {
        echo "Hello ";
    } elseif ($i % 5 == 0) {
        echo "Friend ";
    } else {
        echo $i . " ";
    }
}
?>

</body>
</html>
