
<?php include_once "./ejercicioCuatroUno.php"; ?>
<?php include_once "./ejercicioCuatroUno.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($data -> list as $video) {?>
        <li><?php echo ($video -> title);  ?></li>
        <?php } ?>
    </ul>
</body>
</html>