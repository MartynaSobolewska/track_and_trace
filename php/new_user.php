<?php
  include_once '../php/database.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $firstName = mysqli_real_escape_string($conn, $_POST['name']);
  $surname = mysqli_real_escape_string($conn, $_POST['surname']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  $hashed_pwd = crypt($pwd);

  $sql = "INSERT INTO users (username, passwordHash, firstName, surname) VALUES ('$username','$hashed_pwd', '$firstName', '$surname');";
  mysqli_query($conn, $sql);

  header("Location: ../html/home.html");
?>