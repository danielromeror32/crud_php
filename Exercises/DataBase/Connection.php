<?php 

class Connection {

    public static function make ($config ) {
        // $serverName = "127.0.0.1";
        // $username = "root"; 
        // $password = "";
        try {
            //return new PDO("mysql:host=$serverName;dbname=album", $username, $password);
            return new PDO (
                $config["connection"] . ";dbname=" . $config["name"],
                $config["username"], $config["password"], $config["options"]
            );
            
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
}
?>