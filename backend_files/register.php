<?php
require_once('db.php');
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO `users` VALUES (?, ?, ?) ";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $email);
$stmt->bindParam(2, $password);
$stmt->bindParam(3, $username);
$stmt->execute();
?>
