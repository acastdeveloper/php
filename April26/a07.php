<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .big {
        font-size: 6em;
        color: green;
      }

      .normal {
        font-size: 1em;
        color: brown;
      }

    </style>
  </head>
  <body>

    <?php
    $pers=array("Pep","Tom","Nil","Sam","Ot","Sean");

    function familyName($fname,$estil) {
      if ($estil == "big"):
      echo "<span class='big'> $fname </span><br>";
    elseif($estil == "normal"):
      echo "<span class='big'> $fname </span><br>";
    else:
      echo $fname ."<br>";
    endif;

    }

    foreach($pers as $nom) {
       $comen = substr($nom,0,1);

      switch ($comen) {
          case 'S':
          familyName($nom,"big");
          break;

        default:
          familyName($nom,"normal");
          break;
      }





    }


    ?>


  </body>
</html>
