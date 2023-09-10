<?php
$dns = 'mysql:host=localhost;dbname=go_eco';
$user = 'root';
$pass = '30ed3a886d76d9c45662a255';

try{
    $db = new PDO ($dns, $user, $pass);
}catch(PDOException $e){
    $error = $e->getMessage();
    echo $error;
}

echo json_encode();
?>
