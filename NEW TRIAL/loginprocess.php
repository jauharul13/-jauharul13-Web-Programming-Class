<?php
session_start();
if (isset($_POST['login'])) {
    extract($_POST);
    include 'database.php';

    if (empty($_POST['username']) && empty($_POST['password'])) {
        //goes to index and send value error = 1 (no username/pass)
        header("location:login.php?error=1");
    } else {
        //jauharul as an admin
        //agung as an user biasa

        $usernamee = $_POST['username'];
        $passworde = $_POST['password'];

        //validation with Db
        include 'database.php';
        $data = mysqli_query($connect, "SELECT*FROM user WHERE username ='$usernamee' AND password ='$password'");
        $info = mysqli_fetch_array($data);

        if (is_array($info)) {
            if ($info['status'] == 'admin') {
                $_SESSION['username'] = $info['username'];
                $_SESSION['password'] = $info['password'];
                echo "owala";
                header("location:home.php");
            } elseif ($info['status'] == 'user') {
                $_SESSION['username'] = $info['username'];
                $_SESSION['password'] = $info['password'];
                header("location:searchform.php");
            } else {
                header("location:login.php?error=2");
            }
        }

        mysqli_close($connect);
    }
}
