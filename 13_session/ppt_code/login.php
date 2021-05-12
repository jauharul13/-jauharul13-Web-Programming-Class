<?php session_start();  ?><html>

<head>
    <title>Session</title>
    <meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
</head>

<body>
    <form method="post" action="validate.php">
        <section text-align:center;><br><br>
            <b>As-Salam Online Shopping</b><br><br>
            <table width="180" cellspacing="1" cellpadding="1">
                <tr>
                    <td>
                        <p>Login</p>
                    </td>
                    <td>
                        <p>:</p>
                    </td>
                    <td><input type="text" name="userlogin" size="15"></td>
                </tr>
                <tr>
                    <td>
                        <p>Password</p>
                    </td>
                    <td>
                        <p>:</p>
                    </td>
                    <td><input type="password" name="userpassword" size="15"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td text-align:center;><input type="submit" value="Enter">&nbsp;&nbsp;<inputtype="reset" value="Clear">
                    </td>
                </tr>
            </table><br><br>
            <p color="red">

                <?php if (!empty($_GET['error'])) {
                    if ($_GET['error']  == "1") {
                        echo "Login and Password are empty!";
                    } else if ($_GET['error'] == "2") {
                        echo "Invalid user!";
                    } else {
                        echo "Session expired!";
                    }
                } ?></p>
            </p>
        </section>
    </form>
</body>

</html>

<?php session_destroy();  ?>