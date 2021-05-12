<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write to Files</title>
</head>

<body>
  <?php
  $name = "Nabila";
  $adress = "14 PSMinggu St.";
  $email = "nbila@email.net";
  $title = "PHP File Append";
  $outputstring = "$name\t $adress\t $email\t $title\n";

  $filename = "$_SERVER[DOCUMENT_ROOT]/dataftmh.txt";
  $fileHandle = fopen($filename, "a+");

  //condition
  if (fwrite($fileHandle, $outputstring, strlen($outputstring))) {
    print "file is written successfully";
  }

  $fileHandle = fopen($filename, "r");
  $filename = "$_SERVER[DOCUMENT_ROOT]/dataftmh.txt";
  $contents = fread($fileHandle, filesize($filename));

  print "<br> the contents: ";
  print "<pre>$contents</pre>";

  fclose($fileHandle);
  ?>

</body>

</html>