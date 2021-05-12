<?php
session_start();

if (isset($_SESSION['SID'])) {
    $_SESSION['SID']  = $_SESSION['SID'] + 1;
} else {
    $_SESSION['SID'] = 1;
}
echo "Page ID = " . $_SESSION['SID'];
