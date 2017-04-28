<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<style media="screen">
.long {color: red;}
</style>

  </head>
  <body>


    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {

      echo fgets($myfile).strlen(fgets($myfile))."<br>";


    }
    fclose($myfile);
    ?>

    </body>
    </html>
