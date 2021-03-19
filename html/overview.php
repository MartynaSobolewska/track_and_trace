<?php 
  include_once '../php/database.php';
?>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/leftMenu.css">
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
    <div id="bodyContainer">
      <div id="leftMenu">
        <li id="menu">
          <a href="../html/home.html"><ul>Home</ul></a>
          <a href="../html/overview.html"><ul id = "checked">Overview</ul></a>
          <a href="../html/addVisit.html"><ul>Add Visit</ul></a>
          <a href="../html/report.html"><ul>Report</ul></a>
          <a href="../html/settings.html"><ul>Settings</ul></a>
        </li>
        <a href="../html/login.html">Logout</a>
      </div>
      <div id="background">
        <img src="../resources/watermark.png" alt="virus" id= "backgroundImg">
        <div id="backgroundContent">
          <?php
            $sql = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
              while ($row = mysqli_fetch_assoc($result)) {
                echo $row['username'] . "<br>";
              }
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>