<?php
/* 
menu.php
main menu only for admin.
input book informations, reset, logout, and search book
*/

session_start();
//if session is not empty do this one. 
if (!empty($_SESSION['username']) && !empty($_SESSION['password'])) { ?>
  <html>

  <head>
    <title>Session</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>

  <body>
    <form name="menu" method="post" action="menu.php" onsubmit="form_validate()">
      <section>
        <p><b>Your Book Library.</b><br><br>Welcome, <?php echo $_SESSION['username']; ?><br><br>

        <p>Input Book Informations please</p>
        Book ID <br><Input type="number" name="book_id" placeholder="Book ID" require></Input> <br><br>
        Title <br><Input type="text" name="title" placeholder="Title"></Input require> <br><br>
        Author <br><Input type="text" name="author" placeholder="Author"></Input require> <br><br>
        Publication Year <br><Input type="number" name="publication_year" placeholder="Publication Year" require></Input> <br><br>
        <input type="submit" name="add" value="add">

        <input type="reset" value="clear">
        <br><br>

        <?php
        #calling add() function from DB_Account.php to add book information to DB
        if (isset($_POST['add'])) {
          include 'DB_Account.php';
          add();
        }

        ?>
        </p>
      </section>
    </form>
    <!----search button goes to searchform.php accessible for admin and user.--->
    <a href="searchform.php"><button value="search" name="search">Search Book</button>
      <br><br>
      <form method="post" action="Index.php">
        <input type="submit" value="Logout">
      </form>
  </body>

  </html>
  <!----Php error checker--->
<?php
  //if session already empty set error =3, so it will goes to login page
  //with notes session expired.
} else {
  header("location:Index.php?error=3");
} ?>

<!-- Validating form with javascript-->
<script type="text/javascript">
  function form_validate() {
    with(document.menu) {
      if (book_id.value == '') {
        alert("Please fill in the book id");
        book_id.focus();
        return false;
      }
      if (title.value == '') {
        alert("Please fill in the title");
        title.focus();
        return false;
      }
      if (author.value == '') {
        alert("Please fill in the author");
        author.focus();
        return false;
      }
      if (publication_year.value == '') {
        alert("Please fill in the publication_year");
        publication_year.focus();
        return false;
      }
      return true;
    }

  }
</script>