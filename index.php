<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <?php
    $page = 1;

    while($res !== '[]') {
      $res = file_get_contents('http://join.nutshell.com/people/' . $page);
      echo $res;
      $page++;
    }
    ?>




    <!-- <script type="text/javascript" src="script.js"></script> -->
  </body>
</html>
