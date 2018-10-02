<?php
require_once 'header.html';
require_once '../connect_db.php';

$query = 'SELECT id, fio, room_id FROM students';
$objStudents = $pdo->prepare($query);
$objStudents->execute();
$arrStudents = $objStudents -> fetchAll(PDO::FETCH_ASSOC);

?>

<div class="table-students">
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm" hidden>id
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">ФИО
<i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Комната
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Действие
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>

                <?
                foreach ($arrStudents as $id => $student) {
                    echo '<tr>';
                    echo '<td hidden>'.$student['id'].'</td>';
                    echo '<td>'.$student['fio'].'</td>';
                        echo '<td>'.$student['room_id'].'</td>';
                        echo "<td> <a role='button' class='btn btn-warning waves-effect btn-sm'>Выселить</a> <a role='button' class='btn btn-danger mx-5 waves-effect btn-sm '>Удалить</a>
</td>";
                    echo '</tr>';
                }
                ?>


            </tr>
            </thead>
            <tbody>