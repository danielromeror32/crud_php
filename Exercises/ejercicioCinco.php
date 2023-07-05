<?php 

$file = "achivoDos.txt";
$content = "Si verdad";
$createFile = fopen($file,"w");
fwrite($createFile, $content);
fclose($createFile);


?>