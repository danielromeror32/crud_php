<?php
$txtNombre = "";
$btn = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
    $btn = (isset($_POST["item"])) ? $_POST["item"] : "";

    $btna = (isset($_POST["checkPhp"]) == "true") ? "checked" : "";
    $btnb = (isset($_POST["checkCss"]) == "true") ? "checked" : "";
    $btnc = (isset($_POST["checkHtml"]) == "true") ? "checked" : "";

    $anime = (isset($_POST["anime"])) ? $_POST["anime"] : "";

    $textArea = (isset($_POST["contenido"])) ? $_POST["contenido"] : "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <?php if ($_POST) { ?>
        Saludos : <?php echo $txtNombre; ?>
        Tu lenguaje es : <?php echo $btn; ?>
    <?php } ?>

    <form action="../php2023/ejercicioDos.php" method="post">
        Nombre: <br />
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" />
        <br />
        Cual es tu favorito?
        <br />PHP <input type="radio" <?php echo ($btn == "php") ? "checked" : ""; ?> name="item" value="php"><br />
        <br />CSS <input type="radio" <?php echo ($btn == "css") ? "checked" : ""; ?> name="item" value="css"><br />
        <br />HTML<input type="radio" <?php echo ($btn == "html") ? "checked" : ""; ?> name="item" value="html"><br />
        Estas aprendiendo:
        <br /> PHP <input type="checkbox" <?php echo $btna ?> name="checkPhp" value="true">
        <br /> CSS <input type="checkbox" <?php echo $btnb ?> name="checkCss" value="true">
        <br />HTML <input type="checkbox" <?php echo $btnc ?> name="checkHtml" value="true">
        Que anime te gusta? <br />
        <select name="anime">
            <option value="">[Nunguna serie]</option>
            <option value="Naruto" <?php echo ($anime == "Naruto") ? "selected" : ""; ?>>Naruto</option>
            <option value="love" <?php echo ($anime == "love") ? "selected" : "";  ?>>love live</option>
            <option value="dragon" <?php echo ($anime == "dragon") ? "selected" : "";  ?>>dragon</option>
        </select>
        <textarea name="contenido" id="" cols="20" rows="5">
            <?php echo $textArea ?>
        </textarea>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>