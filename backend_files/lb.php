<?php
require_once('db.php');
$sql = "SELECT `username`, `total`  FROM `activitysummary`, `users` WHERE users.`email`= activitysummary.`email` ORDER BY `total` DESC ";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
?>