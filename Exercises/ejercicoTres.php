<?php 
    if ($_POST) {
        move_uploaded_file($_FILES["archivo"]["tmp_name"],$_FILES["archivo"]["name"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Imagen:
        <input type="file" name="archivo">
        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>