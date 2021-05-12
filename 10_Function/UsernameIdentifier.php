<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Identifier</title>

</head>

<body>
  <form action="" method="post">
    <p>Email Adress : <input type="text" name="email" placeholder="Input Your Email Here"></p>
    <input type="submit" name="submit" value="Submit">
    <br>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $Email = $_POST['email'];
    UsernameIdentifier($Email);
  } ?>
</body>

</html>

<?php
function UsernameIdentifier($Email)
{
  $username = substr($Email, 0, strrpos($Email, '@'));
  $domain = substr(strrchr($Email, "@"), 1);
  echo "<br>Email : " . $Email;
  echo "<br>User : " . $username;
  echo "<br>Domain : " . $domain;
}
?>