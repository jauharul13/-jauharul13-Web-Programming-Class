<?php session_start();
if (!empty($_SESSION['username']) && !empty($_SESSION['password'])) {
     ?><html>

        <head>
            <title>Session</title>
        </head>

        <body>
            <form method="post" action="login.php">
                <section><br>
                    <p><b>Personal Page</b><br><br>Welcome Back, <?php echo $_SESSION['login']; ?><br><br>
                    <p>Hi Orang Biasa</p>
                        <input type="submit" value="Logout">
                    </p>
                </section>
            </form>
        </body>

        </html>

