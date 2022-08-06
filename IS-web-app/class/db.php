<?php

class Database {
     private $conn;

     public function connect_db() {
          $this->conn = mysqli_connect('localhost','root','','is_web');
          if(mysqli_connect_error()) {
               die("Connection Failed: " . mysqli_connect_error() . mysqli_connect_errno());
          }
     }
}

$conn = new Database();
$conn->connect_db();

?>