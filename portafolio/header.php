<?php 
session_start(); 
if (isset($_SESSION["user"]) !="daniel") {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>portafolio</title>
</head>
<body>

    <div class="container my-3">
        <a href="./index.php">Inicio</a>
        <a href="./portafolio.php">Portafolio</a>
        <a href="./close.php">Cerrar</a>
    </div>

    