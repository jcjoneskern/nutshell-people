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

    function date_sort($a, $b) {
      return $b->signup_date - $a->signup_date;
    }

    usort($people, 'date_sort');

    $i = 0;
    foreach ($people as $person) {
      // print_r($person);
      if($person->email != false) {
        print_r($person);
        $i++;
      }
      if($i >= 5) {
        break;
      }
    }

    ?>




    <!-- <script type="text/javascript" src="script.js"></script> -->
  </body>
</html>
