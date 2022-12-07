<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo htmlspecialchars('<script>alert(1);</script>');
    ?>
  </body>
</html>
