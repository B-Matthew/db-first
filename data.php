<?php

  function getConnection( $servername = "localhost",
                          $username = "root",
                          $password = "root",
                          $dbname = "dbhotel") {

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn && $conn->connect_error) {

      echo "Connection failed: " . $conn->connect_error;
    }

    return $conn;
  }

  function closeConn($conn, $stmt) {
        $stmt -> close();
        $conn -> close();
    }

    function getStanze() {

      return "
        SELECT id ,room_number
        FROM stanze
      ";
    }

    function getStanzeForId (){
      return "
        SELECT room_number,floor,beds
        FROM stanze
        WHERE id = ?
        ";
    }
?>
