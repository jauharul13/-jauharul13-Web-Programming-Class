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
  $name = "Fatimah";
  $address = "100 Pancoran rd";
  $email = "ftmh@email.net";
  $title = "testing File";
  $outputstring = "$name \t $address \t $email \t $title \n The End";

  $filename = "$_SERVER[DOCUMENT_ROOT]/dataftmh.txt";
  $fileHandle = fopen($filename, "w");
  fwrite($fileHandle, $outputstring, strlen($outputstring));
  fclose($fileHandle);

  ?>

</body>

</html>