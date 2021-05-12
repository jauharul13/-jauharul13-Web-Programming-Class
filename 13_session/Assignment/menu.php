<?php session_start();
if (!empty($_SESSION['login']) && !empty($_SESSION['password'])) {
  if ($_SESSION['login'] == 'jauharul' && $_SESSION['password'] == 'arifin') { ?><html>

    <head>
      <title>Session</title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>

    <body>
      <form method="post" action="login.php">
        <section><br>
          <p><b>Personal Page</b><br><br>Welcome Back, <?php echo $_SESSION['login']; ?><br><br>
            <input type="submit" value="Logout">
          </p>
        </section>
      </form>
    </body>

    </html>

<?php } else {
    header("location:login.php?error=2");
  }
} else {
  header("location:login.php?error=3");
} ?>