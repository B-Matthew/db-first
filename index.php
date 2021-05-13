<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <title>db-first</title>
  </head>
  <body>
    <div class="container">
      <h1>Lista Stanze</h1>
      
      <ul>
        <?php

        require_once "data.php";

        $conn = getConnection();
        $sql = getStanze();

        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> bind_result($id, $roomNum);

        while ($stmt -> fetch()) {
          echo '<li><a href= "stanza.php?id=' . $id . '">' ."ID: " .$id ." " ."N Room: " .$roomNum ."</a></li>";
        }

        closeConn($conn, $stmt);
        ?>
      </ul>
    </div>
  </body>
</html>
