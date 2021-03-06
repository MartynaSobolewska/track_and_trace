<?php 
  include_once '../php/database.php';
?>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/login.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Tracing Login</title>
</head>
<body>
  <div class="container">
    <div id="header">
      <h1 id="title">COVID - 19 Contact Tracing</h1>
    </div>
    <div id="background">
      <img src="../resources/watermark.png" alt="virus" id = "backgroundImg">
      <form action="../php/login_form.php" method="POST" class="form">
        <div id="inputs">
          <input type="text" name="username" id="username" placeholder="Username"><br>
          <input type="password" name="pwd" id="pwd" placeholder="Password">
        </div>
        <div id="buttons">
          <div id="buttonRow">
            <button class="rowButton" type="submit" name = "login">Login</button>
            <a href="../html/home.php"><button class="rowButton">Cancel</button></a>
          </div>
          <button id="register"name = "register"formaction="register.php">Register</button>
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>