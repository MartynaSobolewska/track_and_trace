<?php
  include_once '../php/database.php';
  if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $firstName = mysqli_real_escape_string($conn, $_POST['name']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      header("Location: ../html/register.php?error=incorrectusrname&firstName=".$firstName."&surname=".$surname."pwd=".$pwd);
      exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      header("Location: ../html/register.php?error=incorrectusrname&firstName=".$firstName."&surname=".$surname."pwd=".$pwd);
      exit();
    }
    else{
      $select = "SELECT id FROM users WHERE username=?;";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $select)){
        header("Location: ../html/register.php?error=sqlerror");
        exit();
      }
      else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0){
          header("Location: ../html/register.php?error=takenusername&firstName=".$firstName."&surname=".$surname."pwd=".$pwd);
          exit();
        }
        else{
          $sql = "INSERT INTO users (username, passwordHash, firstName, surname) VALUES (?,?,?,?);";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../html/register.php?error=sqlerror");
            exit();
          }
          else{
            mysqli_stmt_bind_param($stmt, "ssss", $username, $hashed_pwd, $firstName, $surname);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            header("Location: ../html/home.php");
            exit();
          }
        }
      }
    }
  }
  // in case the user gets access to this page not throught the registration form,
  // direct him to the registration form
  else{
    header("Location: ../html/register.php");
    exit();
  }
?>