<?php
include "db.php";
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

$res = $conn->query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
if ($res->num_rows > 0) {
  $_SESSION['user'] = $user;
  echo "Login successful!";
} else {
  echo "Invalid credentials.";
}
?>
