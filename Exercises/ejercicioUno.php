<?php 

$query = include "./bootstrap.php";


// $conn = Connection::make();
// $query = new QueryBuilder($conn);

$picture = $query -> fetchAllPictures("photos");

die(var_dump($picture));



foreach ($picture as $photo) {
    echo $photo -> name. "<br />";
}