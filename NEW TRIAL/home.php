<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body>
    <form action="home.php" method="post">
        <?php
        session_start();
        include 'database.php';
        $username = $_SESSION["username"];
        $sql = mysqli_query($connect, "SELECT * FROM user where username='$username' ");
        $row  = mysqli_fetch_array($sql);
        ?>

        <section>
            <p><b>Your Book Library.</b><br><br>Welcome, <?php echo $row['username']; ?><br><br>

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
        <br>
        <a href="logout.php"><button value="logout" name="logout">Logout</button>
            <br>
</body>

</html>
<!----Php error checker--->

<?php
/*
add book informations to DB
*/
function add()
{
    global $connect, $server, $user, $pass, $database;
    global $book_id, $title, $author, $publication_year;
    global $connect, $query, $data, $result;

    $book_id = $_POST['book_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication_year = $_POST['publication_year'];

    //connect to SQL DB
    $connect = mysqli_connect($server, $user, $pass) or die('cannot establish connection');
    mysqli_select_db($connect, $database) or die('no database selected');

    //insert information from form into DB
    $query = "INSERT INTO jauharul_book value('$book_id', '$title', '$author', '$publication_year')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Success Added to Db!";
    } else {
        print "Fill All informations please!";
    }
    mysqli_close($connect);
}
?>
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