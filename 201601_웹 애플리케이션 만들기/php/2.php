<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo file_get_contents($_GET['id'].".txt");
    ?>
  </body>
</html>
