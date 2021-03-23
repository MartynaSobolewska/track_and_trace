<?php 
  include_once '../php/database.php';
  $username_err = "";
?>
<html lang="en">
<head>
  <script>
    function checkForBlank(){
      var empty = false;
      var str = "";
      if(document.getElementById("nameInput").value == ""){
        document.getElementById('nameInput').style.borderColor = "red";
        empty = true;
        str += "name, "
      }
      if(document.getElementById("surnameInput").value == ""){
        document.getElementById("surnameInput").style.borderColor = "red";
        empty = true;
        str += "surname, "
      }
      if(document.getElementById("usernameInput").value == ""){
        document.getElementById("usernameInput").style.borderColor = "red";
        empty = true;
        str += "username, "
      }
      if(document.getElementById("pwdInput").value == ""){
        document.getElementById("pwdInput").style.borderColor = "red";
        str += "password, "
        empty = true;
      }

      if(empty === true){
        document.getElementById('errorMessage').innerHTML = `please fill out fields: ${str}try again.`;
        return false;
      }
    }

  </script>
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
      <form action = "../php/new_user.inc.php" id = "registerForm" class = "form" method = "POST" onsubmit="return checkForBlank()">
        <div id="inputs">
          <input type="text" name="name" placeholder="Name" id="nameInput">
          <input type="text" name="surname" placeholder="Surname" id="surnameInput">
          <input type="text" name="username" placeholder="Username" id="usernameInput">
          <input type="password" name="pwd" placeholder="Password"id="pwdInput">
        </div>
        <p id = errorMessage><?php echo $username_err?></p>
        <button id="register" type="submit" name = "submit">Register</button>
      </form>
    </div>
  </div>
  
</body>
</html>