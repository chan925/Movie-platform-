<?php
include "db.php";
if ($_GET['action'] == "clear") {
  $conn->query("DELETE FROM movies");
  echo "All videos deleted.";
}
?>
