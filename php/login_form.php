<?php
include_once '../php/database.php';
if(isset($_POST['login'])){
  require 'database.php';
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $sql = "SELECT * FROM users WHERE username=?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../html/login.php?error=sqlerror");
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
      $hashedPwd = $row['passwordHash'];
      $pwdCheck = password_verify($pwd, $hashedPwd);
      if(!$pwdCheck){
        header("Location: ../html/login.php?error=wrongpwd");
        exit();
      }
      // make sure no error occurred in the code with an additional check
      else{
        session_start();
        $_SESSION['userId'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: ../html/home.php");
        exit();
      }
      // else{
      //   header("Location: ../html/login.php?error=pwderror");
      //   exit();
      // }

    }
    else{
      header("Location: ../html/login.php?error=nousr");
      exit();
    }
  }
}
else{
  header("Location: ../html/login.php");
  exit();
}