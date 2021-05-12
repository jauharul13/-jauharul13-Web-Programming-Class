<?php session_start();
if (!empty($_SESSION['login']) && !empty($_SESSION['password'])) {
   if ($_SESSION['login'] == 'jauharul' && $_SESSION['password'] == 'arifin') { ?><html>

      <head>
         <title>Session</title>
         <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      </head>

      <body>
         <form method="post" action="login.php">
            <section text-align:center;><br><br>
               <p><b>As-Salam Online Shopping</b><br><br>Welcome <?php echo $_SESSION['login']; ?><br><br>
               <table width="180" cellspacing="1" cellpadding="1">
                  <tr>
                     <td valign="top">
                        <p>Menu</p>
                     </td>
                     <td valign="top">
                        <p>:</p>
                     </td>
                     <td>
                        <p>Add Record <br>
                           Delete Record <br>
                           Update Record <br>
                           View Record <br>
                        </p>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                     <td colspan="2">&nbsp;</td>
                     <td text-align:center;><input type="submit" value="Logout">
                        </p>
                     </td>
                  </tr>
               </table>
            </section>
         </form>
         </p>
      </body>

      </html>

<?php } else {
      header("location:login.php?error=2");
   }
} else {
   header("location:login.php?error=3");
} ?>