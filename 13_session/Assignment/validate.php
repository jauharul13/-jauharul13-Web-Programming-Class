<?php session_start();
if (empty($_POST['userlogin']) && empty($_POST['userpassword'])) {
  header("location:login.php?error=1");
} else {
  $login = $_POST['userlogin'];
  $password = $_POST['userpassword'];
  if ($login == 'jauharul' && $password == 'arifin') {
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header("location:menu.php");
  } else {
    header("location:login.php?error=2");
  }
}
