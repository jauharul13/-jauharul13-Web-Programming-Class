<?php
/*
searchform.php
different page for searching book informations from DB
can be used by admin and user
*/

session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Book Collections</title>
</head>

<body>
  <section>
    <form action="searchform.php" method="post">
      <?php echo "Hey, " . $_SESSION['username'] . "!!!"; ?>
      <p>Search Your Book</p>
      <input type="text" name="searchbook" placeholder="Keyword Author or Book Name">
      <input type="submit" name="searchkey" value="Search Book">
    </form> <br><br>
    <?php
    if (isset($_POST['searchkey'])) {
      include 'DB_Account.php';
      search();
    }
    ?>

    <br><br>
  </section>
  <!----logout feature, it will goes to index.php
    and destroy the session.--->
  <form action="Index.php" method="get">
    <input type="submit" value="Logout">
  </form>
</body>

</html>

<?php


//cheching condition if session for username and pass is already empty or logout
//it will goes to login page with notes invalid user
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
  header("location:Index.php?error=3");
}
?>