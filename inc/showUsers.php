<?php
include("dbConnect.php");

$sql = "SELECT * FROM users";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $rows[] = $row;
}

  header('Content-type: application/json');
  echo json_encode($rows);


php?>

<html>


bababooey

</html>