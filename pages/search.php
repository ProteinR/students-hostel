<?php

require_once 'header.html';
require_once '../connect_db.php';

try {
    $query = 'SELECT fio, gender, block, passport, fac_name, course, group_number, room_number, personal_phone, parents_phone, home_address
FROM students, faculties, rooms
WHERE fac_id = faculties.id AND room_id = rooms.id AND LOWER(fio) LIKE LOWER(:name) ';
    $find = $pdo->prepare($query);
    $find -> execute(['name' => "%".$_GET['searh-fio']."%"]);

    $student = $find -> fetch(PDO::FETCH_NUM);
}catch (PDOException $e) {
 echo "Ошибка" . $e->getMessage();
}
?>

<div class="table-students">
    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">Name
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Gender
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Block
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Passport
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Fac_ID
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Course
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Group num
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">room id
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">personal_phone
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">per_phone
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">address
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>

        </tr>
        </thead>
        <tbody>
<?
//foreach ($student as $peoples) {
//    echo "<tr>";
//    foreach ($peoples as $v) {
//        echo "<td>";
//        echo $v;
//        echo "</td>";
//    }
//    echo "</tr>";
//}
echo "<tr>";

foreach ($student as $people) {
    echo "<td>";
    echo $people;
    echo "</td>";
}
echo "</tr>";

?>
        </tbody>
    </table>
