<?php
include "db.php";

$title = $_POST['title'];
$filename = basename($_FILES["video"]["name"]);
$target = "../uploads/videos/" . $filename;

if (move_uploaded_file($_FILES["video"]["tmp_name"], $target)) {
  $conn->query("INSERT INTO movies (title, filename) VALUES ('$title', '$filename')");
  echo "Upload successful!";
} else {
  echo "Upload failed.";
}
?>
