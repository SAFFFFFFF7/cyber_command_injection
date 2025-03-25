<?php
$pdo = new PDO("mysql:host=localhost;dbname=injection", "root", "secret", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM utilisateurs WHERE username = :username AND password = :password";

    $result = $pdo->query($query);

    if($result->rowCount() > 0){
        echo 'Login Success';
    }else{
        echo 'Login Failed';
    }
?>