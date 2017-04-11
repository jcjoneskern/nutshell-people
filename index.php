<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <?php
      $res = file_get_contents('http://join.nutshell.com/people/1/');
      // $res = json_decode($res);
      echo $res;

    ?>




    <!-- <script type="text/javascript" src="script.js"></script> -->
  </body>
</html>
