<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>File uploading</h3> 
   <?php
   $myFolder = "myFiles/";
   $myFile = $myFolder . basename($_FILES["fileToUpload"]["name"]);
   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $myFile);

   ?>
</body>
</html>