<?php

    include 'db.php';

    class Post extends Db_connect {

        public function __construct($head, $text){

            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }

            $head = $this->connection->real_escape_string($head);
            $text = $this->connection->real_escape_string($text);

            $sql = "INSERT INTO posts (head, text) VALUES ('$head', '$text')";

            if ($this->connection->query($sql) === false) {
                die("Error inserting data: " . $this->connection->error);
            } else {
                echo "Data inserted successfully!";
            }
        }

    }

    $post = new Post($_POST['head'], $_POST['text']);

    header('Location: index.php');

?>