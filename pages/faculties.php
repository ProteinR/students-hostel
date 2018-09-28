<?php

require_once 'header.html';
require_once '../connect_db.php';

$query = 'SELECT * FROM faculties';
$faculties = $pdo->query($query);

?>

<div class="table-students">
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>
              <th class="th-sm">ID
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Название факультета
                  <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>


          </tr>
          </thead>
          <tbody>
<?
foreach ($faculties as $fac) {
    echo "<tr>";
    foreach ($fac as $v) {
        echo "<td>";
        echo $v;
        echo "</td>";
    }
    echo "</tr>";
}
?>
          </tbody>
      </table>
