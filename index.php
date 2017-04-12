<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Last Five Signups</title>
  </head>
  <body>

    <ol>

    <?php
    $people = array();

    $page = 1;
    while($res !== '[]') {
      $res = file_get_contents('http://join.nutshell.com/people/' . $page);
      $json = json_decode($res);

      $people = array_merge((array)$people, (array)$json);

      $page++;
    }

    function date_sort($a, $b) {
      return strtotime($b->signup_date) - strtotime($a->signup_date);
    }

    usort($people, 'date_sort');

    $i = 0;
    foreach ($people as $person) {
      if($person->email != false) {
        echo '<li><ul style="list-style: none;"><li>' . $person->name . '</li><li>' . $person->email . '</li><li>' . $person->signup_date . '</li></ul></li>';
        $i++;
      }
      if($i >= 5) {
        break;
      }
    }
    ?>

    </ol>

  </body>
</html>
