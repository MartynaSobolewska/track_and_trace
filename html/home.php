<?php
  session_start();
  include_once("../php/database.php");
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
  <?php
    // if(!isset($_SESSION['userId'])){
    //   header("Location: ../html/login.php");
    // }
  ?>
  <div class="container">
    <div id="header">
      <h1 id="title">COVID - 19 Contact Tracing</h1>
    </div>
    <div id="bodyContainer">
      <div id="leftMenu">
        <li id="menu">
          <a href="../html/home.html"><ul id = "checked">Home</ul></a>
          <a href="../html/overview.php"><ul>Overview</ul></a>
          <a href="../html/add_visit.php"><ul>Add Visit</ul></a>
          <a href="../html/report.html"><ul>Report</ul></a>
          <a href="../html/settings.html"><ul>Settings</ul></a>
        </li>
        <a href="../html/login.html">Logout</a>
      </div>
      <div id="background">
        <img src="../resources/watermark.png" alt="virus" id= "backgroundImg">
        <div id="backgroundContent">
          <div id="header2">
            <h2>
              Status
            </h2>
          </div>
          <div id="mapAndText">
            <div id="text">
              <p>Hi "name", you might have had a connection to an infected person at the location shown in red.</p>
              <p>Click on the marker to see details about the infection.</p>
            </div>
            <map name="Exeter"><img src="../resources/exeter.jpg" alt="exeter" id="mapImg"></map>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>