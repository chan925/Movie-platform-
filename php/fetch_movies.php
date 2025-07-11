<?php
include "db.php";
$res = $conn->query("SELECT title, filename FROM movies");
$movies = [];

while ($row = $res->fetch_assoc()) {
  $movies[] = $row;
}
echo json_encode($movies);
?>
