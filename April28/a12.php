<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    $long = filesize("webdictionary.txt");

    for($i=0;$i<$long;$i++) {
      $lletra = fread($myfile,1);

      //$resultat = ereg_replace("([a-zA-Z])"," ",$lletra);

      if (preg_match("/^[aeiouAEIOU]*$/",$lletra))
      {
        echo " ";
      } else {
        echo $lletra;
      }

    }


    fclose($myfile);
    ?>


  </body>
</html>
