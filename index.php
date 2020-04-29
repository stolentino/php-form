<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET Superglobal</title>
</head>

<body>
  <?php
   if (isset($_GET['name'], $_GET['lang'])){
      $name = $_GET['name'];
      $lang = $_GET['lang'];
      echo $name . '<br>'; 
      echo $lang;
      }
  ?>

  
<form method="get" action="index.php">
  <input type="text" name="name">
  <input type="text" name="lang">
  <input type="submit" value="submit">
</form>

</body>

</html>
