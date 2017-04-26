<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php $t = date("H"); ?>

      <?php if ($t < "10"): ?>
        <p>Have a good morning</p>
      <?php elseif ($t < "20") : ?>
        <p>Have a good day!</p>
      <?php else: ?>
        <p>Have a good night</p>
      <?php endif ?>



  </body>
</html>
