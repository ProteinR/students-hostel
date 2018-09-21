<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 21.09.2018
 * Time: 11:30
 */
require_once '../connect_db.php';

$query = 'SELECT * FROM students';
$students = $pdo->query($query);

foreach ($students as $k => $student) {
    foreach ($student as $k => $v) {
        echo $v ." " ;
    }
    echo "<br>";
}

//header("Location: /index.php");