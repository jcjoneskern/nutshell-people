<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <?php

    $people = json_decode(file_get_contents('http://join.nutshell.com/people/1'));

    $page = 2;

    while($res !== '[]') {
      $res = file_get_contents('http://join.nutshell.com/people/' . $page);
      $json = json_decode($res);

      $people = array_merge($people, $json);

      $page++;
    }

    var_dump($people);
    ?>




    <!-- <script type="text/javascript" src="script.js"></script> -->
  </body>
</html>
