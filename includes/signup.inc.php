<?php
if (isset($_POST['signup-submit'])) {
  require 'database.inc.php';

  $username = $_POST['reg-Uid'];
  $password = $_POST['reg-Pwd'];
  $password2 = $_POST['reg-Pwd2'];
  $email = $_POST['reg-Email'];

  if (empty($username) || empty($password) || empty($password2) || empty($email)) {
    header("Location: ../signup.php?regerror=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?regerror=invalidmail&uid=".$username);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?regerror=invaliduid&mail=".$email);
    exit();
  }
  else if ($password !== $password2) {
    header("Location: ../signup.php?regerror=pwdcheck&uid=".$username."&mail=".$email);
    exit();
  }
  else {
    $sql = "SELECT uName FROM users WHERE uName=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?regerror=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultcheck = mysqli_stmt_num_rows($stmt);
      if ($resultcheck > 0) {
        header("Location: ../signup.php?regerror=uidtaken&mail=".$email);
        exit();
      }
      else if ($resultcheck == 0) {
        $sql = "INSERT INTO users (uName, uEmail, uPwd) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?regerror=sqlerror");
          exit();
        }
        else {
          $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../index.php");
  exit();
}
