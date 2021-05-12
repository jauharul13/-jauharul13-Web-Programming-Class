<?php
/* 
login.php
validationg user and pass from input Index.php
*/

session_start();

if (empty($_POST['username']) && empty($_POST['password'])) {
  //goes to index and send value error = 1 (no username/pass)
  header("location:Index.php?error=1");
} else {
  //jauharul as an admin
  //agung as an user biasa

  $usernamee = $_POST['username'];
  $passworde = $_POST['password'];

  //validation with Db
  include 'DB_Account.php';
  user_validation($usernamee, $passwordd);
}
