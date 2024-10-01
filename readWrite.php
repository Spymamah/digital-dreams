<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> My text page </h1>
    <?php
    $myFile = fopen('lorem ipsum.txt', 'w');
    fwrite($myFile, "This is a latin word\n");
    fwrite($myFile, "THis is the second line\n");
    fwrite($myFile, "this is the last sentence\n");
    ?>
</body>
</html>