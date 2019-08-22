<?php
if (isset($_POST['login-submit'])) {
  require 'database.inc.php';

  $uid = $_POST['login-Uid'];
  $password = $_POST['login-Pwd'];

  if (empty($uid) || empty($password)) {
    header("Location: ../index.php?logerror=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE uName=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?logerror=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $uid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdcheck = password_verify($password, $row['uPwd']);
        if ($pwdcheck == false) {
          header("Location: ../index.php?logerror=wrongpwd&uid=".$uid);
          exit();
        }
        else if ($pwdcheck == true){
          session_start();

          $_SESSION['uID'] = $row['uID'];
          $_SESSION['uName'] = $row['uName'];
          $_SESSION['uEmail'] = $row['uEmail'];

          header("Location: ../index.php?login=success");
          exit();
        }
        else {
          header("Location: ../index.php?logerror=wrongpwd");
          exit();
        }
      }
      else {
        header("Location: ../index.php?logerror=nouser");
        exit();
      }
    }
  }
}
else {
  header("Location: ../index.php");
  exit();
}
