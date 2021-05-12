<?php
session_start();
if (isset($_SESSION['SID'])) {
    print "Session Here";
} else {
    print "Not Exist";
}
