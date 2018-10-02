<?php

require_once 'header.html';
require_once '../connect_db.php';

$query = 'SELECT * FROM faculties';
$objFaculties = $pdo->query($query);
$arrFac = $objFaculties->fetchAll(PDO::FETCH_KEY_PAIR); //массив вида $id => $value

?>


    <div class="table-students">
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">№
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Название факультета
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>


            </tr>
            </thead>
            <tbody>
            <?
            foreach ($arrFac as $id => $fac) {
                echo "<tr>";
                echo "<td> $id </td> <td> $fac </td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>