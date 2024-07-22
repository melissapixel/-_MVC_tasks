<?php

    Class Get_posts extends Connect {

        public function getData(){

            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }

            $query = "SELECT * FROM posts ORDER BY id DESC";
            $result = $this->connection->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='post__block-head'>" . $row['head'] . "</div>";
                    echo "<div class='post__block-post'>" . $row['text'] . "</div>";
                }
            } else {
                echo "0 results";
            }

        }

    }

    $data = new Get_posts();

?>