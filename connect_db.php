<?php

try {
    $pdo = new PDO('pgsql:host=localhost;dbname=StudHostel', 'postgres', '12345678');
}catch (PDOException $e) {
    echo "Невозможно установить соедение";
    //echo $e->getMessage();
}