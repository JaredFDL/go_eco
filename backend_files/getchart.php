<?php
require_once('db.php');
$email = $_POST['email'];
$sql = "SELECT * FROM `activitysummary` WHERE `email`= ? ";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $email);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
?>
