<?php
session_start();
if (isset($_SESSION['SID'])) {
  unset($_SESSION['SID']);
  print "session has been cleaned";
}
