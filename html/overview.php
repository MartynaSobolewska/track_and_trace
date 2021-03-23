<?php 
  include_once '../php/database.php';
?>
<html lang="en">
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
    crossorigin="anonymous"></script>
  <script>
    function removeData(){
      var id = str;
      $.ajax({
        type: "POST",
        url: "overview.php?p=del",
        data: 
      })
    }
  </script>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/leftMenu.css">
  <link rel="stylesheet" href="../css/overview.css">
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
            $sql = "SELECT * FROM infectedlocations;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
              echo "<table id = 'overviewTable'>";
              echo "<tr><th>Date</th><th>Time</th><th>Duration</th><th>X</th><th>Y</th><th></th></tr>";

              while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                echo "<tr><td>" . $row['d'] . "</td><td>" . $row['t'] . "</td><td>" . $row['duration'] . "</td><td>" . $row['x'] . "</td><td>" . $row['y'] . "</td><td><input type='image' class='crossImg' src= '../resources/cross.png'/></td></tr>";
              }

              echo "</table>"; //Close the table in HTML

              exit();
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>