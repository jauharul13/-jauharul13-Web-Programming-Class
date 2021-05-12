<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Files Manipulation</title>
</head>

<body>
  <?php

  $filename = "../../dataftmh.txt";
  $fileHandle = fopen($filename, "r");
  $contents = fread($fileHandle, filesize($filename));
  print "<pre>$contents<pre>";
  fclose($fileHandle);


  ?>

</body>

</html>