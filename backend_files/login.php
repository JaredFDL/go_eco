<?php
require_once('db.php');
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM `users` WHERE `email`= ? AND `password`= ? ";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $email);
$stmt->bindParam(2, $password);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
?>
