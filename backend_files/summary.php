<?php
require_once('db.php');
$email = $_POST['email'];
$food = $_POST['food'];
$transport = $_POST['transport'];
$energy = $_POST['energy'];
$total = $_POST['total'];

$sql = "UPDATE `activitysummary` SET`food` = `food`+?,`transport` = `transport`+?,`energy` = `energy`+? , `total` = `total`+? WHERE `email` = ?";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $food);
$stmt->bindParam(2, $transport);
$stmt->bindParam(3, $energy);
$stmt->bindParam(4, $total);
$stmt->bindParam(5, $email);
$stmt->execute();
$row = $stm->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($row);
?>