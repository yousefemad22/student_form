<?php
$dsn = "mysql:host=localhost;dbname=college";
$user = "root";
$pass = "";

try {
    $con = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
?>