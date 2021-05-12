<?php
//

setcookie('here', 'mypage');
setcookie('visit', date("d-m-y H:i:s"));


if (empty($_COOKIE['here'])) {
  setcookie('visit', 1);
  print "First time here!";
} else {
  //$temp = false;

  $visit = $_COOKIE['visitInc'] + 1;
  //set coocies for increment
  setcookie('visitInc', $visit);
  print $visit . "Welcome again to " . $_COOKIE["here"] . " last visit is on " . $_COOKIE['visit'];
}

//error for the first time