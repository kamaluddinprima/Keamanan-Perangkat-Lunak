<?php
    session_start();
    if (!isset($_SESSION['log'])){
      header("Location: index.php");
      exit;
  }
  

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <h1>Nama : Muhammad Kamaluddin Primajaya</h1>
    <h1>NIM : 20051397035</h1>
    <h1>Jurusan : Teknik Informatika</h1>
    <a class="btn btn-primary" href="logout.php" role="button">LOGOUT</a>
  </body>
</html>