<?php 
echo "si";
$servername = "127.0.0.1";
$username = "root"; 
$password = "";
$dbname = "album";



// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn) {
//     die("Error en la conexión: " . mysqli_connect_error());
// }

    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=album", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $sql = "INSERT INTO `photos` (`id`, `name`, `path`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg');";
        // $conn -> exec($sql);


        $sql = "SELECT * FROM `photos`";
        $sentence = $conn -> prepare($sql);
        $sentence -> execute();
       
        $result = $sentence ->fetchAll();

        foreach ($result as $photo) {
            echo $photo["name"] . "<br />";
        }

        echo "Conexión exitosa";
    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }

?>

