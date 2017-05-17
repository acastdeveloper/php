<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Activitat 01</title>
</head>
<body>
  <header>
    <h1>Activitat 1</h1>
    <p>Sobre el fitxer de text d'exemple, mostra en una pàgina web només les línies que comencen per la lletra 's'</p>
    <hr>
  </header>
  <main>

    <h2>Resposta:</h2>

    <?php
      $arxiu = fopen("dictionary.txt","r") or die("No s'ha carregat l'arxiu");

      file_get_contents("dictionary.txt");

      $arxiuM = file("dictionary.txt");
      $long = count($arxiuM);

      for ($i=0; $i < $long ; $i++) {

          if (strtoupper(substr($arxiuM[$i],0,1)) == 'S') {
              echo $arxiuM[$i].'<br>';
          }

       }
     ?>

  </main>


</body>
</html>
