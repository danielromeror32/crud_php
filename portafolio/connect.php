<?php 

    class connection{
        private $server = "localhost";
        private $user = "root";
        private $password = "";
        private $connection;

        public function __construct(){
            try {
                $this -> connection = new PDO("mysql:host=$this->server;dbname=album", $this->user, $this->password);
                $this -> connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                return "falla".$e;
                //throw $th;
            }
        }

        public function execute ($sql){
            $this -> connection ->exec($sql);
            return $this->connection->lastInsertId();
            
        }   

        public function queries ($sql){
            $sentence = $this -> connection -> prepare($sql);
            $sentence -> execute();
            return $sentence -> fetchAll();
        }

    }

?>