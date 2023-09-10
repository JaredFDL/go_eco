<?php
require_once('db.php');
$email = $_POST['email'];
$total = $_POST['total'];

$sql = "UPDATE activitysummary SET total = total+? WHERE email = ?";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $total);
$stmt->bindParam(2, $email);

$stmt->execute();
?>