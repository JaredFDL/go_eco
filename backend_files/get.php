<?php
require_once('db.php');
$sql = "SELECT * FROM `activitysummary`";
$stm = $db->prepare($sql);
$stm->execute();
$row = $stm->fetch(PDO::FETCH_ASSOC);
echo json_encode($row);
?>