<?php
include "db.php";
$movie = $_POST['movie'];
$user = $_POST['user'];
$comment = $_POST['comment'];

$conn->query("INSERT INTO comments (movie_id, user, comment) VALUES ('$movie', '$user', '$comment')");
echo "Comment added.";
?>
