<?php
require_once('db.php');
$email = $_POST['email'];
$sql = "INSERT INTO `activitysummary` VALUES (?, 0, 0, 0, 0) ";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $email);
$stmt->execute();
?>