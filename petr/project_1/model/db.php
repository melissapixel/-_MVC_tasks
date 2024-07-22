<?php

    require 'connect_page.php';

    class Db_connect extends Connect {

        public function __construct(){

            $this->connection = new mysqli($this->host, $this->username, $this->password);

            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }

            $this->createDatabase();

            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }

        }

        private function createDatabase(){

            $sql = "CREATE DATABASE IF NOT EXISTS " . $this->database;

            if ($this->connection->query($sql) === false) {
                die("Error creating database: " . $this->connection->error);
            }

        }

        public function createTable(){

            $sql = "CREATE TABLE IF NOT EXISTS posts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                head VARCHAR(300),
                text VARCHAR(2000)
            )";

            if ($this->connection->query($sql) === false) {
                die("Error creating table: " . $this->connection->error);
            }

        }

        public function __destruct(){

            $this->connection->close();

        }

    }

    $db = new Db_connect();
    $db->createTable();

?>